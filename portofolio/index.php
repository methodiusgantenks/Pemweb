<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>iPortfolio Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/hero-bg.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.php">Methodius Antonio Bernhard Wago</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="https://twitter.com/Method_accessor" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.facebook.com/methodius.toti14" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com/mthdstoti/" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="https://github.com/methodiusgantenks/" class="github"><i class="bx bxl-github"></i></a>
        </div>
      </div>

<?php
require_once"navbar.php";
include "koneksi.php";
?>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
  <?php    
                    include "fungsi.php";

                    if (!koneksi()){
                        die("koneksi error");
                    }

                    $querySQL = "SELECT * FROM indexx";
                    $execQuerySQL = mysqli_query(koneksi(),$querySQL);

                    if (mysqli_num_rows($execQuerySQL) > 0){
                        while($row = mysqli_fetch_assoc($execQuerySQL)){
                    ?>  

    <div class="hero-container" data-aos="fade-in">
      <h1><?= $row['nama1'] ?></h1>
      <h1> <?= $row['nama2'] ?></h1>
      <p>I'm <span class="typed" data-typed-items="<?= $row['pekerjaan'] ?>"></span></p>
    </div>
    <?php
                        }
                      }
                      ?>
  </section><!-- End Hero -->

  <main id="main">

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="credits">

        Designed by <a>Methodius Antonio Bernhard Wago</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>