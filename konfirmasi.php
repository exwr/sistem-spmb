<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Konfirmasi Pendaftaran - SPMB 2023 | Universitas ALETA</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/logo/logo.png" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

   <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <style>
        .confirmation {
            text-align: center;
        }

        .confirmation h2 {
            margin-top: 30px;
        }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="logo">
                <a href="index.php">
                    <img src="assets/img/logo/logo.png" alt="" class="img-fluid">
                    <h1 class="text-light"><span>SPMB 2023</span></h1>
                </a>
            </div>
        </div>
    </header><!-- End Header -->

    <main id="main">
        <!-- ======= Confirmation Section ======= -->
        <section class="confirmation" data-aos="fade-up" data-aos-easing="ease-in-out">
            <div class="container">
                <h2>Konfirmasi Pendaftaran</h2>
                <p>Terima kasih, pendaftaran Anda telah berhasil disimpan dalam database kami.</p>
                <p>Silakan tunggu informasi lebih lanjut melalui email yang telah Anda berikan.</p>
                <p>Mengarah ke halaman login dalam <span id="countdown">5</span> detik...</p>
            </div>
        </section>
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Universitas ALETA</span>. All Rights Reserved
            </div>
            <div class="credits">
                Dikelola Oleh Tim IT <a href="index.php">Universitas ALETA</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/js/main.js"></script>

    <!-- Redirect Home Script -->
    <script>
        function redirectToHomepage(seconds) {
            var countdown = document.getElementById("countdown");
            var counter = seconds;

            var countdownInterval = setInterval(function () {
                countdown.innerHTML = counter;
                counter--;

                if (counter < 0) {
                    clearInterval(countdownInterval);
                    window.location.href = "login.php";
                }
            }, 1000);
        }

        redirectToHomepage(5); // Mengalihkan ke halaman utama dalam 5 detik
    </script>
</body>

</html>
