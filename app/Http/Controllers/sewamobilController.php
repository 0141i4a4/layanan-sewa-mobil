<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class sewamobilController extends Controller
{
    public function crudmobil(){
        //mengambil data dari table data_mobil
        $data_mobil = DB::table('data_mobil')->paginate(10);

        //mengirim data table ke crudmobil
        return view('crudmobil',['data_mobil'=>$data_mobil]);
    }

    public function tambahmobil(){
        return view('tambahmobil');
    }

    //method untuk insert data ke table data_mobil
    public function store(Request $request){

        //insert data ke table data_mobil
        DB::table('data_mobil')->insert([
            'Id_sewa'=>$request->idsewa,
            'Nama_mobil'=>$request->Namamobil,
            'Harga_sewa'=>$request->hargasewa,
            'Lama_sewa'=>$request->lamasewa,
            'Harga_total'=>$request->hargatot
        ]);
        //alihkan ke halaman depan
        return redirect('/crudmobil');
    }

    public function crudpenyewa(){
        //mengambil data dari table data_penyewa
        $data_penyewa = DB::table('data_penyewa')->get();

        //mengirim data table ke crudpenyewa
        return view('crudpenyewa',['data_penyewa'=>$data_penyewa]);
    }
    
    public function tambahpenyewa(){
        return view('tambahpenyewa');
    }

    public function market(Request $request){

        DB::table('data_penyewa')->insert([
            'Id_penyewa'=>$request->idpenyewa,
            'Nama_penyewa'=>$request->namapenyewa,
            'Umur'=>$request->umur,
            'Alamat'=>$request->alamat,
            'Email'=>$request->email,
            'No_telp'=>$request->notelp
        ]);

        return redirect('/crudpenyewa');
    }

    public function editmobil($id){
        //mengambil data yang dipilih berdasarkan id
        $data_mobil=DB::table('data_mobil')->where('Id_sewa',$id)->get();
        //passing data yang didapat ke view editmobil.blade.php
        return view('editmobil',['data_mobil' => $data_mobil]);
    
    }

    public function update(Request $request){
        //update data mobil
        DB::table('data_mobil')->where('Id_sewa',$request->idsewa)->update([
            'Nama_mobil'=>$request->Namamobil,
            'Harga_sewa'=>$request->hargasewa,
            'Lama_sewa'=>$request->lamasewa,
            'Harga_total'=>$request->hargatot
        ]);
    
        //alihkan ke halaman depan
        return redirect('/crudmobil');
    }

    public function editpenyewa($id){
        //mengambil data yang dipilih berdasarkan id
        $data_penyewa=DB::table('data_penyewa')->where('Id_penyewa',$id)->get();
        //passing data yang yang didapat ke view editpenyewa.blade.php
        return view('editpenyewa',['data_penyewa'=>$data_penyewa]);
    }

    public function updatepenyewa(Request $request){
        //update data penyewa
        DB::table('data_penyewa')->where('Id_penyewa',$request->idpenyewa)->update([
            'Nama_penyewa'=>$request->namapenyewa,
            'Umur'=>$request->umur,
            'Alamat'=>$request->alamat,
            'Email'=>$request->email,
            'No_telp'=>$request->notelp
        ]);
        
        //alihkan ke halaman depan
        return redirect('/crudpenyewa');
    }

    public function hapuspenyewa($id){
        DB::table('data_penyewa')->where('Id_penyewa',$id)->delete();

        return redirect('/crudpenyewa');
    }

    public function hapusmobil($id){
        DB::table('data_mobil')->where('Id_sewa',$id)->delete();

        return redirect('/crudmobil');
    }

    public function daftarpenyewa(){
        //mengambil data table dari database
        $data_penyewa = DB::table('data_penyewa')->get();
        
        //mengirim data table ke view daftarpenyewa.blade.php
        return view('daftarpenyewa',['data_penyewa'=>$data_penyewa]);
    }

    public function daftarmobil(){
        //mengambil data table dari database
        $data_mobil = DB::table('data_mobil')->get();
            
        //mengirim data table ke view daftarmobil.blade.php
        return view('daftarmobil',['data_mobil'=>$data_mobil]);
    }

    public function cari(Request $request){
        //menangkap data pencarian
        $cari = $request->cari;
        
        //mengambil data dari table data_mobil sesuai pencarian data
        $data_mobil = DB::table('data_mobil')
        ->where('Nama_mobil','like',"%".$cari."%")
        ->paginate();

        //mengirim data ke view index
        return view('crudmobil',['data_mobil'=>$data_mobil ]);
    }

    public function pilihapv(Request $request){
        DB::table('list_mobil')->insert([
            'Nama_mobil'=>$request->apv,
            'Harga_mobil'=>$request->harga
        ]);

        return redirect('/banyakmobil');
    }

    public function carimobil(Request $request){
        $cari=$request->cari;

        $list_mobil=DB::table('list_mobil')
        ->where('Nama_mobil','like',"%".$cari."%")->paginate();

        return view('banyakmobil',['list_mobil'=>$list_mobil]);
    }
}