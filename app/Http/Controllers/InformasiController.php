<?php
namespace App\Http\Controllers;

use File;
use App\Informasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class InformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function show_by_admin()
    // {
    //     //
    //     $info= DB::table('informasi')->get();
    //     return view('admin/informasi/index', ['all_info'=>$info]);
    // }

    public function index()
    {
    //
    // $info= DB::table('informasi')->get();
    // return view('admin/informasi/index', ['all_info'=>$info]);

    $informasiAll = Informasi::latest()->paginate(10);
    return view('admin/informasi/index', compact('informasiAll'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    //

    return view('admin/informasi/tambah');
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
    $informasiAll = new Informasi();

    $informasiAll->judul = $request->input('judul');
    $informasiAll->deskripsi = $request->input('deskripsi');
    $informasiAll->keterangan = $request->input('keterangan');


    if($request->hasFile('file')){
        $file = $request->file('file');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('uploads/informasi/', $filename);
        $informasiAll->file = $filename;
    }else {
    return $request;
    $informasiAll->file = '';
    }

    $informasiAll->save();
    return redirect()->route('informasi.index')->with('status', 'Data Sukses Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    //
    $informasiAll= DB::table('informasi')->orderby('id', 'asc')->get();
    return view('home/beranda', ['informasiAll'=>$informasiAll]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */ 
    public function edit(informasi $informasiAll, $id)
    {
    //
    $informasiAll = Informasi::findOrFail($id);
    return view('admin.informasi.edit', compact('informasiAll'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {

        $informasiAll = Informasi::find($id);

        $informasiAll->judul = $request->input('judul');
        $informasiAll->deskripsi = $request->input('deskripsi');
        $informasiAll->keterangan = $request->input('keterangan');


        if($request->hasFile('file')){
            $file = $request->file('file');
                $extension = $file->getClientOriginalExtension();
                    $filename = time() . '.' . $extension;
                $file->move('uploads/informasi/', $filename);
            $informasiAll->file = $filename;
        }

        $informasiAll->save();
        return redirect()->route('informasi.index', compact('informasiAll'))->with('status', 'Data Sukses Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    //

        //
        $informasiAll = Informasi::findOrFail($id);
		File::delete('uploads/informasi/'.$informasiAll->file);
        $informasiAll->delete();
    
        if($informasiAll){
    
        //redirect dengan pesan sukses
        return redirect()->route('informasi.index')->with('status', 'Data Sukses Dihapus!');
        }else{
            
        //redirect dengan pesan error
        return redirect()->route('informasi.index')->with('status', 'Data gagal Dihapus!');
            }
        }
}
