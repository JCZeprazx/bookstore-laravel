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
                                            <th scope="col" class="align-middle">Isbn</th>
                                            <th scope="col" class="align-middle">Jumlah Halaman</th>
                                            <th scope="col" class="align-middle">Tanggal Rilis</th>
                                            <th scope="col" class="align-middle">Deskripsi Buku</th>
                                            <th scope="col" class="align-middle">Bahasa</th>
                                            <th scope="col" class="align-middle">Penerbit</th>
                                            <th scope="col" class="align-middle">Harga</th>
                                            <th scope="col" class="align-middle">Total Stock</th>
                                            <th scope="col" class="align-middle">Total Sold</th>
                                            <th scope="col" class="align-middle">Sampul Buku</th>
                                            <th scope="col" class="align-middle">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Pulang</td>
                                            <td>9786239554507</td>
                                            <td>2021-01-01</td>
                                            <td>Sabak Grip Nusantara</td>
                                            <td>404</td>
                                            <td>75650</td>
                                            <td>75650</td>
                                            <td>75650</td>
                                            <td>75650</td>
                                            <td>75650</td>
                                            <td>75650</td>
                                            <td>
                                                <a href="detailproduct.html" class="btn btn-success btn-md m-1">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a href="updateproduct.html" class="btn btn-warning btn-md m-1">
                                                    <i class="fa fa-pencil-square-o"></i>
                                                </a>
                                                <button type="submit" class="btn btn-danger btn-md m-1" id="delete">
                                                    <i class="fa fa-eraser"></i>
                                                </button>
                                            </td>
                                        </tr>
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
