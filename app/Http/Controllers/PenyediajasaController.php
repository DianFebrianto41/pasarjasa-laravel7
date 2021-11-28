<?php

namespace App\Http\Controllers;

use File;
use App\Penyediajasa;
use App\Profesi;
use App\Pelanggan;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PenyediajasaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
            //mengambil data darri database menggunakan db::table() dan disimpan ke dalam $jasa
            //menggunakan ->join() untuk menggabungkan tabel lainnya
            //diakhir get() untuk mengambil data array
    
            //diakhir first() jika hanya satu data yang diambil
            $profesiAll = Profesi::all();
            $penyediajasaAll = DB::table('Penyediajasa')->join('profesi','penyediajasa.profesi_id','=','profesi.id')->get();

            return view('admin/penyediajasa/index', compact('profesiAll', 'penyediajasaAll'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $profesiAll = Profesi::All();
       $penyediajasaAll = Penyediajasa::All();
        return view('admin.penyediajasa.tambah', compact('profesiAll'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $profesiAll = new Profesi();
        $penyediajasaAll = new Penyediajasa();
        // dd($request->all());

        $penyediajasaAll->profesi_id = $request->input('profesi_id');
        $penyediajasaAll->nama_lengkap= $request->input('nama_lengkap');
        $penyediajasaAll->alamat= $request->input('alamat');
        $penyediajasaAll->nomor_telepon = $request->input('nomor_telepon');
        $penyediajasaAll->keterangan = $request->input('keterangan');
    
    
        if($request->hasFile('file')){
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/penyediajasa/', $filename);
            $penyediajasaAll->file = $filename;
        }else {
        return $request;
        $penyediajasaAll->file = '';
        }
    
        $penyediajasaAll->save();
        return redirect()->route('penyediajasa.index')->with(['success' => 'Data Sukses Disimpan!']);
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\penyediajasa  $penyediajasa
     * @return \Illuminate\Http\Response
     */
    public function show(Penyediajasa $penyediajasa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\penyediajasa  $penyediajasa
     * @return \Illuminate\Http\Response
     */
    public function edit(Penyediajasa $penyediajasa, $id)
    {
        //
        $profesiAll = Profesi::all();
        $penyediajasaAll = Penyediajasa::findOrFail($id);
        return view('admin.penyediajasa.edit', compact('penyediajasaAll', 'profesiAll'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\penyediajasa  $penyediajasa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $profesiAll= Profesi::find($id);
        $penyediajasaAll = Penyediajasa::find($id);

        $penyediajasaAll->profesi_id = $request->input('profesi_id');
        $penyediajasaAll->nama_lengkap= $request->input('nama_lengkap');
        $penyediajasaAll->alamat= $request->input('alamat');
        $penyediajasaAll->nomor_telepon = $request->input('nomor_telepon');
        $penyediajasaAll->keterangan = $request->input('keterangan');
    
        
    
    
        if($request->hasFile('file')){
            $file = $request->file('file');
                $extension = $file->getClientOriginalExtension();
                    $filename = time() . '.' . $extension;
                $file->move('uploads/penyediajasa/', $filename);
            $penyediajasaAll->file = $filename;
        }
    
        $penyediajasaAll->save();
        return redirect()->route('penyediajasa.index', compact('penyediajasa'))->with(['error' => 'Data Gagal Diupdate!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\penyediajasa  $penyediajasa
     * @return \Illuminate\Http\Response
     */
    public function destroy(penyediajasa $penyediajasa, $id)
    {
        //
        $penyediajasaAll = Penyediajasa::findOrFail($id);
    File::delete('uploads/penyediajasa/'.$penyediajasaAll->file);
    $penyediajasaAll->delete();

    if($penyediajasaAll){

    //redirect dengan pesan sukses
    return redirect()->route('penyediajasa.index')->with(['success' => 'Data Berhasil Dihapus!']);

    }else{
        
    //redirect dengan pesan error
    return redirect()->route('penyediajasa.index')->with(['error' => 'Data Gagal Dihapus!']);
        }

    
    }
}
