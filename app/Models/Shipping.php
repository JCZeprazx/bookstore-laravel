<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsToMany(User::class, 'user__orders', 'shipping_id', 'user_id');
    }
}
