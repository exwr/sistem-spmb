<?php
require_once('function/connection.php');
?>

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
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <style>
    .contact {
      text-align: center;
    }

    label {
      margin-bottom: 10px;
    } 

    .info-box, .form {
      margin: auto;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      padding: 20px;
    }

    .form-group {
      margin-bottom: 15px;
      text-align: left;
    }

    .form-label {
      font-weight: bold;
    }

    .btn {
      margin-top: 20px;
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex justify-content-between align-items-center">

    <div class="logo">
        <a href="index.php">
          <img src="assets/img/logo/logo.png" alt="" class="img-fluid">
          <h1 class="text-light"><span>SPMB 2023</span></h1>
        </a>
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
          <li><a class="active" href="register.php">Register</a></li>
          <li><a href="login.php">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">
    <!-- ======= Register Section ======= -->
    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out">
      <div class="container">
        <!-- Register Form -->
        <div class="info-box mt-3">
          <h2>Pendaftaran Mahasiswa Baru</h2>
          <p>Informasi mengenai proses pendaftaran mahasiswa baru dapat ditemukan di sini. Silakan lengkapi formulir di bawah untuk mendaftar ke program studi kami.</p>
        </div>
        <div class="form">
          <h2 class="text-center mt-3">Form Registrasi</h2>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-6">
              <form action="function/proses_pendaftaran.php" method="post">
  <!-- NIK -->
  <div class="form-group">
    <input type="text" name="nik" id="nik" placeholder="NIK" class="form-control" required>
  </div>

  <!-- No KK -->
  <div class="form-group">
    <input type="text" name="no_kk" id="no_kk" placeholder="Nomor KK" class="form-control" required>
  </div>

  <!-- Nama -->
  <div class="form-group">
    <input type="text" name="nama" id="nama" placeholder="Nama Lengkap" class="form-control" required>
  </div>

  <!-- Jenis Kelamin -->
  <div class="form-group">
    <select name="gender" id="gender" class="form-control" required>
      <option value="">- Pilih Jenis Kelamin -</option>
      <option value="Laki-laki">Laki-laki</option>
      <option value="Perempuan">Perempuan</option>
    </select>
  </div>

  <!-- Tempat Lahir -->
  <div class="form-group">
    <input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" class="form-control" required>
  </div>

  <!-- Tanggal Lahir -->
  <div class="form-group">
    <label for="tanggal_lahir">Tanggal Lahir:</label>
    <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" required>
  </div>

  <!-- Nomor HP -->
  <div class="form-group">
    <input type="text" name="no_hp" id="no_hp" placeholder="Nomor HP" class="form-control" required>
  </div>

  <!-- Email -->
  <div class="form-group">
    <input type="email" name="email" id="email" placeholder="Email" class="form-control" required>
  </div>

  <!-- Alamat -->
  <div class="form-group">
    <textarea name="alamat" id="alamat" placeholder="Alamat" class="form-control" required></textarea>
  </div>

  <!-- Provinsi -->
  <div class="form-group">
    <select name="provinsi" id="select2-provinsi" class="form-control" required></select>
  </div>

  <!-- Kabupaten/Kota -->
  <div class="form-group">
    <select name="kab_kota" id="select2-kabupaten" class="form-control" required></select>
  </div>

  <!-- Kecamatan -->
  <div class="form-group">
    <select name="kecamatan" id="select2-kecamatan" class="form-control" required></select>
  </div>

  <!-- Kelurahan -->
  <div class="form-group">
    <select name="kelurahan" id="select2-kelurahan" class="form-control" required></select>
  </div>

  <!-- RT -->
  <div class="form-group">
    <input type="text" name="no_rt" id="no_rt" placeholder="RT" class="form-control" required>
  </div>

  <!-- RW -->
  <div class="form-group">
    <input type="text" name="no_rw" id="no_rw" placeholder="RW" class="form-control" required>
  </div>

  <!-- Tombol Submit -->
  <button type="submit" class="btn btn-primary">Kirim</button>
</form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main><!-- End #main -->

  
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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/js/data.js"></script>
  <script src="assets/js/main.js"></script>

</body>

</html>