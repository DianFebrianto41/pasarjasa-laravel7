@extends('layouts.templateadmin')

@section('title','edit informasi')
    
@section('container')


<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-6">
            <h3>Edit Data</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <form action="{{ route('informasi.update', $informasiAll->id) }}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        {{ csrf_field() }}
                        @method('PUT')

                        
                        <div class="form-group">
                            <label class="font-weight-bold">JUDUL</label>
                            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul', $informasiAll->judul) }}" placeholder="Masukkan Judul informasi">
                            
                            <!-- error message untuk judul -->
                            @error('judul')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        
                        
                        <div class="form-group">
                            <label class="font-weight-bold">DESKRIPSI</label>
                            <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" value="{{ old('judul', $informasiAll->deskripsi) }}" placeholder="Masukkan Deskripsi informasi">
                            
                            <!-- error message untuk judul -->
                            @error('judul')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label class="font-weight-bold">GAMBAR</label>
                            <input type="file" class="form-control" name="file">
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Keterangan</label>
                            <textarea class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" rows="5" placeholder="Masukkan Keterangan informasi">{{ old('keterangan', $informasiAll->keterangan) }}</textarea>
                        
                            <!-- error message untuk keterangan -->
                            @error('keterangan')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                        <button type="reset" class="btn btn-md btn-warning">RESET</button>

                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>

    @endsection
