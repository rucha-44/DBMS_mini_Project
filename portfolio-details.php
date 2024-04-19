<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio Details - Squadfree Bootstrap Template</title>
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

  <!-- =======================================================
  * Template Name: Squadfree
  * Template URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between position-relative">

      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>Squadfree</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About Us</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Projects</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li class="ViewCalendar"><a class="nav-link scrollto" href="index1.html"><span>View Calendar</span> </a></li>
          <li><a class="nav-link scrollto" href="#" id="loginButton">Login</a></li>

          <script>
            document.getElementById("loginButton").addEventListener("click", function(event) {
                event.preventDefault(); // Prevent the default action of the link
                
                // Perform your desired action here, such as displaying a login modal or navigating to a login section on the page
                
                // For example, if you want to scroll to a specific section with the ID "login", you can use the following code:
                var loginSection = document.getElementById("login");
                loginSection.scrollIntoView({ behavior: 'smooth' }); // Smooth scroll to the login section
            });
            </script>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Portfolio Details</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li><a href="portfolio.html">Event</a></li>
            <li>Project Details</li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/catalyse-1.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/catalyse-2.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/catalyse-3.jpg" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>: Outdoor</li>
                <li><strong>NGO</strong>: NGO's in Pune</li>
                <li><strong>Project date</strong>: 01 March, 2020</li>
                <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>This is event was held by Catalyse Volunteers</h2>
              <p>
                Bhumi's Catalyse Program aims for  Every Indian Volunteering. It involves volunteering for causes like environment, animal welfare, community welfare, and more. The volunteering activities are all aligned with the UN's Sustainable Development Goals.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>Bhumi NGO</h3>
              <!--<p class="pb-3"><em>Qui repudiandae et eum dolores alias sed ea. Qui suscipit veniam excepturi quod.</em></p>-->
              <p>
                Pune, Maharashtra <br>
               <br><br>
                <strong>Phone:</strong> 87544-13255<br>
                <strong>Email:</strong> contact@bhumi.ngo<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/bhumi.pune/?hl=en" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://bhumi.ngo/blog/tag/pune/" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="https://www.linkedin.com/showcase/bhumi-pune/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div id = "login" class="col-lg-4 col-md-6 footer-login">
            <h4>Login</h4>
            <p>Change Tomorrow. One Step At A Time.</p>
            <button class="btnLogin-popup">Login</button>
              <div class="wrapper">
                <span class="icon-close">
                    <i class="fa-solid fa-xmark"></i>
                </span>
                <div class="form-box login">
                    <h2>Login</h2>
                    <form method="post">
        
                        <div class="input-box">
                            <span class="icon">
                                <i class="fa-solid fa-envelope"></i>
                            </span>
                            <input type="email" name="email" required>
                            <label>Email</label>
                        </div>
                        <div class="input-box">
                            <span class="icon">
                                <i class="fa-solid fa-lock"></i>
                            </span>
                            <input type="password" name="password" required>
                            <label>Password</label>
                        </div>
                        <div class="remember-forgot">
                            <label><input type="checkbox">Remember me</label>
                            <a href="#">Forgot password?</a>
                        </div>
                        <button type="submit" class="btn" name="Login">Login</button>
                        <div class="login-register">
                            <p>Don't have an account? <a href="#" class="register-link">Register</a></p>
                        </div>
        
                    </form>
        
                </div>
                <div class="form-box register">
                    <h2>Registration</h2>
                    <form method="post" >
                        <div class="input-box">
                            <span class="icon">
                                <i class="fa-solid fa-user"></i>
                            </span>
                            <input type="email" name="emailr" required>
                            <label>Email</label>
                        </div>
                        <div class="input-box">
                            <span class="icon">
                                <i class="fa-solid fa-lock"></i>
                            </span>
                            <input type="password" name="pass" required>
                            <label>Password</label>
                        </div>
                        <div class="remember-forgot">
                            <label><input type="checkbox">I agree to the terms and conditions</label>
                            
                        </div>
                        <button type="submit" class="btn" name="Register">Register</button>
                        <div class="login-register">
                            <p>Already have an account? <a href="#" class="login-link">Login</a></p>
                        </div>
        
                    </form>
        
                </div>
              </div>
            </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Bhumi NGO</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/ -->
        Designed by Cummins Student
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/a66bd0766f.js" crossorigin="anonymous"></script>

</body>

</html>

<?php
include "connection.php";

if(isset($_POST['Login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM login WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) == 1) {
        echo "<script>alert('Login Successful!');</script>";
    } else {
        echo "<script>alert('Login Failed');</script>";
    }
}

if(isset($_POST['Register'])) {
  $emailr = $_POST['emailr'];
  $passwordr = $_POST['pass'];

  // Remove single quotes around column names and fix the table name
  $query1 = "INSERT INTO login (email, password) VALUES ('$emailr','$passwordr')";
  $res = mysqli_query($conn, $query1);
  if($res) {
      echo "<script>alert('Inserted Successfully....');</script>";
  } else {
      echo "<script>alert('Failed....');</script>";
  }
}


?>
