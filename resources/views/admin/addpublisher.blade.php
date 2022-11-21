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
                                <strong>Tambah Data Publisher</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="/admin/publisher/add-publisher/input" method="post" class="form-horizontal">
                                    @csrf
                                    <div class="form-group">
                                        <label for="publisher" class="control-label mb-1">Publisher Name</label>
                                        <input id="publisher" name="publisher_name" type="text" class="form-control publisher valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="publisher" aria-required="true" aria-invalid="false" aria-describedby="publisher">
                                        <span class="help-block field-validation-valid" data-valmsg-for="publisher" data-valmsg-replace="true"></span>
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
