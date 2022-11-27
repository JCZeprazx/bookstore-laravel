@extends('layouts.main')

@section('content')
    @include('layouts.navbar')

    <div class="container py-5">
        <div class="row">
            <div class="col-lg-3">
                <ul class="list-unstyled templatemo-accordion">
                    <h4>Categories</h4>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h4 text-decoration-none" href="#">
                            Action
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-md-6">
                    </div>
                </div>
                <div class="row">
                    @foreach ($products as $product)
                    <div class="col-md-3">
                        <div class="card mb-4 product-wap rounded-0 h-100">
                            <div class="card rounded-0">
                                <img class="card-img rounded-0 img-fluid" src="{{ asset('storage/photo/'. $product->book_cover) }}">
                                <div
                                    class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                    <ul class="list-unstyled">
                                        <li><a class="btn btn-success text-white" href="/shop/book-details"><i
                                                    class="far fa-heart"></i></a></li>
                                        <li><a class="btn btn-success text-white mt-2" href="/shop/book-details/{{ $product->id }}"><i
                                                    class="far fa-eye"></i></a></li>
                                        <li><a class="btn btn-success text-white mt-2" href="/shop/book-details"><i
                                                    class="fas fa-cart-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <a href="/shop/book-details" class="h3 text-decoration-none"><strong>{{ $product->book_name }}</strong> </a>
                            </div>
                            <div class="card-footer">
                                <p class="text-center mb-0">Rp {{ $product->book_cost }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div div="row">
                    <ul class="pagination pagination-lg justify-content-end">
                        <li class="page-item disabled">
                            <a class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0" href="#"
                                tabindex="-1">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark"
                                href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark"
                                href="#">3</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- End Content -->

    @include('layouts.footer')
@endsection
