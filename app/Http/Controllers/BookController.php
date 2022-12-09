<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Language;
use App\Models\Publisher;
use Illuminate\Http\Request;
use PDF;


class BookController extends Controller
{
    public function show()
    {
        $books = Book::all();
        return view('admin.admin-book', [
            'books' => $books
        ]);
    }

    public function edit($id)
    {

        $book = Book::findOrFail($id);
        $authors = Author::all();
        $categories = Category::all();
        return view('admin.editbook', [
            'id' => $book->id,
            'book' => $book,
            'authors' => $authors,
            'categories' => $categories
        ]);
    }

    public function editData(Request $request ,$id)
    {
        $book = Book::findOrfail($id);
        $book->authors()->attach($request->authors);
        $book->categories()->attach($request->categories);
        $book->update($request->all());
        return redirect('/admin/book');
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
        $authors = Author::all();
        $publishers = Publisher::all();
        $languages = Language::all();
        return view('admin.addbook', [
            'languages' => $languages,
            'publishers' => $publishers,
            'authors' => $authors
        ]);
    }

    public function bukuPDF(){
        $names = Book::all(); 
        $pdf = PDF::loadView('admin.books_pdf', ['names' => $names]);
        return $pdf->download('report_books.pdf');
    }

}