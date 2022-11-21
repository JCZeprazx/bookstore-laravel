<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_name',
        'isbn',
        'total_page',
        'release_date',
        'book_description',
        'language_id',
        'publisher_id',
        'book_cost',
        'total_stock',
        'total_sold',
        'book_cover'
    ];

    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
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
