@extends('daftarkontak.base')
@section('body')
    <h1>Daftar Kontak Detail</h1>
    <h3>Nama : </h3>
    <h3>Telepon : </h3>
    <h3>Email : </h3>
    <h3>Alamat : </h3>
    <h5 class =  "tab">{{$daftarkontak->nama}}</h5>
    <h5 class =  "tab">{{$daftarkontak->telepon}}</h5>
    <h5 class =  "tab">{{$daftarkontak->email}}</h5>
    <h5 class =  "tab">{{$daftarkontak->alamat}}</h5>
    <button onclick="location.href = '{{route('home')}}';" id="button_back">Back</button>

@endsection
    
