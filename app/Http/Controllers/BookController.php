<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use App\Models\Language;
use App\Models\Publisher;
use Illuminate\Http\Request;


class BookController extends Controller
{
    public function show()
    {
        $books = Book::all();
        return view('admin.admin-book', [
            'books' => $books
        ]);
    }

    public function edit(Request $request, $id)
    {
        $book = Book::findOrFail($id);
        return view('admin.editbook', [
            'id' => $book->id,
            'book' => $book
        ]);
    }

    public function store(Request $request)
    {
        $extension = $request->file('photo')->getClientOriginalExtension();
        $filename = $request->book_name . '-' . now()->timestamp . '.' . $extension;
        $request->file('photo')->storeAs('photo', $filename);

        $request['book_cover'] = $filename;

        Book::create($request->all());
        return redirect('/admin/book/');
    }

    public function bookForm()
    {
        $publishers = Publisher::all();
        $languages = Language::all();
        return view('admin.addbook', [
            'languages' => $languages,
            'publishers' => $publishers
        ]);
    }
}
