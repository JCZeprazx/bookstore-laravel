<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;
use PDF;

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

    public function publisherPDF(){
        $names = Publisher::all(); 
        $pdf = PDF::loadView('admin.publisher_pdf', ['names' => $names]);
        return $pdf->download('report_publisher.pdf');
    }

}