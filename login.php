<?php
session_start();

// Cek apakah user sudah login, jika sudah redirect ke dashboard
if (isset($_SESSION['id'])) {
    header("Location: dashboard.php");
    exit();
}

// Menangani pesan error
if (isset($_GET['error'])) {
    if ($_GET['error'] == 1) {
        $error_message = "Username atau password salah.";
    } elseif ($_GET['error'] == 'username_not_found') {
        $error_message = "Username tidak ditemukan.";
    }
}

// Memproses form login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once('function/proses_login.php');
}
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

    <!-- Fontawesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <style>
        body {
            background-image: url('assets/img/hero-bg.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .message-box {
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            color: #721c24;
            padding: auto;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .message-box p {
            text-align: center;
            margin-top: 15px;
        }

        .login-form {
            margin-top: 50px;
        }

        .login-form-container {
            margin-top: 50px;
            padding: 30px;
            background-color: rgba(255, 255, 255, 0.6);
            border: 1px solid #ccc;
            border-radius: 10px;
            width: 80%;
            margin-left: auto;
            margin-right: auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
        }

        .input-group {
            position: relative;
        }

        .input-group-prepend {
            margin-right: -1px;
        }

        .input-group-prepend .input-group-text {
            background-color: #fff;
            border: 1px solid #ced4da;
        }

        .input-group-prepend .input-group-text i {
            color: #007bff;
        }

        .btn-primary.text-center {
            display: block;
            margin: auto;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .toggle-password {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }

        .bi-eye-fill {
            color: #007bff;
        }

        .bi-eye-slash-fill {
            color: #dc3545;
        }
    </style>
</head>

<body>
    <header id="header" class="fixed-top d-flex align-items-center">
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
                    <li><a href="register.php">Register</a></li>
                    <li><a class="active" href="login.php">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>
    <main id="main">
        <section class="login-form animate__animated animate__fadeIn">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <?php
                        if (isset($error_message)) {
                            echo '<div class="message-box">';
                            echo '<p>' . $error_message . '</p>';
                            echo '</div>';
                        }
                        ?>
                        <div class="message-box">
                            <p>Login to Your Account</p>
                        </div>
                        <div class="login-form-container">
                            <form method="POST">
                                <div class="form-group input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="bi bi-person"></i>
                                        </div>
                                    </div>
                                    <input type="text" id="username" name="username" placeholder="Username" class="form-control" required>
                                </div>
                                <div class="form-group input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="bi bi-lock"></i>
                                        </div>
                                    </div>
                                    <input type="password" id="password" name="password" placeholder="Password" class="form-control" required>
                                    <span class="toggle-password" onclick="togglePasswordVisibility()">
                                        <!-- Ganti kelas ikon mata sesuai dengan Bootstrap Icons yang kamu gunakan -->
                                        <i class="bi bi-eye"></i>
                                    </span>
                                </div>
                                <button type="submit" class="btn btn-primary text-center col-md-6">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

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
    <script>
        function togglePasswordVisibility() {
            const passwordField = document.getElementById('password');
            const icon = document.querySelector('.toggle-password i');

            if (passwordField && icon) {
                if (passwordField.type === 'password') {
                    passwordField.type = 'text';
                    icon.classList.remove('bi-eye');
                    icon.classList.add('bi-eye-slash');
                } else {
                    passwordField.type = 'password';
                    icon.classList.remove('bi-eye-slash');
                    icon.classList.add('bi-eye');
                }
            }
        }
    </script>
</body>

</html>