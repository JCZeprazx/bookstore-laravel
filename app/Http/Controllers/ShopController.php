<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function landing()
    {
        $products = Book::limit(4)->get();
        return view('landing-page', [
            'products' => $products
        ]);
    }

    public function show()
    {
        $products = Book::all();
        return view('shop', [
            'products' => $products
        ]);
    }

    public function detail($id)
    {
        $book = Book::findOrFail($id);
        $book->get();
        return view('book-details', [
            'book' => $book
        ]);
    }
}
