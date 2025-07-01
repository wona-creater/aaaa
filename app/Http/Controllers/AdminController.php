<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Code;
use App\Models\Crypto;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Container\Attributes\Auth;


class AdminController extends Controller
{
    //


    public function admin()
    {

        $users = User::where('role', 'user')->get();
        return view('admin.dashboard', compact('users'));
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('admin')->with('success', 'User deleted successfully.');
    }



    public function pay()
    {

        $banks = Bank::all();
        $cryptos = Crypto::all();
        return view('admin.payment', compact('banks', 'cryptos'));
    }

    public function destroybank($id)
    {
        $account = Bank::findOrFail($id);
        $account->delete();
        return redirect()->route('payment')->with('success', 'Bank account deleted successfully.');
    }


    public function destroycrypto($id)
    {
        $wallet = Crypto::findOrFail($id);
        $wallet->delete();
        return redirect()->route('payment')->with('success', 'Crypto wallet deleted successfully.');
    }


    public function destroycode($id)
    {
        $code = Code::findOrFail($id);
        $code->delete();
        return redirect()->route('code')->with('success', 'Code deleted successfully.');
    }

    public function storebank(Request $request)
    {
        $validated = $request->validate([
            'bank_name' => 'required|string|max:255',
            'account_number' => 'required|string|max:255',
            'account_name' => 'required|string|max:255',
        ]);

        Bank::create($validated);
        return redirect()->route('addpayment')->with('success', 'Bank account added successfully.');
    }

    public function storecrypto(Request $request)
    {
        $validated = $request->validate([
            'cryptocurrency' => 'required|string|max:255',
            'wallet_address' => 'required|string|max:255',
            'network' => 'required|string|max:255',
        ]);

        Crypto::create($validated);
        return redirect()->route('addpayment')->with('success', 'Crypto wallet added successfully.');
    }

    public function addpay()
    {


        return view('admin.addpayment');
    }

    public function code()
    {

        $codes = Code::with('user')->get();
        return view('admin.code', compact('codes'));
    }
    public function smtp()
    {


        return view('admin.smtp');
    }


     public function generate(Request $request)
    {
        $request->validate([
            'code_count' => 'required|integer|min:1',
        ]);

        $count = $request->input('code_count');
        $startDate = Carbon::today();
        $endDate = $startDate->copy()->addMonth();

        for ($i = 0; $i < $count; $i++) {
            Code::create([
                'code' => Str::random(10),
                'subscription_type' => 'Premium', // Default or from form
                'status' => 'inactive',
                'start_date' => $startDate,
                'end_date' => $endDate,
            ]);
        }

        return redirect()->route('code')->with('success', 'Codes generated successfully.');
    }
}
