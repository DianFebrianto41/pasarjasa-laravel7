@extends('layouts.templateadmin')

@section('title','edit informasi')
    
@section('container')


<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-6">
            <h3>Edit Profesi</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <form action="{{ route('profesi.update', $profesiAll->id) }}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        {{ csrf_field() }}
                        @method('PUT')

                        
                        <div class="form-group">
                            <label class="font-weight-bold">Nama Profesi</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $profesiAll->nama) }}" placeholder="Masukkan nama profesi">
                            
                            <!-- error message untuk nama -->
                            @error('nama')
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
