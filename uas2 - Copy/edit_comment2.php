<?php

include_once('config.php');
if (!isset($_GET['id'])) {
  header('Location: blog-details-2023-1.php');
}
$id = $_GET['id'];

$sql = "SELECT * FROM coment WHERE id=$id";
$query = mysqli_query($db, $sql);
$netijen = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1) {
  die("Data tidak ditemukan");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
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
  </section>
  <!-- End Top Bar -->

  <!-- Header -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <h1><img src="assets/img/anb.png" alt="ANB"><span>.</span></h1>
      </a>
      <!-- .navbar -->
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="index.php #About">About</a></li>
          <li><a href="#call-to-action">My Favorit Music</a></li>
          <li><a href="index.php">My Album</a></li>
          <li><a href="index.php">My Friends</a></li>
          <li><a href="index.php">Contact</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav>
      <!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    </div>
  </header>
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Langit Jakarta</h2>
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
            <div class="row justify-content-between gy-4 mt-4 footer">
              <div class="reply-form">
                <h4>Edit Komentar</h4>
                <p></p>
                <form method="POST" action="proses_edit.php" class="form">
                  <fieldset>

                    <!-- ======= Memanggil id coment dengan type Hidden ======= -->
                    <div class="row">
                      <div class="col-md-6 form-group">
                        <input type="hidden" name="id" id="id" value="<?php echo $netijen['id'] ?>"> <br>
                      </div>
                    </div>

                    <!-- ======= Memanggil Nama dari database coment  ======= -->
                    <div class="row">
                      <div class="col-md-6 form-group">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Nama" value="<?php echo $netijen['name'] ?>"> <br>
                      </div>
                    </div>

                    <!-- ======= Memanggil Email dari database coment  ======= -->
                    <div class="col-md-6 form-group">
                      <label for="editCommentEmail" class="form-label">Email</label>
                      <input type="text" class="form-control" id="email" name="email" value="<?php echo $netijen['email'] ?>">
                    </div>
              </div>

              <!-- ======= Memanggil Message dari database coment  ======= -->
              <div class="row">
                <div class="col form-group">
                  <label for="editCommentMessage" class="form-label">Comment</label>
                  <textarea class="form-control" id="message" name="message"> <?php echo $netijen['message']; ?> </textarea> <br>
                </div>
              </div>

              <!-- ======= Tombol Mengupdate Komentar  ======= -->
              <input type="submit" class="btn btn-primary" name="coment" value="Update"></input>
              </fieldset>
              </form>
            </div>
          </div>
        </div>
        <!-- End Blog Sidebar -->

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

  <!-- Tombol Kembali ke atas -->
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