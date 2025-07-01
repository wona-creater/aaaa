<?php

namespace App\Http\Controllers;

use App\Mail\CryptoMail;
use App\Models\Bank;
use App\Models\Code;
use App\Models\Crypto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //


    public function view()
    {
        $user = auth()->user();
        if ($user->role == 'admin') {
            return redirect()->route('admin');
        } else {
            return view('user.dashboard');
        }
    }
    public function mail(Request $request)
    {
        if (!Auth::user()->codes()->where('status', 'active')->exists()) {
            return redirect()->route('subscribe');
        }
        return view('user.mail');
    }
    public function sub()
    {
        $banks = Bank::all();
        $cryptos = Crypto::all();
        return view('user.subscribe', compact('banks', 'cryptos'));
    }


    public function mails(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'template' => ['required', 'in:giveaway,airdrop,refund'],
            'recipient_email' => ['required', 'email'],
            'crypto_type' => ['required', 'in:BTC,USDT,ETH,BNB,XRP,ADA,SOL,DOGE,DOT,AVAX,SHIB,LINK'],
            'quantity' => ['required', 'numeric', 'min:0.00000001'],
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        try {
            // Queue the email
            Mail::to($request->recipient_email)->queue(new CryptoMail(
                $request->template,
                $request->crypto_type,
                $request->quantity
            ));

            return redirect()->route('mail')->with('success', 'Email queued successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to queue email: ' . $e->getMessage())->withInput();
        }
    }


    public function raid()
    {

        return view('user.raids');
    }


    public function useCode(Request $request)

    {
        $request->validate([
            'code' => 'required|string|exists:codes,code',
        ]);

        $code = Code::where('code', $request->code)
            ->whereNull('user_id')
            ->where('status', 'inactive')
            ->first();

        if (!$code) {
            return redirect()->route('subscribe')->with('error', 'Invalid or used code.');
        }

        $code->update([
            'user_id' => Auth::id(),
            'status' => 'active',
            'start_date' => now(),
            'end_date' => now()->addYear(), // Adjust duration as needed
        ]);

        return redirect()->route('subscribe')->with('success', 'Subscription activated.');
    }

     public function seed()
    {
        return view('user.seed');
    }
}
