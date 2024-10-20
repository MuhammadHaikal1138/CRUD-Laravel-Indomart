@extends('template.layout')

@section('content')

        <main class="container my-5">
            <h2 class="text-center">Tentang Indomaret</h2>
            <p class="text-center">Indomaret adalah jaringan minimarket terkemuka di Indonesia yang menawarkan berbagai
                produk kebutuhan sehari-hari dengan harga yang terjangkau.</p>

            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <h5 class="card-title">Produk Berkualitas</h5>
                            <p class="card-text">Kami menyediakan berbagai produk berkualitas dari makanan, minuman, hingga
                                kebutuhan rumah tangga.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <h5 class="card-title">Promo Menarik</h5>
                            <p class="card-text">Nikmati berbagai promo dan diskon menarik setiap harinya untuk menghemat
                                pengeluaran Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <h5 class="card-title">Lokasi Strategis</h5>
                            <p class="card-text">Dengan banyak lokasi yang tersebar di seluruh Indonesia, kami selalu dekat
                                dengan Anda.</p>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="text-center mt-5">Layanan Kami</h2>
            <ul class="list-group mt-3">
                <li class="list-group-item">Belanja Online</li>
                <li class="list-group-item">Pengiriman ke Rumah</li>
                <li class="list-group-item">Pembayaran Mudah</li>
                <li class="list-group-item">Program Loyalti</li>
            </ul>
        </main>
    
@endSection
