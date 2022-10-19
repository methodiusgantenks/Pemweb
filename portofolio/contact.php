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
        require "navbar.php";
        include "fungsi.php";
        if(!koneksi()) {
          die("Koneksi Error");
        }
      if (isset($_POST['submit']) ) {
          $name = $_POST['name'];
          $email = $_POST['email'];
          $subject = $_POST['subject'];
          $message   = $_POST['message'];
          $querySQL = "INSERT INTO saran (name, email, subject, message) 
          VALUES ('$name','$email', '$subject', '$message')";
          $execSQL = mysqli_query(koneksi(),$querySQL);
          }
        ?>


    </div>
  </header><!-- End Header -->
 
  <main id="main">
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Jl.Lingkar Selatan no 26, Kel Cisauk , Kec. Cisauk, Tangerang Banten</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>methodius@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+62 812 8080 3556</p>
              </div>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <!-- <form class="php-email-form" action="" method="post">
                <div class="mb-3 mt-3">
                    <label for="pengirim" class="fw-bold">Nama</label>
                    <input type="text" class="form-control" id="pengirim" placeholder="Input Nama" name="name">
                </div>
                <div class="mb-3 mt-5">
                    <label for="subject" class="fw-bold">Isi Pesan</label>
                    <input type="text" class="form-control" id="subject" placeholder="Isi Pesanmu" name="subject">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form> -->
            <form action="" method="post"  row="6">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="text-center">
                <!-- <button type="submit">Send Message</button> -->
                <input type="submit" name="submit" id="submit" class="button" value="Submit"/>
              </div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

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