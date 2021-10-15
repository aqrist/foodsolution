@extends('pengguna.master')

@section('title', $detail->nama_barang)

@section('breadcrumb')
<div class="bg-light py-3" data-aos="fade-up" data-aos-delay="100">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-0">
                <a href="{{ route('beranda') }}">Beranda</a>
                <span class="mx-2 mb-0">/</span>
                <a href="{{ route('produk') }}">Produk</a>
                <span class="mx-2 mb-0">/</span>
                <strong class="text-black">Detail</strong>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if ($errors->any())

                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong><i class="icon-ban"></i> ERROR!!</strong><br>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                @elseif(session()->has('success'))

                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong><i class="icon-check"></i> SUCCESS!!</strong> {{ session('success') }} <br>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                @endif
            </div>
            <div class="col-md-6">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    {{ Html::image(asset('storage/produk/'.$detail->foto_barang), $detail->nama_barang, ['class' => 'img-fluid']) }}
                    </div>
                    <div class="carousel-item">
                    {{ Html::image(asset('storage/produk/'.$detail->foto_detail), $detail->nama_barang, ['class' => 'img-fluid']) }}
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                </div>
            </div>
            <div class="col-md-6">
                <h2 class="text-black my-3"> {{ $detail->nama_barang }}</h2>
                <!-- {!! $detail->deskripsi_barang !!} -->
                <table class="table mb-5">
                <!-- <tr>
                    <td>Berat</td>
                    <td>:</td>
                    <td>{{ $detail->berat_barang }}gram</td>
                </tr> -->
                <tr>
                    <td>Stok</td>
                    <td>:</td>
                    <td><b>{{ $detail->stok_barang }}pcs</b></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td>
                        @if($detail->stok_barang != 0)
                            <span class="badge badge-primary"><span class="icon-check"></span> Tersedia</span>
                        @else
                            <span class="badge badge-danger"><span class="icon-close"></span> Kosong</span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td>:</td>
                    <td>
                        <strong class="text-primary"> {{ Rupiah::create($detail->harga_satuan) }} </strong>
                    </td>
                </tr>
                <tr>
                    <td>Kemasan</td>
                    <td>:</td>
                    <td>
                    <div class="dropdown">
                        <button class="btn-sm btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pilihan Kemasan
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">250g</a>
                            <a class="dropdown-item" href="#">500g</a>
                            <a class="dropdown-item" href="#">1000g</a>
                        </div>
                    </div>
                    </td>
                </tr>
            </table>
            {{ Form::open(['route' => ['tambah_keranjang', $detail->id_barang]]) }}
            <!-- Start - Quantity -->
            <!-- <div class="mb-5">
                <div class="input-group mb-3" style="max-width: 120px;">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                    </div>
                    <input type="text" name="jumlah_beli" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                    </div>
                </div>
            </div> -->
            <!-- End - Quantity -->
            <p>
            <!-- @if($detail->stok_barang != 0) -->
                <!-- <button type="submit" class="buy-now btn btn-sm btn-primary" name="simpan" value="true">
                    Tambah Ke Keranjang
                </button> -->
                <button class="buy-now btn btn-sm btn-primary" type="button" data-toggle="modal" data-target="#shopeeModal">
                    Beli di Shopee
                </button>
                <button class="buy-now btn btn-sm btn-primary" type="button" data-toggle="modal" data-target="#tokpedModal">
                    Beli di Tokopedia
                </button>
            <!-- @else
                <button type="button" class="buy-now btn btn-sm btn-primary" disabled>
                    Stok Kosong
                </button>
            @endif -->
            </p>
            <br>
            {!! $detail->deskripsi_barang !!}
            <br>
            <br>
            <!-- {{ Html::image(asset('storage/produk/'.$detail->foto_saran), $detail->nama_barang, ['class' => 'img-fluid']) }} -->
            <img src="{{ asset('user_assets/images/saran.png') }}" alt="" class="img-fluid">
            {{ Form::close() }}
      </div>
    </div>
  </div>
</div>

<!-- Start Shopee modal -->
<div class="modal fade" id="tokpedModal" tabindex="-1" role="dialog" aria-labelledby="tokpedModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tokpedModalLabel">Daftar Shopee Official Store</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="list-group">
            <a href="https://shopee.co.id/tongtjiofficialstore" target="_blank" class="list-group-item">
                Jakarta
            </a>
            <a href="https://shopee.co.id/tongtjibogor" target="_blank" class="list-group-item">
                Bogor
            </a>
            <a href="https://shopee.co.id/tongtjibandung" target="_blank" class="list-group-item">
                Bandung
            </a>
            <a href="https://shopee.co.id/cvcki" target="_blank" class="list-group-item">
                Cirebon
            </a>
            <a href="https://shopee.co.id/tongtjitegal" target="_blank" class="list-group-item">
                Tegal
            </a>
            <a href="https://shopee.co.id/tongtjipurwokerto" target="_blank" class="list-group-item">
                Purwokerto
            </a>
            <a href="https://shopee.co.id/tongtjisemarang" target="_blank" class="list-group-item">
                Semarang
            </a>
            <a href="https://shopee.co.id/tongtjikudus" target="_blank" class="list-group-item">
                Kudus
            </a>
            <a href="https://shopee.co.id/tongtjisolo" target="_blank" class="list-group-item">
                Solo
            </a>
            <a href="https://shopee.co.id/tongtjijogja" target="_blank" class="list-group-item">
                Yogyakarta
            </a>
            <a href="https://shopee.co.id/tongtjisurabaya" target="_blank" class="list-group-item">
                Surabaya
            </a>
        </div>

        <!-- <div class="panel panel-primary">
            <a href="#">Jakarta</a>
        </div>
        <div class="panel panel-primary">
            <a href="https://shopee.co.id/tongtjibogor">Bogor</a>
        </div>
        <div class="panel panel-primary">
            <a href="https://shopee.co.id/tongtjibandung">Bandung</a>
        </div>
        <div class="panel panel-primary">
            <a href="https://shopee.co.id/cvcki">Cirebon</a>
        </div> -->
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<!-- end Shopee modal -->

<!-- Start Tokopedia modal -->
<div class="modal fade" id="shopeeModal" tabindex="-1" role="dialog" aria-labelledby="shopeeModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="shopeeModalLabel">Daftar Shopee Official Store</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="list-group">
            <a href="https://www.tokopedia.com/tongtjiofficial" target="_blank" class="list-group-item">
                Jakarta
            </a>
            <a href="https://www.tokopedia.com/tongtji-bogor" target="_blank" class="list-group-item">
                Bogor
            </a>
            <a href="https://www.tokopedia.com/tongtji-bandung" target="_blank" class="list-group-item">
                Bandung
            </a>
            <a href="https://www.tokopedia.com/tongtji-cirebon" target="_blank" class="list-group-item">
                Cirebon
            </a>
            <a href="https://www.tokopedia.com/tongtji-tegal" target="_blank" class="list-group-item">
                Tegal
            </a>
            <a href="https://www.tokopedia.com/tongtji-purwokerto" target="_blank" class="list-group-item">
                Purwokerto
            </a>
            <a href="https://www.tokopedia.com/tongtji-semarang" target="_blank" class="list-group-item">
                Semarang
            </a>
            <a href="https://www.tokopedia.com/tongtji-kudus" target="_blank" class="list-group-item">
                Kudus
            </a>
            <a href="https://www.tokopedia.com/tongtji-solo" target="_blank" class="list-group-item">
                Solo
            </a>
            <a href="https://www.tokopedia.com/tongtji-yogyakarta" target="_blank" class="list-group-item">
                Yogyakarta
            </a>
            <a href="https://www.tokopedia.com/tongtji-surabaya" target="_blank" class="list-group-item">
                Surabaya
            </a>
        </div>

        <!-- <div class="panel panel-primary">
            <a href="#">Jakarta</a>
        </div>
        <div class="panel panel-primary">
            <a href="https://shopee.co.id/tongtjibogor">Bogor</a>
        </div>
        <div class="panel panel-primary">
            <a href="https://shopee.co.id/tongtjibandung">Bandung</a>
        </div>
        <div class="panel panel-primary">
            <a href="https://shopee.co.id/cvcki">Cirebon</a>
        </div> -->
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<!-- end Tokopedia modal -->

@endsection
