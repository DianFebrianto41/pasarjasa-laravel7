<?php

namespace App\Http\Controllers;
use App\Informasi;
use App\Penyediajasa;
use App\Profesi;
use App\Layanan;
use App\Pelanggan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    //

    public function index(){
        $informasiAll = Informasi::all();
        $penyediajasaAll = Penyediajasa::All();
        $profesiAll = Profesi::All();
        $layananAll = Layanan::All();
        // $produks = Produk::all();

        return view('front/home', compact('informasiAll', 'penyediajasaAll', 'profesiAll', 'layananAll'));
    }

    public function show_kategori($id){
        $profesiAll = Profesi::findorFail($id);
     return view('front/penyediajasa', compact('profesiAll'));

    }

    public function isi_data(Penyediajasa $jasa)
    {
        return view('front.pesan', compact('jasa'));
    }

    public function simpan_data(Penyediajasa $jasa, Request $request)
    {
        $order = Pelanggan::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'nomor_hp' => $request->nomor_hp,
            'penyediajasa_id' => $jasa->id
        ]);
        return redirect()->away("https://api.whatsapp.com/send?phone=".$jasa->nomor_telepon."&text=Konfirmasi Order PasarJasa No.".$order->id . " - Nama: " . $order->nama . " - Alamat: " . $order->alamat);
    }
}
