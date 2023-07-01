<?php
// mengkoneksikan ke database
require 'function.php';

// saat belum login, maka tidak bisa mengakses ke halaman utama/index.html
require 'ceklogin.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Impact Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Impact
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="adnan.bachtiar@students.paramadina.ac.id">adnan.bachtiar@students.paramadina.ac.id</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>081289148054</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="https://twitter.com/NuurAdnan" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://web.facebook.com/adnan.n.bachtiar.9/" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/adnan_nuur_bachtiar06/" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://github.com/AdnanNBachtiar" class="bi-github"><i class="github"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar -->
  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1><img src="assets/img/anb.png" alt="ANB"><span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#call-to-action">My Favorit Music</a></li>
          <li><a href="#portfolio">My Album</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Welcome to <span>My website</span></h2>
          <p>Memperkenalkan Kemampuan saya di bidang Teknik Informatika</p>
          <p> Adnan Nuur Bachtiar </p>
          <p>121203003</p>
        </div>
        <div class="col-lg-4 order-1 order-lg-2">
          <img src="assets/img/hero-img.svg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

          <div class="col-xl-4 col-md-3" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class=""></i></div>
              <h4 class="title"><a href="#about" class="stretched-link">About</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-4 col-md-3" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class=""></i></div>
              <h4 class="title"><a href="#call-to-action" class="stretched-link">My Favorit Music</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-4 col-md-3" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class=""></i></div>
              <h4 class="title"><a href="#portofolio1" class="stretched-link">My Album</a></h4>
            </div>
          </div><!--End Icon Box -->
        </div><!--End Icon Box -->


      </div>
    </div>
    </div>

    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>About</h2>
          <p>My Profil</p>
        </div>

        <div class="">

          <div class="flex dropup-center" data-aos="fade-up" data-aos-delay="100">
            <div class="member text-center">
              <img src="assets/img/team/team-7.jpg" class="img-fluid" alt="" style="width: 350px;">
              <h4>Adnan Nuur Bachtiar</h4>
              <span>Web Development</span>
              <div class="social">
                <a href="https://twitter.com/NuurAdnan"><i class="bi bi-twitter"></i></a>
                <a href="https://web.facebook.com/adnan.n.bachtiar.9/"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/adnan_nuur_bachtiar06/"><i class="bi bi-instagram"></i></a>
                <a href="https://github.com/AdnanNBachtiar"><i class="bi bi-github"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
      <div class="section-header">
        <h2>My Favorit Music</h2>
      </div>
      <div class="container text-center" data-aos="">
        <a href="https://www.youtube.com/watch?v=7FF3MH4_eUY" class="glightbox play-btn"></a>
        <h3>Nadin Amizah</h3>
        <p> Paman Tua</p>
      </div>
    </section><!-- End Call To Action Section -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>My Album</h2>
          <p>Semua Kenangan Yang diperoleh Oleh Kamera Jadul Saya</p>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

          <div>
            <ul class="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-2023">2023</li>
              <li data-filter=".filter-2022">2022</li>
              <li data-filter=".filter-2021">2021</li>
              <li data-filter=".filter-2020">2020</li>
            </ul><!-- End Portfolio Filters -->
          </div>

          <div class="row gy-4 portfolio-container">

            <div class="col-xl-4 col-md-6 portfolio-item filter-2023">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/2023-1.jpg" id="portofolio1" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/2023-1.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="blog-details-2023-1.php" title="More Details">Langit Jakarta</a></h4>
                  <p>Suasanan Jalanan Tebet, Jakarta Selatan</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-2020">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/2020-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/2020-1.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="blog-details-2023-1.php" title="More Details">Penyemprotan Disinfektan</a></h4>
                  <p>Dilakukan Oleh PMI Kota Jakarta Utara</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-2021">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/2021-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/2021-1.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="blog-details-2023-1.php" title="More Details">Suset Pinggir Sawah</a></h4>
                  <p>Pemandangan Mentari terbenam</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-2022">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/2022-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/2022-1.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="blog-details-2023-1.php" title="More Details">Sunrise Jakarta</a></h4>
                  <p>Pemandangan langit jakarta di pagi hari</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-2020">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/2020-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/2020-2.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="blog-details-2023-1.php" title="More Details">Pelabuhan</a></h4>
                  <p>Penampakan parkir pelabuhan Tanjung Priok</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-2021">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/2021-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/2021-2.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="blog-details-2023-1.php" title="More Details">Bunga Jari 5</a></h4>
                  <p>Bunga Berwarna merah muda terkena embun pagi</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-2022">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/2022-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/2022-2.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="blog-details-2023-1.php" title="More Details">Pinggir Jalan Tol</a></h4>
                  <p>Halte Busway Stasiun Jatinegara</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-2023">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/2023-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/2023-2.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="blog-details-2023-1.php" title="More Details">Awan Mendung</a></h4>
                  <p>Suasanan Mendung di Langit Jakarta</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-2022">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/2022-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/2022-3.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="blog-details-2023-1.php" title="More Details">Awan Mendung Tanjung Priok</a></h4>
                  <p>Suasanan Langit Mendung Jakarta</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-2021">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/2021-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/2021-3.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="blog-details-2023-1.php" title="More Details">Pemandangan Langit Dieng</a></h4>
                  <p>Bukit Sikunir, Dieng, Jawa Tengah</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-2020">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/2020-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/2020-3.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="blog-details-2023-1.php" title="More Details">Air dan Alam</a></h4>
                  <p>Air Terjun Curug Sumba</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-2023">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/2023-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/2023-3.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="blog-details-2023-1.php" title="More Details">Mencari Nafkah</a></h4>
                  <p>Perjuangan seorang ayah mencari nafkah</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->
        </div>

      </div>
    </section><!-- End Portfolio Section -->



  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>ANB</span>
          </a>
          <p>Ikuti sosial media saya untuk mendapatkan informasi terupdate mengenai saya</p>
          <div class="social-links d-flex mt-4">
            <a href="https://twitter.com/NuurAdnan" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="https://www.instagram.com/adnan_nuur_bachtiar06/" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://web.facebook.com/adnan.n.bachtiar.9/" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="https://github.com/AdnanNBachtiar" class="gihub"><i class="bi bi-github"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">

        </div>


        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            <strong>Phone:</strong>081289148054<br>
            <strong>Email:</strong>adnan.bachtiar@students.paramadina.ac.id<br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>ANB</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>