@extends('layouts.templatehome')
{{-- <link rel="icon" href="{{ URL::asset('home/img/home.png') }}" > --}}
@section('title','Pasar Jasa Krandegan')

@push('nav')
<ul class="navbar-nav ml-auto">
    <li class="nav-item">
        <a class="nav-link active" data-scroll-nav="0" href="{{ ('/') }}">Home</a>
    </li>

    <li class="nav-item dropdown">

        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Penyedia Jasa
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            @foreach ($profesiAll as $all)
        {{-- <a class="dropdown-item" style="color:black;" href="{{  route('profesi.nama', $all->nama) }}">{{ $all->nama }}
        <br></a> --}}
        <a class="dropdown-item" style="color:black;" href="{{  route('kategori.nama', $all->id) }}">{{ $all->nama }}<br></a>
        @endforeach
        </div> 
    </li> 
</ul>
    
@endpush


@section('container')


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="effect-wrap">
        <i class="fas fa-plus effect effect-1"></i>
        <div class="effect effect-5">
            <div></div><div></div><div></div><div></div><div></div>
            <div></div><div></div><div></div><div></div><div></div>
        </div>
        <i class="fas fa-circle-notch effect effect-3"></i>
    </div>

    
    <div class="container">
      <div class="row min-vh-100">
        <div class="col-lg-6 d-flex flex-column justify-content-center">

          <h1 style="font-size:80px; color :#024eb2;" data-aos="fade-up">Pasar jasa</h1>
          <h5 style="font-size: 26px; line-height:36px" data-aos="fade-up" data-aos-delay="400">Pesan jasa yang kamu butuhkan melalui media daring tanpa repot-repot ke tempat.
          </h5>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class=" text-lg-start">
              <a href="#values"
                class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span style="color: #1A183E; font-weight:700px;"><b>Klik</b></span>
                <i style="color : #1A183E" class="fas fa-arrow-right"></i>
                <span style="color: #1A183E; font-weight:700px;"><b>Ketemuan</b></span>
                <i style="color : #1A183E" class="fas fa-arrow-right"></i>
                <span style="color: #1A183E; font-weight:700px;"><b>Bayar</b></span>
             
              </a>
            </div>
          </div>
        </div>
         <div class="col-lg-6 hero-img d-flex flex-column justify-content-center" data-aos="zoom-out" data-aos-delay="200">
          <img src="{{ URL::asset('home/img/hero-img.png') }}" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section>
  <!-- End Hero -->
<!-- home section end -->

{{-- About section Start --}}
<section class="about section-padding" >
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title">
                    <h2>Mudahnya menggunakan Pasar Jasa</h2>
                </div>
            </div>  
        </div>
        <?php $a= 3; ?>
        @forelse ($informasiAll as $all)
         <?php if($a%2 != 0){ ?>
        <div class="row align-items-center ml-5 " data-aos="fade-right" data-aos-duration="1000">
            <div class="col-md-7 go align-items-center justify-content-center " >
                <div class="box">
                    <h2>{{ $all->judul }}</h2>
                    <p>{{ $all->deskripsi }}</p>
                </div>
            </div>
            <div class="col-md-5 d-none d-md-block align-items-center justify-content-center">
                <img src="{{ asset('uploads/informasi/'.$all->file ) }}" width="100%" alt="">
            </div>
        </div>
      <?php }else{ ?> 

        <div class="row align-items-center " data-aos="fade-left" data-aos-duration="2000">
            <div class="col-md-5 d-none d-md-block">
                <img src="{{ asset('uploads/informasi/'.$all->file ) }}" width="100%" alt="">
            </div>

            <div class="col-md-7 go">
                <div class="box">
                    <h2>{{ $all->judul }}</h2>
                    <p>{{ $all->deskripsi }}</p>
                </div>
            </div>
        </div>
        <?php }
        $a++;
        ?>
    @endforeach
    </div>
</section>
<!-- feature section end -->


<!-- feature section start -->
<section class="feature section-padding" data-scroll-index="4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title">
                    <h2>PasarJasa untuk kebutuhan setiap hari</h2>
                </div>
            </div>  
        </div>
        <div class="row">
            @foreach($layananAll as $all )
            <div class="container-content  col-lg-3 content"  data-aos="fade-up" data-aos-duration="1000">
            
              <div class="content-item">
                <div class="img-box">
                    <img src="{{ asset('uploads/layanan/'.$all->file ) }}" alt="testimonials-1">
                  </div>
                  <h5>{{ $all->judul }}</h5>
              </div>
          </div>
              @endforeach 
        </div>
    </div>
</section>
<!-- feature section end -->

<!-- download app section start -->
<section class="app-download section-padding"data-scroll-index="3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title">
                    <h2>Unduh aplikasi sekarang juga </h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="app-download-item">
                    <i class="fab fa-google-play"></i>
                    <h3>Google play</h3>
                    
                    <a href="#" class="btn-buy"> Download now</a>
                </div>
            </div>


            <div class="col-lg-4 col-md-6">
                <div class="app-download-item">
                    <i class="fab fa-apple"></i>
                    <h3>Apple Store</h3>
                    <a href="#" class=" btn-buy"> Download now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- download app section end -->

<!-- faq section start -->
<section class="faq section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title">
                    <h2>Mengapa Pasarjasa.id ?</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div id="accordion">
                    <div class="accordion-item">
                        <div class="accordion-header" data-toggle="collapse" data-target="#collapse-01">
                            <h3>Teknisi terlatih siap melayani anda kapanpun</h3>
                        </div>
                        <div class="collapse show" id="collapse-01" data-parent="#accordion"> 
                            <div class="accordion-body">
                                <p>Berdasarkan pesanan anda, kami dapat mencocokan Anda dengan teknis terlatih dan berkualitas.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <div class="accordion-header collapsed" data-toggle="collapse" data-target="#collapse-02">
                            <h3>Harga tetap dengan garansi untuk semua perbaikan</h3>
                        </div>
                        <div class="collapse" id="collapse-02" data-parent="#accordion">
                            <div class="accordion-body">
                               <p>Semua servis kami mempunyai harga yang tetap disertakan dengan garansi.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <div class="accordion-header collapsed" data-toggle="collapse" data-target="#collapse-03">
                            <h3>Menerima uang tunai atau transfer dengan aman</h3>
                        </div>
                        <div class="collapse" id="collapse-03" data-parent="#accordion">
                            <div class="accordion-body">
                                <p>PasarJasa menerima pembayaran tunai dan transfer. Nikmati pelayanan pembayaran yang aman, terjamin, dan real-time.</p>
                                </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
<!-- faq section end -->
