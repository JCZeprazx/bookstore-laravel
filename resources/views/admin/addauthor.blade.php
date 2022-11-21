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
                                <strong>Tambah Data Author</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="/admin/author/add-author/input" method="post" class="form-horizontal">
                                    @csrf
                                    <div class="form-group">
                                        <label for="firstname" class="control-label mb-1">Author First Name</label>
                                        <input id="firstname" name="author_firstname" type="text"
                                            class="form-control firstname valid" data-val="true"
                                            data-val-required="Please enter the name on card" autocomplete="firstname"
                                            aria-required="true" aria-invalid="false" aria-describedby="firstname">
                                        <span class="help-block field-validation-valid" data-valmsg-for="firstname"
                                            data-valmsg-replace="true"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="lastname" class="control-label mb-1">Author Last Name</label>
                                        <input id="lastname" name="author_lastname" type="text"
                                            class="form-control lastname valid" data-val="true"
                                            data-val-required="Please enter the name on card" autocomplete="lastname"
                                            aria-required="true" aria-invalid="false" aria-describedby="lastname">
                                        <span class="help-block field-validation-valid" data-valmsg-for="lastname"
                                            data-valmsg-replace="true"></span>
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
