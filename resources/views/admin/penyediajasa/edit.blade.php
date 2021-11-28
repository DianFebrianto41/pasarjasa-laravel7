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
                    <form action="{{ route('penyediajasa.update', $penyediajasaAll->id) }}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        {{ csrf_field() }}
                        @method('PUT')

                        
                     
                        <div class="form-group">
                            <label class="font-weight-bold">Nama Profesi</label>
                            <select class="custom-select @error('profesi_id') is-invalid @enderror" name="profesi_id" placeholder="Masukkan Alamat">{{ old('profesi_id', $penyediajasaAll->profesi_id) }}
                               
                                <option selected>Choose...</option>
                        @foreach ($profesiAll as $all)
                                <option value="{{  $all->id }}">{{  $all->nama }}</option>
                                @endforeach
                    
                              </select>
                        
                            <!-- error message untuk alamat -->
                            @error('profesi_id')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">NAMA LENGKAP</label>
                            <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap" value="{{ old('nama_lengkap', $penyediajasaAll->nama_lengkap) }}" placeholder="Masukkan Nama Lengkap">
                        
                            <!-- error message untuk title -->
                            @error('nama_lengkap')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">ALAMAT</label>
                            <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" rows="5" placeholder="Masukkan Alamat">{{ old('alamat', $penyediajasaAll->alamat) }}</textarea>
                        
                            <!-- error message untuk alamat -->
                            @error('alamat')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

    
                       

                        <div class="form-group">
                            <label class="font-weight-bold">GAMBAR</label>
                            <input type="file" class="form-control @error('file') is-invalid @enderror" name="file">
                        
                            <!-- error message untuk title -->
                            @error('file')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                       

                        <div class="form-group">
                            <label class="font-weight-bold">KETERANGAN</label>
                            <textarea class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" rows="5" placeholder="Masukkan Keterangan">{{ old('keterangan', $penyediajasaAll->keterangan) }}</textarea>
                        
                            <!-- error message untuk keterangan -->
                            @error('keterangan')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">NOMOR HP</label>
                            <textarea class="form-control @error('nomor_telepon') is-invalid @enderror" name="nomor_telepon" rows="5" placeholder="Masukkan nomor_telepon">{{ old('nomor_telepon', $penyediajasaAll->nomor_telepon) }}</textarea>
                        
                            <!-- error message untuk nomor_telepon -->
                            @error('nomor_telepon')
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
