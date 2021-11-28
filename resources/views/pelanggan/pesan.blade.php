<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Registasi')</title>
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- style css -->
    <link rel="stylesheet" href="{{ URL::asset('home/css/style.css') }}">
    
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="{{ URL::asset('home/css/font-awesome.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ URL::asset('home/css/bootstrap.min.css') }}">
    
    <!-- aos css file cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <script src="https://kit.fontawesome.com/bdd89edb33.js"></script>

    <!-- anime javascript -->
    <script script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

      
</head>
<body>

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
                    <form action="{{ route('pelanggan.store') }}" method="POST" enctype="multipart/form-data">
                    
                        @csrf

                        <div class="form-group">
                            <label class="font-weight-bold">NAMA LENGKAP</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" placeholder="Masukkan Nama Lengkap">
                        
                            <!-- error message untuk title -->
                            @error('nama')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
              
                        <div class="form-group">
                          <label class="font-weight-bold">ALAMAT</label>
                          <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" placeholder="Masukkan Nama Lengkap">
                      
                          <!-- error message untuk title -->
                          @error('alamat')
                              <div class="alert alert-danger mt-2">
                                  {{ $message }}
                              </div>
                          @enderror
                      </div>
              
                      <div class="form-group">
                        <label class="font-weight-bold">NOMOR HANDPHONE</label>
                        <input type="text" class="form-control @error('nomor_hp') is-invalid @enderror" name="nomor_hp" value="{{ old('nomor_hp') }}" placeholder="Masukkan Nama Lengkap">
                    
                        <!-- error message untuk title -->
                        @error('nomor_hp')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    @foreach ($penyediajasaAll->pelanggan As $all)
                        <a href="https://api.whatsapp.com/send?phone=62{{ $all->nomor_telepon }}&text=Hallo%20PasarJasa.id" button type="submit" class="btn btn-md btn-primary">SIMPAN</a>
                     
@endforeach
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>


<script src="{{ URL::asset('home/js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('home/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('home/js/script.js') }}"></script>
<script src="{{ URL::asset('home/js/main.js') }}"></script>
</body>
</html>