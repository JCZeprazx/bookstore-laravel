<nav class="navbar navbar-expand-lg navbar-light shadow">
    <div class="container d-flex justify-content-between align-items-center">

        <a class="navbar-brand text-success logo h1 align-self-center" style="font-size: 30px" href="/">
            NF-Book
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
            data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between"
            id="templatemo_main_nav">
            <div class="flex-fill">
                <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/about')}}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/shop')}}">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contact')}}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/order')}}">Order</a>
                    </li>
                </ul>
            </div>

            <div class="navbar align-self-center d-flex">
                <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                    <div class="input-group">
                        <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                        <div class="input-group-text">
                            <i class="fa fa-fw fa-search"></i>
                        </div>
                    </div>
                </div>
                <div class="dropstart">
                        <a class="btn nav-icon position-relative text-decoration-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <div class="cart">
                                <div class="cart-list">
                                    <img src="assets/img/buku/pulang_tere_liye.jpeg" alt="Pulang" style="width: 80px; height:120px; float: left; margin-right: 10px;">
                                    <div class="detail-cart ">
                                        <a class="text">Pergi</a>
                                        <span class="author">Tere Liye</span>
                                        <p class="text">Soft Cover</p>
                                        <p class="text">Rp 87.000</p>
                                        <p class="text" style="text-align: right;">Jumlah: 1</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Tombol Bayar -->
                            <div class="button-cart">
                                <p class="total">
                                    Total
                                    <span style="font-weight: bold; float: right;">Rp 87.000</span>
                                </p>
                                <button class="tombol-cart">Lihat Keranjang</button>
                            </div>
                        </ul>
                    </div>
                <div class="dropdown">
                    <a class="nav-icon position-relative text-decoration-none btn btn-light" href="#"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-fw fa-user text-dark mr-3"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</nav>
