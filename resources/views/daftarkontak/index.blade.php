@extends('base')

@section('body')

<h1> Daftar Kontak List</h1>
<button > <a href="{{ route('daftarkontakNewForm') }}">Add</a> </button>
<br>
<br>

<form action="{{route('daftarkontakSearch')}}" method="get">
<input type="text" name="keyword" placeholder="Cari Nama">
<button type="submit">Search</button>
</form>

<table border = "1">
    <tr>
        <td>ID</td>
        <td>Nama</td>
        <td>Telepon</td>
        <td>Email</td>
        <td>Alamat</td>
    </tr>
    @foreach ($daftarkontaks as $daftarkontak)
    <tr>
        <td>{{$daftarkontak->id}}</td>
        <td>{{$daftarkontak->nama}}</td>
        <td>{{$daftarkontak->telepon}}</td>
        <td>{{$daftarkontak->email}}</td>
        <td>{{$daftarkontak->alamat}}</td>
        <td><a href="{{ route('daftarkontakUpdate',['id' => $daftarkontak->id]) }}">Edit</a>
        <a href="{{ route('daftarkontakDelete',['id' => $daftarkontak->id]) }}"onclick="return confirm('Are you sure?')">Delete</a> 
            </td>

    </tr>
    @endforeach
</table>
@endsection
