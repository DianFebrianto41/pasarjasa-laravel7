@extends('layouts.templateAdmin')

@section('title','Create Produk')
    
@section('container')

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-6">
            <h3>Tambah Profesi</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <form action="{{ route('profesi.store') }}" method="POST" enctype="multipart/form-data">
                    
                        @csrf
                        

                        <div class="form-group">
                            <label class="font-weight-bold">nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" placeholder="Masukkan Nama Produk">
                        
                            <!-- error message untuk title -->
                            @error('nama')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                        <button type="reset" class="btn btn-md btn-warning">RESET</button>

                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    CKEDITOR.replace( 'keterangan' );
</script>
@endsection