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
                                <strong>Tambah Data Buku</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="#" method="post" class="form-horizontal">
                                    <div class="form-group">
                                        <label for="book-name" class="control-label mb-1">Nama Buku</label>
                                        <input id="book-name" name="book-name" type="text" class="form-control book-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="book-name" aria-required="true" aria-invalid="false" aria-describedby="book-name">
                                        <span class="help-block field-validation-valid" data-valmsg-for="book-name" data-valmsg-replace="true"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="isbn" class="control-label mb-1">ISBN</label>
                                        <input id="isbn" name="isbn" type="number" class="form-control isbn valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="isbn" aria-required="true" aria-invalid="false" aria-describedby="isbn">
                                        <span class="help-block field-validation-valid" data-valmsg-for="isbn" data-valmsg-replace="true"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="total-page" class="control-label mb-1">Total Halaman</label>
                                        <input id="total-page" name="total-page" type="number" class="form-control total-page valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="total-page" aria-required="true" aria-invalid="false" aria-describedby="total-page">
                                        <span class="help-block field-validation-valid" data-valmsg-for="total-page" data-valmsg-replace="true"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="release-date" class="control-label mb-1">Tanggal Rilis</label>
                                        <input id="release-date" name="release-date" type="date" class="form-control release-date valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="release-date" aria-required="true" aria-invalid="false" aria-describedby="release-date">
                                        <span class="help-block field-validation-valid" data-valmsg-for="release-date" data-valmsg-replace="true"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="description" class="control-label mb-1">Deskripsi Buku</label>
                                        <textarea id="description" name="description" type="textarea" class="form-control description valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="description" aria-required="true" aria-invalid="false" aria-describedby="description"></textarea>
                                        <span class="help-block field-validation-valid" data-valmsg-for="description" data-valmsg-replace="true"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="penerbit" class="control-label mb-1">Penerbit</label>
                                        <input id="penerbit" name="penerbit" type="text" class="form-control penerbit valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="penerbit" aria-required="true" aria-invalid="false" aria-describedby="penerbit">
                                        <span class="help-block field-validation-valid" data-valmsg-for="penerbit" data-valmsg-replace="true"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="harga" class="control-label mb-1">Harga</label>
                                        <input id="harga" name="harga" type="number" class="form-control harga valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="harga" aria-required="true" aria-invalid="false" aria-describedby="harga">
                                        <span class="help-block field-validation-valid" data-valmsg-for="harga" data-valmsg-replace="true"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="total-stok" class="control-label mb-1">Total Stok</label>
                                        <input id="total-stok" name="total-stok" type="number" class="form-control total-stok valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="total-stok" aria-required="true" aria-invalid="false" aria-describedby="total-stok">
                                        <span class="help-block field-validation-valid" data-valmsg-for="total-stok" data-valmsg-replace="true"></span>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-2"><label for="hf-password" class=" form-control-label">Upload Foto</label></div>
                                        <div class="col-12 col-md-10 pl-1 py-0 pr-0"><input class="form-control border border-0" type="file" id="formFile"></div>
                                    </div>
                                </form>

                                <button type="submit" class="btn btn-primary btn-md mx-auto" id="submit">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>

                            </div>
                        </div>

                    </div>


                </div>

            </div>


        </div>

    </div>
@endsection
