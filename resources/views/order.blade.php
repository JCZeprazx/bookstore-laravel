@extends('layouts.main')

@section('content')
    @include('layouts.navbar')
    
    <div class="cart-start">
        <div class="container py-5 cart-container">
            <div class="cart-column">
                <div class="cart-section alamat-user">
                    <p><i class="bi bi-geo-alt-fill"></i>&nbsp; Alamat Tujuan Pengiriman Buku</p>
                    <p>Belum memasukkan alamat pengiriman?</p>
                    <a href="#" style="text-decoration: none;" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                            class="bi bi-plus-square-fill"></i>&nbsp; Masukkan Alamat Anda</a>
                    <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Alamat Tujuan Pengiriman</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-2">
                                            <label for="recipient-name" class="col-form-label">Nama Penerima:</label>
                                            <input type="text" class="form-control" id="recipient-name" required>
                                        </div>
                                        <div class="mb-2">
                                            <label for="message-text" class="col-form-label">No. Handphone:</label>
                                            <input type="text" class="form-control" id="message-text">
                                        </div>
                                        <div class="mb-2">
                                            <label for="provinsi-text" class="col-form-label">Provinsi:</label>
                                            <input type="text" class="form-control" id="provinsi-text">
                                        </div>
                                        <div class="mb-2">
                                            <label for="kabupaten-text" class="col-form-label">Kabupaten:</label>
                                            <input type="text" class="form-control" id="kabupaten-text">
                                        </div>
                                        <div class="mb-2">
                                            <label for="Kecamatan-text" class="col-form-label">Kecamatan:</label>
                                            <input type="text" class="form-control" id="Kecamatan-text">
                                        </div>
                                        <div class="mb-2">
                                            <label for="kode-text" class="col-form-label">Kode Pos:</label>
                                            <input type="text" class="form-control" id="kode-text">
                                        </div>
                                        <div class="mb-2">
                                            <label for="lengkap-text" class="col-form-label">Alamat Lengkap:</label>
                                            <input type="text" class="form-control" id="lengkap-text">
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="reset" class="btn btn-secondary mx-1"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="cart-section">
                    <div class="cart-detail">
                        <div class="judul-cart">
                            <p class="judul-awal">
                                Pesanan 1
                            </p>
                        </div>
                        <div class="cart-info1">
                            <div class="cart-info2">
                                <div class="img-detail">
                                    <div class="gambar" style="width: 82px;">
                                        <img src="assets/img/buku/pulang-pergi_tere_liye.jpeg"
                                            class="img-fluid gambar-detail" alt="Pulang Pergi">
                                    </div>
                                </div>
                                <div class="info-detail">
                                    <a href="#" class="info-judul">Pulang Pergi</a>
                                    <h6 class="h6" style="font-weight: 300;">Tere Liye</h6>
                                    <div class="info-insert">Rp 87.000</div>
                                </div>
                            </div>
                            <div class="cart-info2 hargaJumlah">
                                <div class="jumlah-detail">
                                    <div class="icon"> <span>-</span> </div>
                                    <!-- <input type="text"> -->
                                    <div class="input">1</div>
                                    <div class="icon"> <span>+</span></div>
                                </div>
                                <div class="harga-detail">
                                    <h6 class="h6" style="font-weight: 600; color: rgb(61, 95, 248);">Rp 87.000</h6>
                                    <div class="info-insert hapus"><i class="bi bi-trash"></i> &nbsp;Hapus</div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="metode-kirim">
                            <div class="pilih-kirim">
                                <p class="h6" style="font-family: 'Nunito', sans-serif; font-weight: 500 !important;">
                                    Metode Pengiriman</p>
                                <a href="#" class="kirim" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">Pilih Metode Pembayaran <span><i
                                            class="bi bi-caret-down-fill"></i></span></a>
                                <ul class="dropdown-menu" style="width: 20%;">
                                    <li><a class="dropdown-item" style="display: flex; justify-content: space-between;"
                                            href="#">JNE <span>Rp 35.000</span></a></li>
                                    <li><a class="dropdown-item" style="display: flex; justify-content: space-between;"
                                            href="#">SiCepat <span>Rp 24.000</span></a></li>
                                    <li><a class="dropdown-item" style="display: flex; justify-content: space-between;"
                                            href="#">Pos Indonesia <span>Rp 40.000</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <div class="total-bayar">
                            <p style="font-weight: bold !important; color: rgb(61, 95, 248);">Total Pembayaran</p>
                            <p style="font-weight: bold !important; color: rgb(61, 95, 248);">Rp 87.000</p>
                        </div>
                    </div>
                </div>
                <div class="cart-section">
                    <div class="cart-detail">
                        <div class="judul-cart">
                            <p class="judul-awal">
                                Pesanan 2
                            </p>
                        </div>
                        <div class="cart-info1">
                            <div class="cart-info2">
                                <div class="img-detail">
                                    <div class="gambar" style="width: 82px;">
                                        <img src="assets/img/buku/pulang-pergi_tere_liye.jpeg"
                                            class="img-fluid gambar-detail" alt="Pulang Pergi">
                                    </div>
                                </div>
                                <div class="info-detail">
                                    <a href="#" class="info-judul">Pulang Pergi</a>
                                    <h6 class="h6" style="font-weight: 300;">Tere Liye</h6>
                                    <div class="info-insert">Rp 87.000</div>
                                </div>
                            </div>
                            <div class="cart-info2 hargaJumlah">
                                <div class="jumlah-detail">
                                    <div class="icon"> <span>-</span> </div>
                                    <!-- <input type="text"> -->
                                    <div class="input">1</div>
                                    <div class="icon"> <span>+</span></div>
                                </div>
                                <div class="harga-detail">
                                    <h6 class="h6" style="font-weight: 600; color: rgb(61, 95, 248);">Rp 87.000</h6>
                                    <div class="info-insert hapus"><i class="bi bi-trash"></i> &nbsp;Hapus</div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="metode-kirim">
                            <div class="pilih-kirim">
                                <p class="h6" style="font-family: 'Nunito', sans-serif; font-weight: 500 !important;">
                                    Metode Pengiriman</p>
                                <a href="#" class="kirim" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">Pilih Metode Pembayaran <span><i
                                            class="bi bi-caret-down-fill"></i></span></a>
                                <ul class="dropdown-menu" style="width: 20%;">
                                    <li><a class="dropdown-item" style="display: flex; justify-content: space-between;"
                                            href="#">JNE <span>Rp 35.000</span></a></li>
                                    <li><a class="dropdown-item" style="display: flex; justify-content: space-between;"
                                            href="#">SiCepat <span>Rp 24.000</span></a></li>
                                    <li><a class="dropdown-item" style="display: flex; justify-content: space-between;"
                                            href="#">Pos Indonesia <span>Rp 40.000</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <div class="total-bayar">
                            <p style="font-weight: bold !important; color: rgb(61, 95, 248);">Total Pembayaran</p>
                            <p style="font-weight: bold !important; color: rgb(61, 95, 248);">Rp 87.000</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bayar-bayar">
                <div class="metode-bayar">
                    <p class="h6" style="font-family: 'Nunito', sans-serif; font-weight: 500 !important;">Metode
                        Pembayaran</p>
                    <a href="#" class="bayartok" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">Pilih Metode Pembayaran <span><i
                                class="bi bi-caret-down-fill"></i></span></a>
                    <ul class="dropdown-menu" style="width: 20%;">
                        <li><a class="dropdown-item" style="display: flex; justify-content: space-between;"
                                href="#">E-Wallet</a></li>
                        <li><a class="dropdown-item" style="display: flex; justify-content: space-between;"
                                href="#">COD </a></li>
                        <li><a class="dropdown-item" style="display: flex; justify-content: space-between;"
                                href="#">Pos Indonesia</a></li>
                    </ul>
                </div>

                <div class="rincian">
                    <div class="keterangan-bayar" style="padding: 30px;">
                        <h4 class="h4" style="font-family: 'Nunito', sans-serif">Rincian Pembayaran</h4>
                    </div>
                    <hr style="margin: 0;">
                    <div class="detail-bayar" style="padding: 30px;">
                        <div class="tulisan2-bayar">
                            <p>Total Pembayaran</p>
                            <p style="font-weight: bold !important;">Rp 87.000</p>
                        </div>
                        <div class="tulisan2-bayar">
                            <p>Biaya Pengiriman</p>
                            <p style="font-weight: bold !important;">Rp 35.000</p>
                        </div>
                        <div class="tulisan2-bayar">
                            <p>Diskon Belanja</p>
                            <p style="font-weight: bold !important;">Rp 14.000</p>
                        </div>
                        <a href="ewallet.html" class="tombol-bayar p-3">Bayar Sekarang</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @include('layouts.footer')
@endsection
