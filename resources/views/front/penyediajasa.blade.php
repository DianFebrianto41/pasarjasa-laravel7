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
                <div class="section-title">
                    <h2>Teknisi Kami</h2>
                </div>
            </div>
        </div>

      <div class="row gy-4">
          @foreach ($profesiAll->penyediajasa As $all)

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">

            <div class="member">
              <div class="member-img">
                <img src="{{ asset('uploads/penyediajasa/'.$all->file ) }}" width="100%" alt="">
              </div>
              <div class="member-info">


                <h4>{{$all->nama_lengkap}}</h4>
                <p>{{$all->alamat  }}</p>
                <p>{{ $all->keterangan }}</p>
              </div>
              {{-- <a href="https://api.whatsapp.com/send?phone=62{{ $all->nomor_telepon }}&text=Hallo%20PasarJasa.id" class="btn-buy">Hubungi Saya</a> --}}
              <a href="{{ route('pesan', $all->id)}}" class="btn-buy">Hubungi Saya</a>
            </div>
            </div>
 @endforeach
          </div>
      </div>
    </div>
  </section>
  <!-- End Team Section -->
  @endsection
