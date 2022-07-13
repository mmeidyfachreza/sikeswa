<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GHOSTING</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('template/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <script src="https://kit.fontawesome.com/ce07c321e4.js" crossorigin="anonymous"></script>
    {{-- <link rel="stylesheet" href="{{asset('template/vendor/font-awesome/css/font-awesome.min.css')}}"> --}}
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{asset('template/css/fontastic.css')}}">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">

    @yield('link')

    <!-- jQuery Circle-->
    <link rel="stylesheet" href="{{asset('template/css/grasp_mobile_progress_circle-1.0.0.min.css')}}">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet"
        href="{{asset('template/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css')}}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('template/vendor/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('template/vendor/slick/slick-theme.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('template/img/favicon.ico')}}">
    <link rel="stylesheet" href="{{asset('template/vendor/boxicons/css/boxicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/vendor/animate.css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/vendor/aos/aos.css')}}">
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">


    @yield('custom-style')
    <style>
        .your-class .card {
            height: 95vh !important;
        }

        .your-class .card img {
            height: 95vh !important;
        }

        .container {
            max-width: 1200px;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }

        body {
            font-family: "Noto Sans", sans-serif;
            padding: 0;
            margin: 0;
            overflow-x: hidden;
        }

        .crake-nav {
            background: #ffffff;
            position: absolute;
            top: 0;
            left: 0;
            padding-top: 4px;
            width: 100%;
            z-index: 666;
            height: auto;
            -webkit-box-shadow: 0px 1px 10px #ddd !important;
            box-shadow: 0px 1px 10px #ddd !important;
            border-bottom: 1px solid #e9e9e9;
        }

        /*--------------------------------------------------------------
# Portfolio
--------------------------------------------------------------*/
.portfolio #portfolio-flters {
  padding: 0;
  margin: 0 auto 50px auto;
  list-style: none;
  text-align: center;
}

.portfolio #portfolio-flters li {
  cursor: pointer;
  display: inline-block;
  padding: 8px 20px 10px 20px;
  font-size: 14px;
  font-weight: 400;
  line-height: 1;
  text-transform: uppercase;
  color: #4d4643;
  transition: all 0.3s;
  border-radius: 4px;
}

.portfolio #portfolio-flters li:hover, .portfolio #portfolio-flters li.filter-active {
  color: #fff;
  background: #1bbd36;
}

.portfolio #portfolio-flters li:last-child {
  margin-right: 0;
}

.portfolio .portfolio-item {
  margin-bottom: 30px;
}

.portfolio .portfolio-item .portfolio-info {
  opacity: 0;
  position: absolute;
  left: 30px;
  right: 30px;
  bottom: 0;
  z-index: 3;
  transition: all ease-in-out 0.3s;
  background: rgba(255, 255, 255, 0.9);
  padding: 15px;
}

.portfolio .portfolio-item .portfolio-info h4 {
  font-size: 18px;
  color: #fff;
  font-weight: 600;
  color: #111;
}

.portfolio .portfolio-item .portfolio-info p {
  color: #444444;
  font-size: 14px;
  margin-bottom: 0;
}

.portfolio .portfolio-item .portfolio-info .preview-link, .portfolio .portfolio-item .portfolio-info .details-link {
  position: absolute;
  right: 40px;
  font-size: 24px;
  top: calc(50% - 18px);
  color: #2b2b2b;
}

.portfolio .portfolio-item .portfolio-info .preview-link:hover, .portfolio .portfolio-item .portfolio-info .details-link:hover {
  color: #1bbd36;
}

.portfolio .portfolio-item .portfolio-info .details-link {
  right: 10px;
}

.portfolio .portfolio-item .portfolio-links {
  opacity: 0;
  left: 0;
  right: 0;
  text-align: center;
  z-index: 3;
  position: absolute;
  transition: all ease-in-out 0.3s;
}

.portfolio .portfolio-item .portfolio-links a {
  color: #fff;
  margin: 0 2px;
  font-size: 28px;
  display: inline-block;
  transition: 0.3s;
}

.portfolio .portfolio-item .portfolio-links a:hover {
  color: #57e76f;
}

.portfolio .portfolio-item:hover .portfolio-info {
  opacity: 1;
  bottom: 20px;
}


        /*--------------------------------------------------------------
# Services
--------------------------------------------------------------*/
        .services .icon-box {
            text-align: center;
            width: 100%;
            padding: 70px 20px 80px 20px;
            transition: all ease-in-out 0.3s;
            background: #fff;
        }

        .services .icon-box .icon {
            margin: 0 auto;
            width: 100px;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: ease-in-out 0.3s;
            position: relative;
        }

        .services .icon-box .icon i {
            font-size: 36px;
            transition: 0.5s;
            position: relative;
        }

        .services .icon-box .icon svg {
            position: absolute;
            top: 0;
            left: 0;
        }

        .services .icon-box .icon svg path {
            transition: 0.5s;
            fill: #f5f5f5;
        }

        .services .icon-box h4 {
            font-weight: 600;
            margin: 10px 0 15px 0;
            font-size: 22px;
        }

        .services .icon-box h4 a {
            color: #111;
            transition: ease-in-out 0.3s;
        }

        .services .icon-box p {
            line-height: 24px;
            font-size: 14px;
            margin-bottom: 0;
        }

        .services .icon-box:hover {
            border-color: #fff;
            box-shadow: 0px 0 35px 0 rgba(0, 0, 0, 0.08);
        }

        .services .iconbox-blue i {
            color: #47aeff;
        }

        .services .iconbox-blue:hover .icon i {
            color: #fff;
        }

        .services .iconbox-blue:hover .icon path {
            fill: #47aeff;
        }

        .services .iconbox-orange i {
            color: #ffa76e;
        }

        .services .iconbox-orange:hover .icon i {
            color: #fff;
        }

        .services .iconbox-orange:hover .icon path {
            fill: #ffa76e;
        }

        .services .iconbox-pink i {
            color: #e80368;
        }

        .services .iconbox-pink:hover .icon i {
            color: #fff;
        }

        .services .iconbox-pink:hover .icon path {
            fill: #e80368;
        }

        .services .iconbox-yellow i {
            color: #ffbb2c;
        }

        .services .iconbox-yellow:hover .icon i {
            color: #fff;
        }

        .services .iconbox-yellow:hover .icon path {
            fill: #ffbb2c;
        }

        .services .iconbox-red i {
            color: #ff5828;
        }

        .services .iconbox-red:hover .icon i {
            color: #fff;
        }

        .services .iconbox-red:hover .icon path {
            fill: #ff5828;
        }

        .services .iconbox-teal i {
            color: #11dbcf;
        }

        .services .iconbox-teal:hover .icon i {
            color: #fff;
        }

        .services .iconbox-teal:hover .icon path {
            fill: #11dbcf;
        }


        /*--------------------------------------------------------------
# Sections General
--------------------------------------------------------------*/
        section {
            padding: 60px 0;
            overflow: hidden;
        }

        .section-bg {
            background-color: #f7f7f7;
        }

        .section-title {
            text-align: center;
            padding-bottom: 30px;
        }

        .section-title h2 {
            font-size: 32px;
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 20px;
            padding-bottom: 20px;
            position: relative;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            display: block;
            width: 50px;
            height: 3px;
            background: #1bbd36;
            bottom: 0;
            left: calc(50% - 25px);
        }

        .section-title p {
            margin-bottom: 0;
        }


        /*--------------------------------------------------------------
# About Us
--------------------------------------------------------------*/
        .about-us .content h2 {
            font-weight: 700;
            font-size: 42px;
            line-height: 60px;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        .about-us .content h3 {
            font-weight: 500;
            line-height: 32px;
            font-size: 24px;
        }

        .about-us .content ul {
            list-style: none;
            padding: 0;
        }

        .about-us .content ul li {
            padding: 10px 0 0 28px;
            position: relative;
        }

        .about-us .content ul i {
            left: 0;
            top: 7px;
            position: absolute;
            font-size: 20px;
            color: #1bbd36;
        }

        .about-us .content p:last-child {
            margin-bottom: 0;
        }


        /*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
        #footer {
            color: #fff;
            font-size: 14px;
            background: #111;
        }

        #footer .footer-top {
            padding: 60px 0 30px 0;
            background: #1e1e1e;
        }

        #footer .footer-top .footer-contact {
            margin-bottom: 30px;
        }

        #footer .footer-top .footer-contact h3 {
            font-size: 22px;
            margin: 0 0 10px 0;
            padding: 2px 0 2px 0;
            line-height: 1;
            font-weight: 500;
            letter-spacing: 1px;
            text-transform: uppercase;
            color: #fff;
        }

        #footer .footer-top .footer-contact p {
            font-size: 14px;
            line-height: 24px;
            margin-bottom: 0;
            font-family: "Roboto", sans-serif;
            color: rgba(255, 255, 255, 0.7);
        }

        #footer .footer-top h4 {
            font-size: 16px;
            font-weight: bold;
            color: #fff;
            position: relative;
            padding-bottom: 12px;
        }

        #footer .footer-top .footer-links {
            margin-bottom: 30px;
        }

        #footer .footer-top .footer-links ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        #footer .footer-top .footer-links ul i {
            padding-right: 2px;
            color: #1ed33c;
            font-size: 18px;
            line-height: 1;
        }

        #footer .footer-top .footer-links ul li {
            padding: 10px 0;
            display: flex;
            align-items: center;
        }

        #footer .footer-top .footer-links ul li:first-child {
            padding-top: 0;
        }

        #footer .footer-top .footer-links ul a {
            color: rgba(255, 255, 255, 0.6);
            transition: 0.3s;
            display: inline-block;
            line-height: 1;
        }

        #footer .footer-top .footer-links ul a:hover {
            text-decoration: none;
            color: #fff;
        }

        #footer .footer-newsletter {
            font-size: 15px;
            color: rgba(255, 255, 255, 0.7);
        }

        #footer .footer-newsletter h4 {
            font-size: 16px;
            font-weight: bold;
            color: #fff;
            position: relative;
            padding-bottom: 12px;
        }

        #footer .footer-newsletter form {
            margin-top: 30px;
            background: #fff;
            padding: 6px 10px;
            position: relative;
            border-radius: 4px 0 0 4px;
            text-align: left;
        }

        #footer .footer-newsletter form input[type="email"] {
            border: 0;
            padding: 4px 8px;
            width: calc(100% - 100px);
        }

        #footer .footer-newsletter form input[type="submit"] {
            position: absolute;
            top: 0;
            right: -4px;
            bottom: 0;
            border: 0;
            background: none;
            font-size: 16px;
            padding: 0 20px;
            background: #1bbd36;
            color: #fff;
            transition: 0.3s;
            border-radius: 0 4px 4px 0;
            box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
        }

        #footer .footer-newsletter form input[type="submit"]:hover {
            background: #2ae149;
        }

        #footer .credits {
            padding-top: 5px;
            font-size: 13px;
            color: #fff;
        }

        #footer .social-links a {
            font-size: 18px;
            display: inline-block;
            background: rgba(255, 255, 255, 0.08);
            color: #fff;
            line-height: 1;
            padding: 8px 0;
            margin-right: 4px;
            border-radius: 4px;
            text-align: center;
            width: 36px;
            height: 36px;
            transition: 0.3s;
        }

        #footer .social-links a:hover {
            background: #1bbd36;
            color: #fff;
            text-decoration: none;
        }

    </style>
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>
    <header>
        <div class="crake-nav">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand" href="#">GHOSTING</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05"
                        aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarsExample05">

                    </div>
                </div>
            </nav>
        </div>

    </header>

    <div class="main-content">
        <div class="your-class single-item">
            <div>
                <div class="card text-white" style="width: 100%; display: inline-block;">
                    <img style="background-size:cover!important;object-fit:cover!important;"
                        src="{{asset('storage/img/background.jpg')}}" alt="Bangga Mengkonsumsi Produk Petani Lokal" class="card-img">
                    <div class="card-img-overlay d-flex justify-content-center align-items-center">
                        <div class="text-center">
                            {{-- <h1 class="display-4 text-white slider-title"><b>Bangga Menjadi Generasi Penerus Bangsa</b></h1> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div>slide 2</div>
            <div>slide 3</div>
        </div>
        <!-- ======= About Us Section ======= -->
        <section id="about-us" class="about-us">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Visi Tata Nilai</strong></h2>
                </div>

                <div class="row content">
                    <div class="col-lg-6" data-aos="fade-right">
                        <h2>Visi</h2>
                        <h3>Terwujudkan Masyarakat Kota Bontang Lebih Sehat, Hebat, dan Beradab</h3>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
                        {{-- <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum
                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                consequa</li>
                            <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate
                                velit</li>
                            <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in</li>
                        </ul>
                        <p class="font-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore
                            magna aliqua.
                        </p> --}}
                        <h2>Tata Nilai</h2>
                        <h3>I CARE “Integritas, Collaboratif, Activ dan Inovatif, Respek, Empati”</h3>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Layanan</strong></h2>
            <p>Layanan-layanan yang dapat dinikmati pengunjung website</p>
          </div>

          <div class="row">
            <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box iconbox-blue">
                <div class="icon">
                  <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                    <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                  </svg>
                  <i class="bx bx-book"></i>
                </div>
                <h4><a href="">Pojok Baca (Comming Soon)</a></h4>
                <p>Unduh dokumen pelajaran dengan mudah</p>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon-box iconbox-orange ">
                <div class="icon">
                  <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                    <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                  </svg>
                  <i class="bx bx-stats"></i>
                </div>
                <h4><a href="">Grafik Kesehatan (Comming Soon)</a></h4>
                <p>Menampilkan Grafik Kesehata Anak</p>
              </div>
            </div>

          </div>

        </div>
      </section><!-- End Services Section -->

      <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

          <div class="section-title" data-aos="fade-up">
            <h2>Pojok Baca (Comming Soon)</h2>
          </div>

          <div class="row" data-aos="fade-up">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">Semua</li>
                <li data-filter=".filter-card">Kesehatan</li>
              </ul>
            </div>
          </div>

          <div class="row portfolio-container" data-aos="fade-up">



          </div>

        </div>
      </section><!-- End Portfolio Section -->

    </div>

    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-6 footer-contact">
                        <h3>GHOSTING</h3>
                        <p>
                            Indonesia<br>
                            Kalimantan Timur<br>
                            Bontang<br>
                        </p>
                    </div>

                    <div class="col-lg-6 col-md-6 footer-links">
                        <h4>Kontak</h4>
                        <p>
                            <strong>Telp:</strong> 085300000000<br>
                            <strong>Email:</strong> ghosting@example.com<br>
                        </p>
                    </div>

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="mr-md-auto text-center text-md-left">
                <div class="copyright">
                    Copyright &copy;2022 <strong><span>GHOSTING</span></strong>
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/company-free-html-bootstrap-template/ -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-whatsapp"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->
    <!-- JavaScript files-->
    <script src="{{asset('template/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('template/js/grasp_mobile_progress_circle-1.0.0.min.js')}}"></script>
    <script src="{{asset('template/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>

    <script src="{{asset('template/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('template/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}">
    </script>
    <script src="{{asset('template/vendor/slick/slick.js')}}"></script>
    <script src="{{asset('template/vendor/aos/aos.js')}}"></script>
    <!-- Notifications-->
    <script src="{{asset('template/vendor/messenger-hubspot/build/js/messenger.min.js')}}"> </script>
    <script src="{{asset('template/vendor/messenger-hubspot/build/js/messenger-theme-flat.js')}}"> </script>
    <!-- Main File-->
    @yield('script')
    <script src="{{asset('template/js/front.js')}}"></script>
    <script src="{{asset('template/js/main.js')}}"></script>
    @yield('custom-script')
    <script type="text/javascript">
        $(document).ready(function () {
            $('.single-item').slick({
                arrows: false
            });

        })

    </script>
</body>

</html>
