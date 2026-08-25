<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'address',
        'description',
        'client_id',
        'user_id',
        'status'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function courier()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
