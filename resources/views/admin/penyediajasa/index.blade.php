@extends('layouts/templateadmin')

@section('title', 'dashboard Penyedia Jasa')

@section('container')
<div class="container-fluid mt-5">
    @if (session('status'))
    <div class="alert alert-primary" role="alert">
    {{session('status')}}
    </div>
    @endif
    <div class="row">
        <div class="col-md-6">
            <h3>Dashboard Penyedia Jasa</h3>
        </div>
    </div>
<div class="row">
    <div class="col-md-12">
        <div class="card border-0 shadow rounded">
            <div class="card-body">
                <a href="{{ route('penyediajasa.tambah') }}" class="btn btn-md btn-success mb-3">Tambah penyediajasa</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">NO</th>
                        <th scope="col">Id profesi</th>
                        <th scope="col">NAMA PROFESI</th>
                        <th scope="col">NAMA </th>
                        <th scope="col">ALAMAT</th>
                        <th scope="col">POTO</th>
                        <th scope="col">KETERANGAN</th>
                        <th scope="col">NOMOR HP</th>
                        <th scope="col">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($penyediajasaAll as $all)
                        <tr>    
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $all->profesi_id }}</td>
                            <td>{{ $all->nama }}</td>
                            <td>{{ $all->nama_lengkap }}</td>
                            <td>{{ $all->alamat }}</td>

                            <td class="text-center">
                                <img src="{{ asset('uploads/penyediajasa/'.$all->file ) }}" class="rounded" style="width: 150px">
                            </td>
                            </td>
                            <td>{{ $all->keterangan }}</td>
                            <td>{{ $all->nomor_telepon }}</td>
                            
                            <td class="text-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('penyediajasa.destroy', $all->id) }}" method="POST">
                                    <a href="{{ route('penyediajasa.edit', $all->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                    @csrf
                                    @method('DELETE')
                                    {{ method_field('PUT') }}
                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                            <div class="alert alert-danger">
                                Data Penyedia Jasa Belum tersedia
                            </div>
                        @endforelse
                    </tbody>
                    </table>  
                
            </div>
        </div>
    </div>
</div>
</div>

@endsection   
