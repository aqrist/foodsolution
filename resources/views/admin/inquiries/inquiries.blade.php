@extends('admin.master')

@section('title', 'Business Inquiries')

@section('extra_css')

    {{ Html::style('admin_assets/component/datatables.net-bs/css/dataTables.bootstrap.min.css') }}

@endsection

@section('content-header')
<h1>
    Business Inquiries
    <small>Halaman daftar Business Inquiries</small>
</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('beranda_admin') }}"><i class="fa fa-home"></i> Beranda</a></li>
    <li class="active"><i class="fa fa-clipboard fa-fw"></i> Business Inquiries</li>
</ol>
@endsection

@section('content')