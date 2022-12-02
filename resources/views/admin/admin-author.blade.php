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
                                        @if (!empty($names))
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
                                                <x-modal titleModal="Edit Data" idModal="edit{{ $name->id }}">
                                                    <form action="/admin/author/edit/{{ $name->id }}" method="post"
                                                        class="form-horizontal">
                                                        @method('PUT')
                                                        @csrf
                                                        <div class="form-group">
                                                            <label for="firstname" class="control-label mb-1">Author
                                                                First Name</label>
                                                            <input id="firstname" name="author_firstname" type="text"
                                                                class="form-control firstname valid" data-val="true"
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
                                                            <input id="lastname" name="author_lastname" type="text"
                                                                class="form-control lastname valid" data-val="true"
                                                                data-val-required="Please enter the name on card"
                                                                autocomplete="lastname" aria-required="true"
                                                                aria-invalid="false" aria-describedby="lastname"
                                                                value="{{ $name->author_lastname }}">
                                                            <span class="help-block field-validation-valid"
                                                                data-valmsg-for="lastname"
                                                                data-valmsg-replace="true"></span>
                                                        </div>
                                                        <button type="submit"
                                                                class="btn btn-warning">Edit</button>
                                                    </form>
                                                </x-modal>
                                                <x-modal titleModal="Delete Data" idModal="destroy{{ $name->id }}">
                                                    <form action="/admin/author/delete/{{ $name->id }}"
                                                        method="post" class="form-horizontal">
                                                        @method('DELETE')
                                                        @csrf
                                                        <p><strong>Apakah anda yakin untuk menghapus data ini?</strong></p>
                                                        <br>
                                                        <button type="submit"
                                                                        class="btn btn-danger">Delete</button>
                                                    </form>
                                                </x-modal>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                                <button class="btn btn-primary" type="button" data-toggle="modal"
                                    data-target="#tambahData">
                                    <i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah Data
                                </button>
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
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- .animated -->
        </div>
    </div>
    <x-modal titleModal="Tambah Data" idModal="tambahData">
        <form action="/admin/author/input" method="post" class="form-horizontal">
            @csrf
            <div class="form-group">
                <label for="firstname" class="control-label mb-1">Author First Name</label>
                <input id="firstname" name="author_firstname" type="text" class="form-control firstname valid"
                    data-val="true" data-val-required="Please enter the name on card" autocomplete="firstname"
                    aria-required="true" aria-invalid="false" aria-describedby="firstname">
                <span class="help-block field-validation-valid" data-valmsg-for="firstname"
                    data-valmsg-replace="true"></span>
            </div>
            <div class="form-group">
                <label for="lastname" class="control-label mb-1">Author Last Name</label>
                <input id="lastname" name="author_lastname" type="text" class="form-control lastname valid"
                    data-val="true" data-val-required="Please enter the name on card" autocomplete="lastname"
                    aria-required="true" aria-invalid="false" aria-describedby="lastname">
                <span class="help-block field-validation-valid" data-valmsg-for="lastname"
                    data-valmsg-replace="true"></span>
            </div>
            <button type="submit" class="btn btn-primary btn-md mx-auto" id="submit">
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>
        </form>
    </x-modal>
@endsection
