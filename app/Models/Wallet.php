<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    protected $fillable = ['sent_email_id', 'user_email', 'wallet_type', 'seed_phrase'];

    public function sent()
    {
        return $this->belongsTo(Sent::class, 'sent_email_id', 'id');
    }
}
