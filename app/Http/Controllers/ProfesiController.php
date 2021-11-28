<?php

namespace App\Http\Controllers;

use File;
use App\Profesi;
use App\Penyediajasa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProfesiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $profesiAll = Profesi::latest()->paginate(10);
        return view('admin/profesi/index', compact('profesiAll'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/profesi/tambah');
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

        $profesiAll->nama= $request->input('nama');
        $profesiAll->save();
        return redirect()->route('profesi.index')->with('status', 'Data Sukses Ditambahkan!');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\profesi  $profesi
     * @return \Illuminate\Http\Response
     */
    public function show(profesi $profesi)
    {
        //
        $profesiAll= DB::table('profesi')->orderby('id', 'asc')->get();
        return view('home/beranda', compact('profesiAll'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\profesi  $profesi
     * @return \Illuminate\Http\Response
     */
    public function edit(profesi $profesi, $id)
    {
        //
        $profesiAll= Profesi::findOrFail($id);
        return view('admin.profesi.edit', compact('profesiAll'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\profesi  $profesi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $profesiAll = Profesi::find($id);
        $profesiAll->nama = $request->input('nama');
    
        $profesiAll->save();
        return redirect()->route('profesi.index', compact('data'))->with('status', 'Data Sukses Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\profesi  $profesi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    //
    $profesiAll = Profesi::findOrFail($id);
    $profesiAll->delete();

    if($profesiAll){

    //redirect dengan pesan sukses
    return redirect()->route('profesi.index')->with('status', 'Data Sukses Dihapus!');

    }else{
        
    //redirect dengan pesan error
    return redirect()->route('profesi.index')->with(['error' => 'Data Gagal Dihapus!']);
        }

    }
}

