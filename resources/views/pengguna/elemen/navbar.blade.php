<nav class="site-navigation text-right text-md-center" role="navigation">
    <div class="container">
        <ul class="site-menu js-clone-nav d-none d-md-block">
            <li><a href="{{ route('beranda') }}">Beranda</a></li>
            <li><a href="#">Tentang Kami</a></li>
            {{-- <li><a href="#">Koleksi</a></li> --}}
            <!-- <li class="has-children">
                <a href="#">Layanan</a>
                <ul class="dropdown">
                    <li><a href="#">Konsultasi Bisnis</a></li>
                    <li><a href="#">Kitchen Visit</a></li>
                    <li><a href="#">Barista Training</a></li>
                    <li><a href="#">R&D</a></li>
                    <li><a href="#">Design Graphic</a></li>
                </ul>
            </li> -->
            {{-- <li><a href="#">Edukasi</a></li> --}}
            <li><a href="#">Resep</a></li>
            <li class="has-children">
                <a href="#">Produk</a>
                <ul class="dropdown" id="kategori">
                </ul>
            </li>
            <li><a href="{{ route('katalog') }}">Lihat Katalog</a></li>
            <li><a href="{{ route('inquiries') }}">Kontak Kami</a></li>
            <li><a href="#">Konsultasi Bisnis</a></li>
            <!-- <li><a href="#kontak">Kontak Kami</a></li> -->
            {{-- @if(session()->has('email_pengguna'))
                <li><a href="{{ route('logout') }}">Keluar</a></li>
            @else
                <li><a href="{{ route('register') }}">Daftar</a> / <a href="{{ route('login') }}" class="btn btn-xs btn-outline-primary ml-2 py-1">Masuk</a></li>
            @endif --}}
        </ul>
    </div>
</nav>
