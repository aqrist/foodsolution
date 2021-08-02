@extends('pengguna.master')

@section('title', 'Katalog')

@section('breadcrumb')
<div class="bg-light py-3" data-aos="fade-up" data-aos-delay="100">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-0">
                <a href="#">Katalog</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="site-section site-section-sm site-blocks-1">
    <div class="container">
        <div class="row justify-content-center" data-aos="fade-up">
            <div class="flipbook-wrap">
                {{-- <a href="" class="btn prev">
                    <
                </a> --}}
                <div class="sample-flipbook">
                    <div class="hard"> <img src="{{ asset('user_assets/images/katalog/slide1.JPG') }}" alt="" /></div>
                    <div class="hard"><img src="{{ asset('user_assets/images/katalog/slide2.JPG') }}" alt="" /></div>
                    <div class=""><img src="{{ asset('user_assets/images/katalog/slide3.JPG') }}" alt="" /></div>
                    <div class=""><img src="{{ asset('user_assets/images/katalog/slide4.JPG') }}" alt="" /></div>
                    <div class=""><img src="{{ asset('user_assets/images/katalog/slide5.JPG') }}" alt="" /></div>
                    <div class=""><img src="{{ asset('user_assets/images/katalog/slide6.JPG') }}" alt="" /></div>
                    <div class=""><img src="{{ asset('user_assets/images/katalog/slide7.JPG') }}" alt="" /></div>
                    <div class=""><img src="{{ asset('user_assets/images/katalog/slide8.JPG') }}" alt="" /></div>
                    <div class=""><img src="{{ asset('user_assets/images/katalog/slide9.JPG') }}" alt="" /></div>
                    <div class=""><img src="{{ asset('user_assets/images/katalog/slide10.JPG') }}" alt="" /></div>
                    <div class=""><img src="{{ asset('user_assets/images/katalog/slide11.JPG') }}" alt="" /></div>
                    <div class=""><img src="{{ asset('user_assets/images/katalog/slide12.JPG') }}" alt="" /></div>
                    <div class=""><img src="{{ asset('user_assets/images/katalog/slide13.JPG') }}" alt="" /></div>
                    <div class=""><img src="{{ asset('user_assets/images/katalog/slide14.JPG') }}" alt="" /></div>
                    <div class=""><img src="{{ asset('user_assets/images/katalog/slide15.JPG') }}" alt="" /></div>
                    <div class=""><img src="{{ asset('user_assets/images/katalog/slide16.JPG') }}" alt="" /></div>
                    <div class=""><img src="{{ asset('user_assets/images/katalog/slide17.JPG') }}" alt="" /></div>
                    <div class=""><img src="{{ asset('user_assets/images/katalog/slide18.JPG') }}" alt="" /></div>
                    <div class=""><img src="{{ asset('user_assets/images/katalog/slide19.JPG') }}" alt="" /></div>
                    <div class=""><img src="{{ asset('user_assets/images/katalog/slide20.JPG') }}" alt="" /></div>
                    <div class="hard"><img src="{{ asset('user_assets/images/katalog/slide21.JPG') }}" alt="" /></div>
        
                </div>
                {{-- <a href="" class="btn next">
                    >
                </a> --}}
        
            </div>
        </div>
        <br>
        <br>
        <br>
        @endsection