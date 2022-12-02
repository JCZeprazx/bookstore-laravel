<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Order extends Model
{
    use HasFactory;

    public function book()
    {
        return $this->belongsToMany(Book::class, 'order_cart', 'user_order_id', 'book_id');
    }
}
