{{-- Extending Main Layout --}}
@extends('layouts.main')

{{-- Page Title --}}
@section('title', 'Bookstore')

{{-- Page Content --}}
@section('content')

    {{-- Navbar --}}
    @include('layouts.navbar')

    {{-- Carousel --}}
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="img/banner/book2.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>NF</b> Bookstore</h1>
                                <h3 class="h2">Sebuah toko buku</h3>
                                <p>
                                    NF-Book merupakan sebuah toko yang dibuat untuk dikumpulkan sebagai tugas laravel
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="img/banner/book3.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Menjual</h1>
                                <h3 class="h2">Buku yang 100% tidak original</h3>
                                <p>
                                    Buku yang dijual di toko ini merupakan buku bajakan yang menjadikan ciri khas toko ini
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="img/banner/book5.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Menyediakan</h1>
                                <h3 class="h2">Banyak pilhan</h3>
                                <p>
                                    dan banyak genre yang sesuai dengan keinginan anda
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel"
            role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel"
            role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>

    {{-- Featured Book --}}

    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-md-6 m-auto">
                    <h1 class="h1">Featured Book</h1>
                    <p>
                        Buku unggulan karya penulis-penulis terkenal yang dikemas baik dan menjadi mahakarya
                    </p>
                </div>
            </div>

            <div class="row">
                @if (!empty($product))

                    @foreach ($products as $product)
                        <div class="col-md-3 mb-4">
                            <div class="card h-100">
                                <a href="/shop/book-details/{{ $product->id }}">
                                    <img src="{{ asset('storage/photo/' . $product->book_cover) }}" class="card-img-top"
                                        alt="...">
                                </a>
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <a href="/shop/book-details/{{ $product->id }}"
                                        class="h3 text-decoration-none text-dark"><strong>{{ $product->book_name }}</strong></a>
                                    @foreach ($product->authors as $author)
                                        <p>Karya : {{ $author->author_firstname . '' . $author->author_lastname }}</p>
                                    @endforeach
                                </div>
                                <div class="card-footer text-center">
                                    <a class="btn btn-primary mx-0 " href="/shop/book-details/{{ $product->id }}"
                                        role="button">Click to View!</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                @endif
            </div>

        </div>
    </section>

    {{-- Footer --}}
    @include('layouts.footer')

@endsection
