@extends('layouts.main-admin')

@section('content')
    @include('layouts.sidenav-admin')
    <div id="right-panel" class="right-panel">
        @include('layouts.header-admin')

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Edit Buku</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="/admin/book/edit/{{ $id }}/update" method="post"
                                    class="form-horizontal" enctype="multipart/form-data">
                                    @method('put')
                                    @csrf
                                    <div class="form-group">
                                        <label for="book_name" class="control-label mb-1">Nama Buku</label>
                                        <input id="book_name" name="book_name" type="text"
                                            class="form-control book_name valid" data-val="true"
                                            data-val-required="Please enter the name on card" autocomplete="book_name"
                                            aria-required="true" aria-invalid="false" aria-describedby="book_name"
                                            value="{{ $book->book_name }}">
                                        <span class="help-block field-validation-valid" data-valmsg-for="book_name"
                                            data-valmsg-replace="true"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="isbn" class="control-label mb-1">ISBN</label>
                                        <input id="isbn" name="isbn" type="text" class="form-control isbn valid"
                                            data-val="true" data-val-required="Please enter the name on card"
                                            autocomplete="isbn" aria-required="true" aria-invalid="false"
                                            aria-describedby="isbn" value="{{ $book->isbn }}">
                                        <span class="help-block field-validation-valid" data-valmsg-for="isbn"
                                            data-valmsg-replace="true"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="total_page" class="control-label mb-1">Total Halaman</label>
                                        <input id="total_page" name="total_page" type="number"
                                            class="form-control total_page valid" data-val="true"
                                            data-val-required="Please enter the name on card" autocomplete="total_page"
                                            aria-required="true" aria-invalid="false" aria-describedby="total_page"
                                            value="{{ $book->total_page }}">
                                        <span class="help-block field-validation-valid" data-valmsg-for="total_page"
                                            data-valmsg-replace="true"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="release_date" class="control-label mb-1">Tanggal Rilis</label>
                                        <input id="release_date" name="release_date" type="date"
                                            class="form-control release_date valid" data-val="true"
                                            data-val-required="Please enter the name on card" autocomplete="release_date"
                                            aria-required="true" aria-invalid="false" aria-describedby="release_date"
                                            value="{{ $book->release_date }}">
                                        <span class="help-block field-validation-valid" data-valmsg-for="release_date"
                                            data-valmsg-replace="true"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="book_description" class="control-label mb-1">Deskripsi Buku</label>
                                        <textarea id="book_description" name="book_description" type="textarea" class="form-control book_description valid"
                                            data-val="true" data-val-required="Please enter the name on card" autocomplete="book_description"
                                            aria-required="true" aria-invalid="false" aria-describedby="book_description">{{ $book->book_description }}</textarea>
                                        <span class="help-block field-validation-valid" data-valmsg-for="book_description"
                                            data-valmsg-replace="true"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="select" class=" form-control-label">Bahasa</label>
                                        <select name="language_id" id="select" class="form-control">
                                            <option value="{{ $book->language_id }}">{{ $book->language->language }}
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="select" class=" form-control-label">Author</label>
                                        <select class="select-author form-control" name="authors[]" multiple="multiple">
                                            @foreach ($authors as $author)
                                            <option value="{{ $author->id }}">
                                                {{ $author->author_firstname .' '. $author->author_lastname}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="select" class=" form-control-label">Publisher</label>
                                        <select name="publisher_id" id="select" class="form-control">
                                            <option value="{{ $book->publisher_id }}">
                                                {{ $book->publisher->publisher_name }}</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="select" class=" form-control-label">Category</label>
                                        <select class="select-categories form-control" name="categories[]" multiple="multiple">
                                            @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">
                                                {{ $category->category_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="book_cost" class="control-label mb-1">Harga</label>
                                        <input id="book_cost" name="book_cost" type="number"
                                            class="form-control book_cost valid" data-val="true"
                                            data-val-required="Please enter the name on card" autocomplete="book_cost"
                                            aria-required="true" aria-invalid="false" aria-describedby="book_cost"
                                            value="{{ $book->book_cost }}">
                                        <span class="help-block field-validation-valid" data-valmsg-for="book_cost"
                                            data-valmsg-replace="true"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="total_stock" class="control-label mb-1">Total Stok</label>
                                        <input id="total_stock" name="total_stock" type="number"
                                            class="form-control total_stock valid" data-val="true"
                                            data-val-required="Please enter the name on card" autocomplete="total_stock"
                                            aria-required="true" aria-invalid="false" aria-describedby="total_stock"
                                            value="{{ $book->total_stock }}">
                                        <span class="help-block field-validation-valid" data-valmsg-for="total_stock"
                                            data-valmsg-replace="true"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Foto Buku</label>
                                        <input name="photo" type="file" class="form-control-file"
                                            id="exampleFormControlFile1">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <img class="m-2"
                                                    src="{{ asset('storage/photo/' . $book->book_cover) }}"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-md mx-auto" id="submit">
                                        <i class="fa fa-dot-circle-o"></i> Submit
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
