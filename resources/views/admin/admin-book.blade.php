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
                                <strong class="card-title">Data Buku</strong>
                            </div>
                            <div class="card-body table-responsive">
                                <table class="table table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="align-middle">No</th>
                                            <th scope="col" class="align-middle">Nama Buku</th>
                                            <th scope="col" class="align-middle">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($books as $book)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $book->book_name }}</td>
                                                <td>
                                                    <a href="/admin/book/view/{{ $book->id }}" class="btn btn-success btn-md m-1">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                    <a href="/admin/book/edit/{{ $book->id }}" class="btn btn-warning btn-md m-1">
                                                        <i class="fa fa-pencil-square-o"></i>
                                                    </a>
                                                    <button ttype="button" class="btn btn-danger btn-md m-1"
                                                        data-toggle="modal" data-target="#destroy{{ $book->id }}">
                                                        <i class="fa fa-eraser"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <div class="modal fade" id="destroy{{ $book->id }}" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <form action="/admin/book/delete/{{ $book->id }}"
                                                            method="post" class="form-horizontal">
                                                            @method('DELETE')
                                                            @csrf
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                                                            </div>
                                                            <div class="modal-body">
                                                                Apakah anda yakin untuk menghapus data ini?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                                <button type="submit"
                                                                    class="btn btn-danger">Delete</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </tbody>
                                </table>
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                                <a href="/admin/book/add-book" class="btn btn-primary">
                                    <i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah Data
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- .animated -->
        </div>

    </div>
@endsection
