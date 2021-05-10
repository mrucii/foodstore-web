<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Cahaya Seafood</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('img/favicon.png')}}" rel="icon">
  <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> -->

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <script src="{{asset('js/modernizr.js')}}"></script>
  <script src="{{asset('js/main.js')}}"></script>
  <script src="{{asset('js/modal.js')}}"></script>


  <!-- =======================================================
  * Template Name: Delicious - v2.2.1
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-flex align-items-center fixed-top topbar-transparent">
    <div class="container text-right">
      <i class="icofont-phone"></i> +62 812 7400 1070
      <i class="icofont-clock-time icofont-rotate-180"></i> Mon-Sat: 11:00 AM - 23:00 PM
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html"><span>Cahaya Seafood</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="{{route('tentang')}}">Tentang</a></li>
          <li class="active"><a href="{{route('products')}}">Produk</a></li>
          <li><a href="{{route('reseps')}}">Resep</a></li>
          <li><a href="{{route('blogs')}}">Blog</a></li>
          <!-- <li><a href="#chefs">Chefs</a></li> -->
          <!-- <li><a href="#gallery">Produk</a></li> -->
          <li><a href="/contact">Contact</a></li>

          <li class="book-a-table text-center"><a href="#book-a-table">Hubungi Kami</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background: url('{{asset('img/slide/slide-1.jpg')}}');">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>Cahaya</span> Seafood</h2>
                <p class="animate__animated animate__fadeInUp">Pengalaman menekuni pengelolaan bidang
                  usaha tambak udang sejak tahun 2014 telah memberikan banyak pelajaran berharga
                  untuk senantiasa meningkatkan profesionalisme usaha dalam hal peningkatan
                  manajemen usaha.</p>
                <div>
                  <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Contact Us</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background: url('{{asset('img/slide/slide-2.jpg')}}');">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Cahaya Seafood</h2>
                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <div>
                  <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Contact Us</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background: url('{{asset('img/slide/slide-3.jpg')}}');">
            <div class="carousel-background"><img src="assets/img/slide/slide-3.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Cahaya Seafood</h2>
                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <div>
                  <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Contact Us</a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container">

        <div class="section-title">
          <h2>Check our <span>Products</span></h2>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">Show All</li>
              <li data-filter=".filter-starters">Ikan</li>
              <li data-filter=".filter-salads">Udang</li>
              <!--  <li data-filter=".filter-specialty">Specialty</li> -->
            </ul>
          </div>
        </div>

        <ul class="cd-items cd-container">
          <div class="menu-container">
            @foreach($product as $key=>$value)
            @if($value->jenis == 'ikan')
            <li class="cd-item menu-item filter-starters">
              <a href="#0" class="cd-trigger" data-nama="{{$value->nama_product}}" data-deskripsi="{{$value->deskripsi}}" data-isi="{{$value->isi}}" data-photo_1="{{asset('img/gallery/'. $value->gambar_1)}}" data-photo_2="{{asset('img/gallery/'. $value->gambar_2)}}" data-photo_3="{{asset('img/gallery/'. $value->gambar_3)}}">{{$value->nama_product}}</a>
              <img src="{{asset('img/gallery/'. $value->gambar_1)}}" alt="Item Preview">
            </li> <!-- cd-item -->
            @else

            <li class="cd-item menu-item filter-salads">
              <a href="#0" class="cd-trigger" data-nama="{{$value->nama_product}}" data-deskripsi="{{$value->deskripsi}}" data-isi="{{$value->isi}}" data-photo_1="{{asset('img/gallery/'. $value->gambar_1)}}" data-photo_2="{{asset('img/gallery/'. $value->gambar_2)}}" data-photo_3="{{asset('img/gallery/'. $value->gambar_3)}}">{{$value->nama_product}}</a>
              <img src="{{asset('img/gallery/'. $value->gambar_1)}}" alt="Item Preview">
            </li> <!-- cd-item -->

            @endif
            @endforeach
          </div>
        </ul> <!-- cd-items -->


        <div class="cd-quick-view">
          <div class="cd-slider-wrapper">
            <ul class="cd-slider">
              <li id="gambar_1" class="selected"></li>
              <li id="gambar_2"></li>
              <li id="gambar_3"></li>
            </ul> <!-- cd-slider -->

            <ul class="cd-slider-navigation">
              <li><a class="cd-next" href="#0">Prev</a></li>
              <li><a class="cd-prev" href="#0">Next</a></li>
            </ul> <!-- cd-slider-navigation -->
          </div> <!-- cd-slider-wrapper -->

          <div id="info" class="cd-item-info">
            <h2 id="title_p"></h2>
            <h2 id="isi" style="padding-top: 1em;"></h2>
            <p id="desc"></p>

            <ul class="cd-item-action">
              <li><button class="add-to-cart">Add to cart</button></li>
            </ul> <!-- cd-item-action -->
          </div> <!-- cd-item-info -->
          <a href="#0" class="cd-close">Close</a>
        </div> <!-- cd-quick-view -->


        <!-- <div class="row menu-container">
        @foreach($product as $key=>$value)
          @if($value->jenis == 'ikan')
          <div class="col-lg-6 menu-item filter-starters">
            <div class="menu-content">
              <a href="#">{{$value->nama_product}}</a><span>{{$value->isi}} ekor/Kg</span>
            </div>
            <div class="menu-ingredients">
              {{$value->deskripsi}}
            </div>
          </div>
          @else
          <div class="col-lg-6 menu-item filter-salads">
            <div class="menu-content">
              <a href="#">{{$value->nama_product}}</a><span>{{$value->isi}} ekor/Kg</span>
            </div>
            <div class="menu-ingredients">
              {{$value->deskripsi}}
            </div>
          </div>
          @endif
        @endforeach -->

      </div>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Gallery Section ======= -->
    <!-- <section id="menu" class="gallery">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Some photos from <span>Our Product</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{asset('img/gallery/gallery-7.jpg')}}" class="venobox" data-gall="gallery-item">
                <img src="{{asset('img/gallery/gallery-7.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{asset('img/gallery/gallery-8.jpg')}}" class="venobox" data-gall="gallery-item">
                <img src="{{asset('img/gallery/gallery-8.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section>End Gallery Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Cahaya Seafood</h3>
      <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Delicious</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <!-- <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a> -->
  <a href="https://api.whatsapp.com/send?phone=51955081075&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
  </a>
  <!-- Vendor JS Files -->
  <script src="{{asset('js/jquery-2.1.1.js')}}"></script>
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('vendor/jquery-sticky/jquery.sticky.js')}}"></script>
  <script src="{{asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('vendor/owl.carousel/owl.carousel.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('js/modernizr.js')}}"></script>
  <script src="{{asset('js/main.js')}}"></script>
  <script src="{{asset('js/modal.js')}}"></script>

  <script src="{{asset('js/velocity.min.js')}}"></script>



</body>

</html>