<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function show()
    {
        $categories = Category::all()->split(2);
        return view('shop', [
            "categories" => $categories
        ]);
    }
}
