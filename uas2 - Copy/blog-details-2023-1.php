<?php

// mengakses database
include('config.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <script>
    $(document).ready(function() {
      // Saat dokumen siap, tambahkan event click pada tombol edit
      $('a[data-bs-toggle="modal"]').click(function() {
        var id = $(this).data('id'); // Ambil nilai ID dari atribut data-id
        $('#id').val(id); // Set nilai ID pada input hidden di dalam modal
        $('#editCommentModal').modal('show'); // Tampilkan modal saat tombol edit diklik
      });
    });
  </script>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Tugas UAS</title>
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
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">

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

<style>
  .swiper-slide {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .swiper-slide img {
    max-width: 70%;
    max-height: 100%;
    object-fit: cover;
  }

  .content p {
    text-indent: 2em;
    text-align: justify;
  }

  .comment-box {
    border: 1px solid #ccc;
    padding: 10px;
    margin-bottom: 10px;
  }

  .comment-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .delete-button {
    margin-left: auto;
  }
</style>

<body>
  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">adnan.bachtiar@students.paramadina.ac.id</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>081289148054</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="https://twitter.com/NuurAdnan"><i class="bi bi-twitter"></i></a>
        <a href="https://web.facebook.com/adnan.n.bachtiar.9/"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/adnan_nuur_bachtiar06/"><i class="bi bi-instagram"></i></a>
        <a href="https://github.com/AdnanNBachtiar"><i class="bi bi-github"></i></a>
      </div>
    </div>
  </section><!-- End Top Bar -->

  <!-- Header -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <h1><img src="assets/img/anb.png" alt="ANB"><span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="index.php#about">About</a></li>
          <li><a href="index.php#call-to-action">My Favorit Music</a></li>
          <li><a href="index.php#portfolio">My Album</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav><!-- .navbar -->
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    </div>
  </header>
  <!-- End Header -->

  <!-- ======= MAIN ======= -->
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>My Album</h2>
              <p>Semua hasil jepretan dari tangan berkerutku. Tangan berkerut yang sanggup menghasilkan suatu hasil yang sangat memuaskan dan sangat bisa dinikmati</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Foto Detail</li>
          </ol>
        </div>
      </nav>
    </div>
    <!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
        <div class="row g-5">
          <div class="col-lg-20">

            <!-- ======= Artikel Pada Blog ======= -->
            <article class="blog-details">

              <!-- ======= Slide Bar Foto ======= -->
              <div class="post-img">
                <!-- ======= Swiper slide 1 ======= -->
                <div class="swiper-container">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <img src="assets/img/portfolio/2023-1.jpg" alt="" class="img-fluid">
                      <div class="swiper-navigation">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                      </div>
                    </div>

                    <!-- ======= Swiper slide 2 ======= -->
                    <div class="swiper-slide">
                      <img src="assets/img/portfolio/2023-2.jpg" alt="" class="img-fluid">
                      <div class="swiper-navigation">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                      </div>
                    </div>

                    <!-- ======= Swiper slide 3 ======= -->
                    <div class="swiper-slide">
                      <img src="assets/img/portfolio/2023-3.jpg" alt="" class="img-fluid">
                      <div class="swiper-navigation">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                      </div>
                    </div>

                    <!-- ======= Swiper slide 4 ======= -->
                    <div class="swiper-slide">
                      <img src="assets/img/portfolio/2022-1.jpg" alt="" class="img-fluid">
                      <div class="swiper-navigation">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                      </div>
                    </div>

                    <!-- ======= Swiper slide 5 ======= -->
                    <div class="swiper-slide">
                      <img src="assets/img/portfolio/2022-2.jpg" alt="" class="img-fluid">
                      <div class="swiper-navigation">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                      </div>
                    </div>

                    <!-- ======= Swiper slide 6 ======= -->
                    <div class="swiper-slide">
                      <img src="assets/img/portfolio/2022-3.jpg" alt="" class="img-fluid">
                      <div class="swiper-navigation">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                      </div>
                    </div>

                    <!-- ======= Swiper slide 7 ======= -->
                    <div class="swiper-slide">
                      <img src="assets/img/portfolio/2021-1.jpg" alt="" class="img-fluid">
                      <div class="swiper-navigation">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                      </div>
                    </div>

                    <!-- ======= Swiper slide 8 ======= -->
                    <div class="swiper-slide">
                      <img src="assets/img/portfolio/2021-2.jpg" alt="" class="img-fluid">
                      <div class="swiper-navigation">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                      </div>
                    </div>

                    <!-- ======= Swiper slide 9 ======= -->
                    <div class="swiper-slide">
                      <img src="assets/img/portfolio/2021-3.jpg" alt="" class="img-fluid">
                      <div class="swiper-navigation">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                      </div>
                    </div>

                    <!-- ======= Swiper slide 10 ======= -->
                    <div class="swiper-slide">
                      <img src="assets/img/portfolio/2020-1.jpg" alt="" class="img-fluid">
                      <div class="swiper-navigation">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                      </div>
                    </div>

                    <!-- ======= Swiper slide 11 ======= -->
                    <div class="swiper-slide">
                      <img src="assets/img/portfolio/2020-2.jpg" alt="" class="img-fluid">
                      <div class="swiper-navigation">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                      </div>
                    </div>

                    <!-- ======= Swiper slide 12 ======= -->
                    <div class="swiper-slide">
                      <img src="assets/img/portfolio/2020-3.jpg" alt="" class="img-fluid">
                      <div class="swiper-navigation">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper"></div>
                </div>
              </div>
              <!-- end Blog -->


              <!-- Judul Berita -->
              <h2 class="title">Hasil Karya</h2>

              <!-- End meta top -->
              <div class="content">
                <p>
                  Saya sangat bangga dengan hasil karya foto yang saya ambil sendiri menggunakan kamera mirroless. Setiap momen yang tertangkap dalam bidikan saya menghasilkan gambar-gambar yang menakjubkan dan memikat. Proses yang saya lalui dalam menciptakan setiap foto ini merupakan pengalaman yang luar biasa, di mana saya dapat menggali kreativitas dan mengabadikan keindahan dunia sekitar. </p>
                <p>Melalui penggunaan kamera mirroless, saya telah berhasil mengeksplorasi berbagai komposisi, memanfaatkan cahaya yang tepat, dan menangkap detail-detail yang menawan. Setiap foto mengandung cerita uniknya sendiri, dan saya merasa puas dapat berbagi momen berharga melalui hasil karya saya.</p>
                <p>Saya meyakini bahwa fotografi adalah seni yang membutuhkan pemahaman mendalam tentang subjek, kemampuan teknis, dan indera estetika. Dengan kamera mirroless, saya dapat mengekspresikan kreativitas saya dengan lebih bebas dan mendapatkan hasil yang memuaskan. </p>
                <p> Keberhasilan ini tidak hanya membanggakan saya secara pribadi, tetapi juga menjadi pengingat bahwa setiap upaya dan dedikasi yang saya tanamkan dalam fotografi telah berbuah manis. Saya berharap dapat terus mengasah keterampilan fotografi saya dan terus mengeksplorasi dunia visual dengan kamera mirroless, sehingga dapat menghasilkan karya-karya yang semakin menginspirasi dan memukau. </p>
              </div><!-- End post content -->
            </article>
            <!-- End blog post -->

            <!-- Kirim Komentar -->
            <div class="row justify-content-between gy-4 mt-4 footer">
              <div class="reply-form">
                <h2>Komentar Anda</h2>
                <p> Masukan Anda membantu mengembangkan karya saya</p>
                <form method="POST" action="proses_komentar.php" class="form">
                  <fieldset>
                    <div class="row">

                      <!-- Input *Nama -->
                      <div class="col-md-6 form-group">
                        <input name="name" type="text" class="form-control" placeholder="Your Name*"> <br>
                      </div>

                      <!-- Input *Email -->
                      <div class="col-md-6 form-group">
                        <input name="email" type="text" class="form-control" placeholder="Your Email*">
                      </div>
                    </div>
                    <div class="row">

                      <!-- Input *Comment -->
                      <div class="col form-group">
                        <textarea name="message" class="form-control" placeholder="Your Comment*"></textarea> <br>
                      </div>
                    </div>

                    <!-- Button Submit -->
                    <input type="submit" class="btn btn-primary" name="coment" value="simpan komentar"></input>
                  </fieldset>
                </form>
              </div>
            </div>
          </div>
          <!-- End Blog Sidebar -->

          <!-- Hasil Komentar -->
          <div class="post-author d-flex align-items-center">
            <div>

              <!-- Mengambil dan Menampilkan hasil komentar dari database -->
              <?php

              // Ambil isi database dari database coment
              $sql = "SELECT * FROM coment";
              $query = mysqli_query($db, $sql);
              echo '<h6>Komentar</h6>';
              while ($netijen = mysqli_fetch_array($query)) {
                echo '<div class="comment-box">';
                echo '<div class="comment-header">';

                // Menampilkan Nama Komentar dari database coment
                echo '<div id="nama"> <h3>' . $netijen['name'] . '</h3> </div>';

                // Tombol Delete melalui id coment
                echo '<div class="delete-button"><a href="delete.php?id=' . $netijen['id'] . '">delete</a></div>';
                echo '</div>';

                // Menampilkan Email Komentar dari database coment
                echo '<div> <h6><a href="mailto:' . $netijen['email'] . '?subject=Email%20Subject"> ' . $netijen['email'] . ' </a></h6> </div>';

                // Menampilkan Message Komentar dari database coment
                echo '<div> <h5>' . $netijen['message'] . ' </h5> </div>';

                // Tombol Edit untuk mengedit comentar yang sudah berada di database
                echo '<div><a href="edit_comment2.php?id=' . $netijen['id'] . '">Edit</a></div>';
                echo '</div>';
              }

              ?>

            </div>
          </div><!-- End post author -->
        </div>
      </div>
    </section>
    <!-- End Blog Details Section -->

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>ANB</span> </a>
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

  </footer>
  <!-- End Footer -->

  <!-- Tombol Kembali Ke Atas -->
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

  <!-- dari chatgpt | -->
  <!-- Vendor JS Files -->
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
    // Inisialisasi Swiper
    var swiper = new Swiper('.swiper-container', {
      autoplay: {
        delay: 5000, // Menentukan durasi antara slide
        disableOnInteraction: false // Mengaktifkan autoplay bahkan setelah pengguna melakukan interaksi
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
      }
    });
  </script>
  <!-- dari chatgpt | -->

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>