@extends('base')

@section('body')
    <form action="{{ route('daftarkontakUpdate',['id'=>$daftarkontak->id]) }}" method="post">
        @csrf
        <div>
            <label>Nama : </label>
            <input type="text" name="nama" value="{{$daftarkontak->nama}}">
        </div>
        <div>
            <label>Telepon : </label>
            <input type="text" name="telepon" value="{{$daftarkontak->telepon}}">
        </div>
        <div>
            <label>Email : </label>
            <input type="text" name="email" value="{{$daftarkontak->email}}">
        </div>
        <div>
            <label>Alamat : </label>
            <input type="text" name="alamat" value="{{$daftarkontak->alamat}}">
        </div>
        
        <div>
        <br>
            <input type="submit">
        </div>
    </form>
@endsection