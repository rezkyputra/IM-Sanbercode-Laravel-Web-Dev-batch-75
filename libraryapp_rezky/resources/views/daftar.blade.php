@extends('layouts.master')
@section('judul')
    Halaman Pendaftaran
@endsection
@section('content')
    
<a href="/">Kembali</a>
<form action="/home" method="POST">
     @csrf
    <label >Fullname</label> <br>
    <input type="text" name="fullname" > <br> <br>
    <label >Biodata</label> <br>
    <textarea name="bio" id="" cols="30" rows="10"></textarea> <br> <br>

    <input type="submit" value="Kirim">
</form>
@endsection