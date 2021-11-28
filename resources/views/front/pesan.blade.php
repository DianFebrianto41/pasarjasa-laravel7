@extends('layouts/templatehome')


@section('title','Penyedia Jasa')

@push('nav')
<ul class="navbar-nav ml-auto">
    <li class="nav-item">
        <a class="nav-link active" data-scroll-nav="0" href="{{ ('/') }}">Home</a>
    </li>
@endpush

@section('container')



<section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row min-vh-100">
        <div class="col-lg-12 d-flex flex-column justify-content-center text-center">

          <h1 style="font-size:80px; color :#024eb2;" data-aos="fade-up">Pilih Jasa terbaik Anda</h1>
          </h5>
        </div>
      </div>
    </div>

  </section>



  <section id="team" class="team section-padding">

    <div class="container" data-aos="fade-up">

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <h2>{{ $jasa->nama_lengkap . " - " . $jasa->profesi->nama }}</h2>
                    <p>{{ $jasa->alamat }}</p>
                </div>

                <form method="POST" action="{{ route('pesan.simpan', $jasa->id) }}" target="_blank">
                    @csrf
                    <div class="form-group">
                      <label for="nama">Nama Lengkap</label>
                      <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap Anda" name="nama" required autofocus autocomplete="off">
                      {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                    </div>
                    <div class="form-group">
                      <label for="alamat">Alamat Lengkap</label>
                      <input type="text" class="form-control" id="alamat" placeholder="Alamat Lengkap Anda" name="alamat" required autocomplete="off">
                    </div>
                    <div class="form-group">
                      <label for="nomor_hp">Nomor Handphone</label>
                      <input type="text" class="form-control" id="nomor_hp" placeholder="Nomor Handphone Anda" name="nomor_hp" required autocomplete="off">
                    </div>
                    <button type="submit" class="btn btn-primary">Hubungi Penyedia Jasa</button>
                </form>
            </div>
        </div>

        <div class="row gy-4">

        </div>
      </div>
    </div>
  </section>
  <!-- End Team Section -->
  @endsection
