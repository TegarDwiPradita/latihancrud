@extends('login')
@section('title')
    Register
@endsection
@section('judul')
Register
@endsection
@section('content')
@if ($message = Session::get('pesan'))
<div class="alert alert-danger">
    {{Session::get('pesan')}}
</div>
@endif

<div class="panel-body">
    <form role="form" action="/sesi/create" method="POST">
    @csrf
    <div class="form-group">
        <label>Nama</label>
        <input class="form-control"type="text"value="{{session::get('name')}}" name="nama" placeholder="Masukan nama">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input class="form-control" type="email"value="{{session::get('email')}}" name="email" placeholder="Masukkan email">
    </div>
    <div class="form-group">
        <label>Password</label>
        <input class="form-control" type="password" name="password" placeholder="Masukkan password"></td>
    </div>
    <button type="submit" class="btn btn-default">DAFTAR</button>
    </form>
</div>
@endsection