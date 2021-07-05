@extends('pengguna.master')

@section('title', 'Beranda')

@section('content')
<div class="site-blocks-cover" style="background-image: url({{ asset('user_assets/images/ginger_2.png') }});" data-aos="fade">
    <div class="container">
        <div class="row align-items-start align-items-md-center justify-content-end">
            <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
                <h1 class="mb-2 text-white">Temukan pilihan terbaikmu</h1>
                <div class="intro-text text-center text-md-left">
                    <p class="mb-4 text-white">Tong Tji Food Solutions, menyediakan produk-produk minuman instan dengan kualitas premium dan harga yang kompetitif. Kepuasan pelanggan adalah prioritas kami. </p>
                    <p>
                        <a href="{{ route('produk') }}" class="btn btn-sm btn-primary">Belanja Sekarang</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="site-section site-section-sm site-blocks-1">
    <div class="container">
        <div class="row justify-content-center" data-aos="fade-up">
            <div class="col-md-12 site-section-heading text-center pt-4 pb-5">
                <h2>Kenapa Harus Di Tong Tji Food Solution?</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
                <div class="icon mr-4 align-self-start">
                    <span class="icon-check"></span>
                </div>
                <div class="text">
                    <h2 class="text-uppercase">Jaminan Asli & berkualitas</h2>
                    <p>Produk asli dan berkualitas dari Tong Tji Food Solutions.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
                <div class="icon mr-4 align-self-start">
                    <span class="icon-truck"></span>
                </div>
                <div class="text">
                    <h2 class="text-uppercase">Jaminan Ongkir Terbaik</h2>
                    <p>Kami bekerjasama dengan mitra kurir yang kredibel dan memberikan pelayanan terbaik, baik kiriman dalam jumlah kecil ataupun partai besar.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
                <div class="icon mr-4 align-self-start">
                    <span class="icon-shield"></span>
                </div>
                <div class="text">
                    <h2 class="text-uppercase">Jaminan Eksklusif</h2>
                    <p>Penawaran ekslusif, informasi promo, diskon dan special rewards untuk
                        pelanggan.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon mr-4 align-self-start">
                    <span class="icon-help"></span>
                </div>
                <div class="text">
                    <h2 class="text-uppercase">Jaminan Layanan</h2>
                    <p>Kontak customer service kami siap melayani pertanyaan Anda.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="site-section site-blocks-2">
    <div class="container">
        <div class="row justify-content-center" data-aos="fade-up">
            <div class="col-md-12 site-section-heading text-center pt-4 pb-5">
                <h2>Lihat Produk Terbaru</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
                <a class="block-2-item item1" href="{{ route('produk') }}?kategori=latte">
                    <figure class="image">
                        <img src="{{ asset('user_assets/images/Taro.png') }}" alt="" class="img-fluid">
                    </figure>
                    <div class="text">
                        <span class="text-uppercase">Lihat Produk</span>
                        <h3>Latte</h3>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                <a class="block-2-item item2" href="{{ route('produk') }}?kategori=non-latte">
                    <figure class="image">
                        <img src="{{ asset('user_assets/images/Lemontea.png') }}" alt="" class="img-fluid">
                    </figure>
                    <div class="text">
                        <span class="text-uppercase">Lihat Produk</span>
                        <h3>Non Latte</h3>
                    </div>
                </a>
            </div>
            <!-- <div class="col-sm-6 col-md-6 col-lg-3 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
                <a class="block-2-item item3" href="{{ route('produk') }}?kategori=tennis">
                    <figure class="image">
                        <img src="{{ asset('user_assets/images/Ginger.png') }}" alt="" class="img-fluid">
                    </figure>
                    <div class="text">
                        <span class="text-uppercase">Lihat Produk</span>
                        <h3>Coming Soon</h3>
                    </div>
                </a>
            </div> -->
        </div>
    </div>
</div>
@endsection