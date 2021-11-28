@extends('layouts.templateAdmin')

@section('title','Tambah layanan')
    
@section('container')

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-6">
            <h3>Tambah layanan</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <form action="{{ route('layanan.store') }}" method="POST" enctype="multipart/form-data">
                    
                        @csrf

                        <div class="form-group">
                            <label class="font-weight-bold">JUDUL</label>
                            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul') }}" placeholder="Masukkan Nama Layanan">
                        
                            <!-- error message untuk title -->
                            @error('judul')
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
                            <textarea class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" rows="5" placeholder="Masukkan Keterangan Layanan">{{ old('keterangan') }}</textarea>
                        
                            <!-- error message untuk keterangan -->
                            @error('keterangan')
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