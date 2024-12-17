<?php

namespace App\Http\Controllers;

use App\Models\Siswamodel;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    function index(){
        $data =array(
            'dt_siswa'=>Siswamodel::all()

        );
        return view ('siswa.list',$data);
    }
    function insert(Request $request){
        if ($request->isMethod('post')){
        $siswa = new Siswamodel();
        $siswa->nis_siswa= $request->nis;
        $siswa->nama_siswa= $request->nama;
        $siswa->alamat_siswa= $request->alamat;
        $siswa->save();
        return redirect('/siswa')->with(['pesan'=>'Data Berhasil Disimpan!']);
    }
        return view('siswa.form');
    }

function ubah(Request $request){
    $siswa = Siswamodel::find($request->id);
    $data = array(
        'siswa' => $siswa
    );
    if ($request->isMethod('post')){
    $siswa->nis_siswa= $request->nis;
    $siswa->nama_siswa= $request->nama;
    $siswa->alamat_siswa= $request->alamat;
    $siswa->save();
    return redirect('/siswa')->with(['pesan'=>'Data Berhasil Diupdate!']);
    }
    return view('siswa.form',$data);
}

function hapus($id){
    Siswamodel::find($id)->delete();
    return redirect('/siswa')->with(['pesan' => 'Data Berhasil Dihapus']);
}
}