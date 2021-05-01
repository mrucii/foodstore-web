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

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

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
      <i class="icofont-phone"></i> +1 5589 55488 55
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
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="#about">Tentang</a></li>
          <li><a href="{{route('products')}}">Produk</a></li>
          <li><a href="#specials">Resep</a></li>
          <li><a href="{{route('blogs')}}">Blog</a></li>
          <!-- <li><a href="#chefs">Chefs</a></li> -->
          <!-- <li><a href="#gallery">Produk</a></li> -->
          <li><a href="#contact">Contact</a></li>

          <li class="book-a-table text-center"><a href="#book-a-table">Contact Us</a></li>
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

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-5 align-items-stretch video-box" style="background-image: url('{{asset('img/about.jpg')}}');">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

            <div class="content">
              <h3>Tentang <strong>Kami</strong></h3>
              <p>
                CAHAYA BANGUN MAJUJAYA merupakan perusahaan yang bergerak di bidang
                pengelolaan tambak yang berlokasi di Kampung Singkil, Desa Pantai Mekar,
                Kabupaten Bekasi, Muara Gembong. <br></br>Pengalaman menekuni pengelolaan bidang
                usaha tambak udang <b>sejak tahun 2014</b> telah memberikan banyak pelajaran berharga
                untuk senantiasa meningkatkan profesionalisme usaha dalam hal peningkatan
                manajemen usaha.<br></br>
                Legalitas kami adalah CV Cahaya Bangun Majujaya pada tgl. 21 Maret 2019, Fokus
                <b>produk kami adalah seafood yang fresh & organic.</b>
              </p>
            <!--   <p class="font-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="bx bx-check-double"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
              </ul>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum
              </p> -->
            </div>

          </div>

        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Specials Section ======= -->
    <section id="about" class="specials">
      <div class="container">

        <div class="section-title">
          <h2>Pilar <span>Kami</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-toggle="tab" href="#tab-1">Visi & Misi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-2">Tujuan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-3">Strategi Pengembangan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-4">Pengembangan Sumber Daya Manusia</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Visi</h3>
                    <p class="font-italic">Menjadi pengelola dan supplier seafood yang unggul, terkemuka
                    dan terdepan dalam pelayanan, kinerja serta menjadi wadah
                    pencetakan pengusaha baru.</p>
                    <h3>Misi</h3>
                    <p class="font-italic">Menjadi pengelola dan supplier seafood yang unggul, terkemuka
                    dan terdepan dalam pelayanan, kinerja serta menjadi wadah
                    pencetakan pengusaha baru.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{asset('img/specials-1.jpg')}}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Tujuan Kami</h3>
                    <p class="font-italic">Dengan berbekal pengetahuan, pengalaman dan sasaran, kami memfokuskan
                      diri untuk menjadi pengelola dan supplier seafood yang ber-orentasi pada
                      kepuasan pelanggan.<br></br>
                      <h4>Peningkatan akan kami fokuskan 3 solusi utama :</h4>
                                <ul>
                                        <li><b>System</b> solusi dengan continous improvement dalam hal system dan SDM melalui pemahaman system pada customer secara nyata dan pendekatan diskusi, Edukasi dengan melibatkan tim manajemen dan pekerja berpengalaman secara efektif guna meningkatkan kualitas layanan dan kualitas produk. </li>
                                        <li><b>Sharing</b> solusi dengan membuka diskusi guna memberi masukan atau berdiskusi dalam masukan dari mitra pengelola, mitra pemasaran dan konsumen. </li>
                                        <li><b>Partner</b> Solusi dengan menjalin kemitraan usaha dalam hal pemasaran dan pemodalan usaha dengan prinsif saling menguntungkan. </li>
                                </ul>
                    </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{asset('img/specials-2.jpg')}}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Strategi Pengembangan</h3>
                    <p class="font-italic">Kami menyadari bahwa dalam
                                        mengembangkan produk memerlukan strategi
                                        pemasaran. Yang kami sebut 3 (tiga strategi)
                                        yang sesuai dengan misi kami yaitu :<br></br>
                                <ul>
                                        <li><b>Produk</b> solusi dengan continous improvement dalam hal system dan SDM melalui pemahaman system pada customer secara nyata dan pendekatan diskusi, Edukasi dengan melibatkan tim manajemen dan pekerja berpengalaman secara efektif guna meningkatkan kualitas layanan dan kualitas produk. </li>
                                        <li><b>Harga</b> solusi dengan membuka diskusi guna memberi masukan atau berdiskusi dalam masukan dari mitra pengelola, mitra pemasaran dan konsumen. </li>
                                        <li><b>Delivery</b> Solusi dengan menjalin kemitraan usaha dalam hal pemasaran dan pemodalan usaha dengan prinsif saling menguntungkan. </li>
                                </ul>
                    </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{asset('img/specials-3.jpg')}}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>

              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Pengembangan Sumber Daya Manusia</h3>
                    <p class="font-italic">Dengan pengelolaan SDM yang baik dan disertai dengan <b>system continues
                                          improvement</b>, kami mampu memberikan layanan dan solusi yang terbaik bagi mitra
                                          dan costumer.<br></br>
                                <p class="font-italic">Memiliki SDM yang baik merupakan sebuah investasi untuk perusahaan dalam
                                menjalankan proses bisnis. Dengan kontrol yang baik akan menghasilkan produk yang
                                berkualitas</p>
                    </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{asset('img/specials-3.jpg')}}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>     
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Specials Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-5 align-items-stretch video-box" style="background-image: url('{{asset('img/about.jpg')}}');">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

            <div class="content">
              <h3>Pengelolaan <strong>Tambak</strong></h3>
              <p>
                Bergerak di bidang pengelolaan tambak dengan luas 26 Ha dengan
                menggunakan metode Tradisional, <b>CV Cahaya Bangun Majujaya di dukung
                oleh 20 puluh pekerja (mitra kerja)</b>, 6 mitra manajemen terdiri dari 1 orang
                manajer umum (administrasi dan keuangan) 1 orang kepala bagian tambak, 1
                orang bagian <b>quality control</b>, 1 orang marketing offline, 1 orang bagian
                marketing online, 1 orang bagian <b>delivery</b> / distribusi produk.<br></br>
                </p>
                <p>
                Untuk menjamin kemampuan pengelolaan dan panen dengan kualitas terbaik.
                <b>CV Cahaya Bangun Majujaya memiliki lokasi tambak yang sangat strategis</b> di
                wilayah muara gembong yang menuju ke laut dengan kadar garam 10 s.d. 25
                ppm sekaligus kadar PH sebesar 7 s.d. 8.
                Suhu dan siklus air yang selalu dijaga dan diperhatikan untuk memberikan hasil
                pertumbuhan udang yang baik dan unggul.</p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-5 align-items-stretch video-box" style="background-image: url('{{asset('img/about.jpg')}}');">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

            <div class="content">

                <h3>Distribusi <strong>Produk</strong></h3>
                <p>
                Distribusi produk di lakukan dua
                kali dalam satu minggu, yaitu pada
                hari <b>Rabu dan Sabtu secara regular</b>
                dan bisa dilakukan kesepakatan
                lain sesuai dengan permintaan
                customer/ perjanjian kerjasama.
                </p>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Events Section ======= -->
    <section id="about" class="events">
      <div class="container">

        <div class="section-title">
          <h2>Jenis <span>Kemasan</span></h2>
        </div>

        <div class="owl-carousel events-carousel">

          <div class="row event-item">
            <div class="col-lg-6">
              <img src="{{asset('img/event-birthday.jpg')}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>KEMASAN MINI (1-5 KG)</h3>
              <div class="price">
                <p><span>$189</span></p>
              </div>
              <p class="font-italic">
                Untuk pengriman per kg menggunakan tempat box plastik dan Es batu.
              </p>
              <ul>
                <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="icofont-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              </ul>
              <p>
                Tujuan dari packaging tersebut untuk menjaga produk tetap "FRESH"
                sampai ke tempat pemesan.
              </p>
            </div>
          </div>

          <div class="row event-item">
            <div class="col-lg-6">
              <img src="{{asset('img/event-birthday.jpg')}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>KEMASAN BESAR ( > 5KG)</h3>
              <div class="price">
                <p><span>$290</span></p>
              </div>
              <p class="font-italic">
                Untuk pengriman lebih dari 5 kg menggunakan coller box dan Es batu.
              </p>
              <ul>
                <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="icofont-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              </ul>
              <p>
                Tujuan dari packaging tersebut untuk menjaga produk tetap <b>FRESH</b>
                sampai ke tempat pemesan.
              </p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Events Section -->


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

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('vendor/jquery-sticky/jquery.sticky.js')}}"></script>
  <script src="{{asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('vendor/owl.carousel/owl.carousel.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('js/main.js')}}"></script>

</body>

</html>