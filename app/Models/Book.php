<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    use HasFactory;

    public function book()
    {
        return $this->belongsTo(Publisher::class);
    }

    public function authors()
    {
        return $this->belongsToMany(Author::class, 'book_author', 'book_id', 'author_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Role::class, 'role_user_table', 'book_id', 'category_id');
    }

    public function userOrder()
    {
        return $this->belongsToMany(User_Order::class, 'order_cart', 'book_id', 'user_order_id');
    }
}
