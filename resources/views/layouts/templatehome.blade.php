<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
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

    
<!-- preloader start -->
<div class="preloader">
    <span></span>
</div>
<!-- preloader end -->

    <header id="header" class="header fixed-top"></header>
<!-- navbar section start -->
<nav class="navbar navbar-expand-lg fixed-top">
        <!-- Brand -->
    <div class="container">
        <a class="navbar-brand" href="{{ '/' }}">PasarJasa.id</a>
    
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <i class="fas fa-bars"></i>
        </button>
    
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
        @stack('nav')
        </div>
    </div>
</nav>
<!-- navbar section ends -->



@yield('container')





<!-- footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer-col">
                    <h3>Perusahaan</h3>
                    <ul>
                        <li><a href="">Tentang</a></li>
                        <li><a href="">Produk</a></li>
                        <li><a href="">Blog</a></li>
                        <li><a href="{{ url('/login') }}">Masuk</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="footer-col">
                    <h3>Gabung</h3>
                    <ul>
                        <li><a href="">Our Team</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="footer-col">
                    <h3>Karir</h3>
                    <ul>
                        <li><a href="">Professional</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="footer-col">
                    <h3>Hubungi kami</h3>
                    <ul>
                        <li><a href="">Bantuan</a></li>
                        <li><a href="">Kontak</a></li>
                    </ul>
                </div>

                <div class="footer-col ikon mt-5">
                    <h3>Cari tau berita terbaru</h3>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p class="copyright-text">Copyright &copy; Pasarjasa.id 2021</p>
            </div>
        </div>
    </div>
</footer>

<div class="back-to-top">
    <i class="fas fa-arrow-up fa"></i>
    </div>


  
    

<script src="{{ URL::asset('home/js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('home/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('home/js/script.js') }}"></script>
<script src="{{ URL::asset('home/js/main.js') }}"></script>
<script src="{{ URL::asset('home/js/aos.js') }}"></script>
<script>
    AOS.init();
</script>


<script type="text/javascript">
    $('.back-to-top').hide();
    $(window).on('scroll', function(e){
      $this = $(this);
      if($this.scrollTop() > 0){
        $('.back-to-top').fadeIn('slow');
      }else{
        $('.back-to-top').fadeOut('fast');
      }
    });
  
    $('.back-to-top').on('click', function(){
      $('body,html').animate({scrollTop: 0}, 1000);
    });
  </script>
  


</body>
</html>