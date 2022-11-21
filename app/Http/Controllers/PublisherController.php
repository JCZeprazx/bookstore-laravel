<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function show()
    {
        $names = Publisher::all();
        return view('admin.admin-publisher', [
            'names' => $names
        ]);
    }

    public function store(Request $request)
    {
        Publisher::create($request->all());
        return redirect('/admin/publisher');
    }

    public function edit(Request $request, $id)
    {
        $author = Publisher::findOrFail($id);
        $author->update($request->all());
        return redirect('/admin/publisher');
    }

    public function destroy($id)
    {
        $author = Publisher::findOrFail($id);
        $author->delete();
        return redirect('/admin/publisher');
    }

}

