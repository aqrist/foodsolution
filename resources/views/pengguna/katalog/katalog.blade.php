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
                    <div class="hard"> <img src="{{ asset('user_assets/images/katalog/Slide1.JPG') }}" alt="" /></div>
                    <div class="hard"><img src="{{ asset('user_assets/images/katalog/Slide_blank.JPG') }}" alt="" /></div>
                    <div class=""><img src="{{ asset('user_assets/images/katalog/Slide2.JPG') }}" alt="" /></div>
                    <div class=""><img src="{{ asset('user_assets/images/katalog/Slide3.JPG') }}" alt="" /></div>
                    <div class=""><img src="{{ asset('user_assets/images/katalog/Slide4.JPG') }}" alt="" /></div>
                    <div class=""><img src="{{ asset('user_assets/images/katalog/Slide5.JPG') }}" alt="" /></div>
                    <div class=""><img src="{{ asset('user_assets/images/katalog/Slide6.JPG') }}" alt="" /></div>
                    <div class=""><img src="{{ asset('user_assets/images/katalog/Slide7.JPG') }}" alt="" /></div>
                    <div class=""><img src="{{ asset('user_assets/images/katalog/Slide8.JPG') }}" alt="" /></div>
                    <div class=""><img src="{{ asset('user_assets/images/katalog/Slide9.JPG') }}" alt="" /></div>
                    <div class=""><img src="{{ asset('user_assets/images/katalog/Slide10.JPG') }}" alt="" /></div>
                    <div class=""><img src="{{ asset('user_assets/images/katalog/Slide11.JPG') }}" alt="" /></div>
                    <div class=""><img src="{{ asset('user_assets/images/katalog/Slide12.JPG') }}" alt="" /></div>
                    <div class=""><img src="{{ asset('user_assets/images/katalog/Slide13.JPG') }}" alt="" /></div>
                    <div class=""><img src="{{ asset('user_assets/images/katalog/Slide14.JPG') }}" alt="" /></div>
                    <div class=""><img src="{{ asset('user_assets/images/katalog/Slide15.JPG') }}" alt="" /></div>
                    <div class=""><img src="{{ asset('user_assets/images/katalog/Slide16.JPG') }}" alt="" /></div>
                    <div class=""><img src="{{ asset('user_assets/images/katalog/Slide17.JPG') }}" alt="" /></div>
                    <div class=""><img src="{{ asset('user_assets/images/katalog/Slide18.JPG') }}" alt="" /></div>
                    <div class=""><img src="{{ asset('user_assets/images/katalog/Slide19.JPG') }}" alt="" /></div>
                    <div class=""><img src="{{ asset('user_assets/images/katalog/Slide20.JPG') }}" alt="" /></div>
                    <div class="hard"><img src="{{ asset('user_assets/images/katalog/Slide21.JPG') }}" alt="" /></div>
        
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