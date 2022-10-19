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

  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg" data-aos="fade-up">
      <div class="container">

        <div class="section-title">
          <h2>Portfolio</h2>
        </div>

        <div class="row portfolio-container">
            
    <!--porto masuk-->
    <div class="container mt-5">
      <div class="row">
      <?php    
                    include "fungsi.php";

                    if (!koneksi()){
                        die("koneksi error");
                    }

                    $querySQL = "SELECT * FROM portofolio";
                    $execQuerySQL = mysqli_query(koneksi(),$querySQL);

                    if (mysqli_num_rows($execQuerySQL) > 0){
                        while($row = mysqli_fetch_assoc($execQuerySQL)){
                    ?>  
                      <h5  style="margin-bottom: 100px;">,
                      <div class="portfolio-wrap">                       
                          
                      </div>
                        
                  <div class="col-lg-4 portfolio-item filter-web"  >
                  <div class="card ms-5" style="width: 18rem;">
                    <img src="assets/img/portfolio/<?= $row['gambar_porto'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><?=$row['judul_porto']?></h5>
                      <a href="<?= $row['link'] ?>" class="btn btn-primary">Go Portofolio</a>
                    </div>
                  </div>
                  <?php
                              }
                              }
                              ?>
              </div>

        <div class="col-lg-6 col-md-6 portfolio-item filter-web"  >
            
        </div>
      </div>

            </div>
          </div>

          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->


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