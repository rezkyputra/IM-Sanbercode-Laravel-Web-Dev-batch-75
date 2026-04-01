@extends('layouts.master')
@section('judul')
    Halaman Dashboard
@endsection
@section('content')
    
<h1>Selamat Datang </h1>
<p>Nama Lengkap : {{$fname}}</p>
<p>Biodata : {{$biodata}}</p>
@endsection