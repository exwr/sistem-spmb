<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SPMB 2023 | Universitas ALETA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo/logo.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <style>
    h3, h4, h5 {
      color: #fff;
    }

    /* Added some styling for the login form */
    .login-form {
      padding: 60px 0;
    }

    .login-form h3 {
      color: #333;
      margin-bottom: 20px;
    }

    .login-form form {
      background: #fff;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      font-weight: 600;
      margin-bottom: 8px;
    }

    input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 5px;
    }

    button {
      background-color: #007bff;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover {
      background-color: #0056b3;
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="index.php"><span>SPMB 2023</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="daftar-prodi.php">Daftar Prodi</a></li>
          <li><a href="biaya-pendaftaran.php">Biaya Pendaftaran</a></li>
          <li class="dropdown"><a href="#"><span>Informasi Fakultas</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Fakultas Ilmu Komputer</a></li>
              <li><a href="#">Fakultas Ilmu Kesehatan</a></li>
              <li><a href="#">Fakultas Sains & Teknologi</a></li>
              <li><a href="#">Fakultas Hukum & Bisnis</a></li>
            </ul>
          </li>
          <li><a href="register.php">Register</a></li>
          <li><a class="active" href="login.php">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">
    <section class="login-form animate__animated animate__fadeIn">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <h3>Login to Your Account</h3>
            <form>
              <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="form-control" required>
              </div>
              <button type="submit" class="btn btn-primary">Login</button>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Daftar Prodi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Biaya Pendaftaran</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Informasi Fakultas </a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Login</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Website Fakultas</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Fakultas Ilmu Komputer</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Fakultas Ilmu Kesehatan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Fakultas Sains & Teknologi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Fakultas Hukum & Bisnis</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Jl. Slamet Riyadi, No. 18 <br>
              Surakarta, Kode Pos 57112<br>
              Jawa Tengah <br><br>
              <strong>Phone:</strong> +621234567890<br>
              <strong>Email:</strong> Universitas ALETA@ac.id<br>
            </p>

          </div>

            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Universitas ALETA</strong>. All Rights Reserved
      </div>
      <div class="credits">
        Dikelola Oleh Tim IT <a href="index.php">Universitas ALETA</a>
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
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>