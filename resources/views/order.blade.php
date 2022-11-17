@extends('layouts.main')

@section('content')
    @include('layouts.navbar')

    <div class="container py-5">
        <div class="row">

            <div class="col-lg-3">
                <h1 class="h2 pb-4">Your Order</h1>
                <ul class="list-unstyled templatemo-accordion">
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h4 text-decoration-none" href="#">
                            My Cart
                        </a>
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h4 text-decoration-none" href="#">
                            Pending Order
                        </a>
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h4 text-decoration-none" href="#">
                            Order Delivery
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    @include('layouts.footer')
@endsection
