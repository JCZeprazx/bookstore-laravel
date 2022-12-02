<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Cart extends Model
{
    use HasFactory;

    protected $table = 'order_cart';

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }
}
