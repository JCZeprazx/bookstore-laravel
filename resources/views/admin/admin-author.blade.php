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
                                <strong class="card-title">Data Author</strong>
                            </div>
                            <div class="card-body table-responsive">
                                <table class="table table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="align-middle">No</th>
                                            <th scope="col" class="align-middle">Author First Name</th>
                                            <th scope="col" class="align-middle">Author Last Name</th>
                                            <th scope="col" class="align-middle">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($names as $name)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $name->author_firstname }}</td>
                                                <td>{{ $name->author_lastname }}</td>
                                                <td>
                                                    <button type="button" class="btn btn-warning btn-md m-1"
                                                        data-toggle="modal" data-target="#edit{{ $name->id }}">
                                                        <i class="fa fa-pencil-square-o"></i>
                                                    </button>
                                                    <button ttype="button" class="btn btn-danger btn-md m-1"
                                                        data-toggle="modal" data-target="#destroy{{ $name->id }}">
                                                        <i class="fa fa-eraser"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <div class="modal fade" id="edit{{ $name->id }}" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <form action="/admin/author/edit/{{ $name->id }}" method="post"
                                                            class="form-horizontal">
                                                            @method('PUT')
                                                            @csrf
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Edit Data
                                                                </h5>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="firstname" class="control-label mb-1">Author
                                                                        First Name</label>
                                                                    <input id="firstname" name="author_firstname"
                                                                        type="text" class="form-control firstname valid"
                                                                        data-val="true"
                                                                        data-val-required="Please enter the name on card"
                                                                        autocomplete="firstname" aria-required="true"
                                                                        aria-invalid="false" aria-describedby="firstname"
                                                                        value="{{ $name->author_firstname }}">
                                                                    <span class="help-block field-validation-valid"
                                                                        data-valmsg-for="firstname"
                                                                        data-valmsg-replace="true"></span>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="lastname" class="control-label mb-1">Author
                                                                        Last Name</label>
                                                                    <input id="lastname" name="author_lastname"
                                                                        type="text" class="form-control lastname valid"
                                                                        data-val="true"
                                                                        data-val-required="Please enter the name on card"
                                                                        autocomplete="lastname" aria-required="true"
                                                                        aria-invalid="false" aria-describedby="lastname"
                                                                        value="{{ $name->author_lastname }}">
                                                                    <span class="help-block field-validation-valid"
                                                                        data-valmsg-for="lastname"
                                                                        data-valmsg-replace="true"></span>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-warning">Edit</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal fade" id="destroy{{ $name->id }}" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <form action="/admin/author/delete/{{ $name->id }}"
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
                                <a href="/admin/author/add-author" class="btn btn-primary">
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
