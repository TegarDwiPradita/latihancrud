@extends('tema')
@section('menu')
<ul class="nav" id="main-menu">
    <li>
        <a href="{{{('/beranda')}}}"><i class="fa fa-home"></i> Home</a>
    </li>
    <li>
         <a href="{{('/tentang')}}"><i class="fa fa-user"></i> Tentang</a>
    </li>
    <li>
        <a href="{{('/kontak')}}"><i class="fa fa-phone"></i> Kontak</a>
    </li>
    <li>
        <a class="active-menu" href="{{('/siswa')}}"><i class="fa fa-male"></i> Data Siswa</a>
    </li>
  </ul>
  @endsection
  @section('title')
  Data Siswa
  @endsection
  @section('judul')
    Data siswa
  @endsection
  @section('content')
@if ($message = Session::get('pesan'))
<div class="alert alert-success">
{{session::get('pesan')}}
</div>
@endif
  <br><br>    
 <a href="{{url('siswa/insert')}}">Tambah Siswa</a>
  <table class="table table-striped" border="1" cellpadding="5" cellspacing="5">
<thead>
<tr>
    <th>NIS</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Opsi</th>
</tr>
</thead>
@foreach ($dt_siswa as $siswa)
<tbody>
<tr>
    <td>{{$siswa->nis_siswa}}</td>
    <td>{{$siswa->nama_siswa}}</td>
    <td>{{$siswa->alamat_siswa}}</td>
    <td><a href="{{url('siswa/ubah/'.$siswa->id_siswa)}}">ubah </a>
        <a href="{{url('siswa/hapus/'.$siswa->id_siswa)}}">hapus</a></td>
</tr>
</tbody>  
@endforeach

  </table>
  @endsection