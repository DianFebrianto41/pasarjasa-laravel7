<?php

namespace App\Http\Controllers;

use File;
use App\layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $layananAll = Layanan::latest()->paginate(10);
        return view ('admin/layanan/index', compact('layananAll'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('admin/layanan/tambah');
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
        $layananAll = new Layanan();

        $layananAll->judul = $request->input('judul');
        $layananAll->keterangan = $request->input('keterangan');
    
    
        if($request->hasFile('file')){
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/layanan/', $filename);
            $layananAll->file = $filename;
        }else {
        return $request;
        $layananAll->file = '';
        }
    
        $layananAll->save();
        return redirect()->route('layanan.index')->with('status', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function show(layanan $layanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function edit(layanan $layanan, $id)
    {
        //
        $layananAll = Layanan::findOrFail($id);
        return view('admin.layanan.edit', compact('layananAll'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $layananAll = Layanan::find($id);

        $layananAll->judul = $request->input('judul');
        $layananAll->keterangan = $request->input('keterangan');


        if($request->hasFile('file')){
            $file = $request->file('file');
                $extension = $file->getClientOriginalExtension();
                    $filename = time() . '.' . $extension;
                $file->move('uploads/layanan/', $filename);
            $layananAll->file = $filename;
        }

        $layananAll->save();
        return redirect()->route('layanan.index', compact('layananAll'))->with(['error' => 'Data Gagal Diupdate!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(layanan $layanan, $id)
    {
        //
        $layananAll = Layanan::findOrFail($id);
		File::delete('uploads/layanan/'.$layananAll->file);
        $layananAll->delete();
    
        if($layananAll){
    
        //redirect dengan pesan sukses
        return redirect()->route('layanan.index')->with(['success' => 'Data Berhasil Dihapus!']);
    
        }else{
            
        //redirect dengan pesan error
        return redirect()->route('informasi.index')->with(['error' => 'Data Gagal Dihapus!']);
            }
    }
}
