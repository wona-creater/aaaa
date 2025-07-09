<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sent extends Model
{
    protected $table = 'sent_emails';
    protected $fillable = ['user_id', 'recipient_email', 'quantity', 'template', 'crypto_type'];

    public function wallets()
    {
        return $this->hasMany(Wallet::class, 'sent_email_id', 'id');
    }
}
