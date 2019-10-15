@extends('base')

@section('body')
<h1>Add New To Do List</h1>
    <form action="{{ route('daftarkontakCreate') }}" method="post">
        @csrf
        <div>
            <label>Nama : </label>
            <input type="text" name="nama">
        </div>
        <div>
            <label>Telepon : </label>
            <input type="text" name="telepon">
        </div>
        <div>
            <label>Email : </label>
            <input type="text" name="email">
        </div>
        <div>
            <label>Alamat : </label>
            <input type="text" name="alamat">
        </div>
        <div>
        <br>
            <input type="submit">
        </div>
    </form>
@endsection