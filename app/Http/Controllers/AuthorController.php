<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{

    public function show()
    {
        $names = Author::all();
        return view('admin.admin-author', [
            'names' => $names
        ]);
    }

    public function store(Request $request)
    {
        Author::create($request->all());
        return redirect('/admin/author');
    }

    public function edit(Request $request, $id)
    {
        $author = Author::findOrFail($id);
        $author->update($request->all());
        return redirect('/admin/author');
    }

    public function destroy($id)
    {
        $author = Author::findOrFail($id);
        $author->delete();
        return redirect('/admin/author');
    }

}
