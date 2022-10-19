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


  <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">
      
              <div class="section-title">
                <h2>About</h2>
                <p>Hi, I'm Toti I'm an ambitious student who likes UI/UX design and Web Programming</p>
              </div>
              <?php    
                    include "fungsi.php";

                    if (!koneksi()){
                        die("koneksi error");
                    }

                    $querySQL = "SELECT * FROM about";
                    $execQuerySQL = mysqli_query(koneksi(),$querySQL);

                    if (mysqli_num_rows($execQuerySQL) > 0){
                        while($row = mysqli_fetch_assoc($execQuerySQL)){
                    ?>  
                      <h5  style="margin-bottom: 100px;">,
                      <div class="portfolio-wrap">                       
                          
              <div class="row">

                <div class="col-lg-4" data-aos="fade-right">
                  <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                  <h3>UI/UX Designer &amp; Web Developer.</h3>
                  <p class="fst-italic">
                  I am someone who hopes to help the problems that are around me with my existing abilities
                  </p>
                  <div class="row">
                    <div class="col-lg-6">
                      <ul>
                        <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span><?= $row['birthday'] ?></span></li>
                        <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span><?= $row['phone'] ?></span></li>
                        <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span><?= $row['city'] ?></span></li>
                      </ul>
                    </div>
                    <div class="col-lg-6">
                      <ul>
                        <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span><?= $row['age'] ?></span></li>
                        <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><?= $row['email'] ?></span></li>
                        <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span><?= $row['freelace'] ?></span></li>
                      </ul>
                      <?php
                        }
                      }
                      ?>
                    </div>
                  </div>
                </div>
              </div>
      
            </div>
          </section><!-- End About Section -->
              <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
        <div class="container">
  
          <div class="section-title">
            <h2>Skills</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
          </div>
  
          <div class="row skills-content">
  
            <div class="col-lg-6" data-aos="fade-up">
  
              <div class="progress">
                <span class="skill">HTML <i class="val">80%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
  
              <div class="progress">
                <span class="skill">CSS <i class="val">65%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
  
              <div class="progress">
                <span class="skill">PHP <i class="val">40%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
  
            </div>
  
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
  
              <div class="progress">
                <span class="skill">C++ <i class="val">80%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
  
              <div class="progress">
                <span class="skill">Python<i class="val">60%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
  
              <div class="progress">
                <span class="skill">Figma <i class="val">75%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
  
            </div>
  
          </div>
  
        </div>
      </section><!-- End Skills Section -->

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