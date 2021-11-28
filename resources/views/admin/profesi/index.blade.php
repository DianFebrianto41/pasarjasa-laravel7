@extends('layouts/templateadmin')

@section('title', 'dashboard Produk')

@section('container')
<div class="container-fluid mt-5">
    @if (session('status'))
    <div class="alert alert-primary" role="alert">
    {{session('status')}}
    </div>
    @endif
    <div class="row">
        <div class="col-md-6">
            <h3>Tabel Profesi</h3>
        </div>
    </div>
<div class="row mt-3">
    <div class="col-md-12">
        <div class="card border-0 shadow rounded">
            <div class="card-body">
                <a href="{{ route('profesi.tambah') }}" class="btn btn-md btn-success mb-3">Tambah Profesi</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($profesiAll as $all)
                        <tr>
                            <td>{{ $all->nama }}</td>
                            </td>  
                            <td class="text-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('profesi.destroy', $all->id) }}" method="POST">
                                    <a href="{{ route('profesi.edit', $all->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                    @csrf
                                    @method('DELETE')
                                    {{ method_field('PUT') }}
                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                            <div class="alert alert-danger">
                                Data Profesi belum Tersedia.
                            </div>
                        @endforelse
                    </tbody>
                    </table>  
                    {{ $profesiAll->links() }}
            </div>
        </div>
    </div>
</div>
</div>

@endsection   
