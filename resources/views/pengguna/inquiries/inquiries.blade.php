@extends('pengguna.master')

@section('title', 'Business Inquiries')

@section('breadcrumb')
<div class="bg-light py-3" data-aos="fade-up" data-aos-delay="100">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-0">
                <a href="#">Business Inquiries</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="site-section site-section-sm site-blocks-1">
    <div class="container">
        <div class="row justify-content-center" data-aos="fade-up">
            <div class="col-lg-5 mb-5 mb-lg-0" id="kontak">
                <!-- {{ Form::open(['route' => 'hubungi_kami']) }} -->
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="footer-heading mb-4">Business Inquiries</h3>
                    </div>
                    <div class="col-md-6 col-lg-12">
                        <div class="form-group">
                            <input type="text" name="nama" class="form-control" placeholder="Nama">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12">
                        <div class="form-group">
                            <input type="text" name="pekerjaann" class="form-control" placeholder="Posisi / Pekerjaan">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12">
                        <div class="form-group">
                            <input type="text" name="perusahaan" class="form-control" placeholder="Perusahaan">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12">
                        <div class="form-group">
                            <input type="text" name="alamat" class="form-control" placeholder="Alamat">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12">
                        <div class="form-group">
                            <input type="phone" name="phone" class="form-control" placeholder="Nomor Telepon">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12">
                        <div class="form-group">
                            <input type="email" name="mail" class="form-control" placeholder="Alamat E-Mail">
                        </div>
                    </div>
                    <!-- <div class="col-md-6 col-lg-12">
                        <div class="form-group">
                            <select class="form-control" placeholder="Pilih Kategori">
                                <option>Pilih Kategori</option>
                                <option>Latte</option>
                                <option>Non Latte</option>
                            </select>
                        </div>
                    </div> -->
                    <div class="col-md-6 col-lg-12">
                        <div class="form-group">
                            <input type="text" name="productname" class="form-control" placeholder="Nama Produk">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12">
                        <div class="form-group">
                            <textarea class="form-control" id="pesan" rows="3" placeholder="Pesan"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Kirim">
                        </div>
                    </div>
                </div>
                <!-- {{ Form::close() }} -->
            </div>
        </div>
    </div>
</div>
@endsection