<?php
require('function/dashboard/profile_main.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Profile | Universitas ALETA</title>
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
    <link href="plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="cropper/dist/cropper.min.css" rel="stylesheet">
    <link href="css/style.min.css" rel="stylesheet">

    <style>
        a {
            color: white;
            text-decoration: none;
        }

        a:hover {
            color: white;
        }

        .img-preview {
            max-width: 100%;
            height: 100px;
            border: 1px solid #ddd;
            margin-top: 10px;
            display: block;
        }

        button {
            margin-left: 20px;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="dashboard.php">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            <img src="assets/img/logo/logo.png" width="80px" height="80px" alt="homepage" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <!-- <span class="logo-text"> -->
                        <!-- dark Logo text -->
                        <!-- <img src="plugins/images/logo-text.png" alt="homepage" /> -->
                        <!-- </span> -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                        <!-- ============================================================== -->
                        <!-- User profile -->
                        <!-- ============================================================== -->
                        <li>
                            <a class="profile-pic" href="#">
                                <img src="uploads/avatar/<?php echo $avatar; ?>" alt="user-img" width="38px" height="36px" class="img-circle"><span class="text-white font-medium"><?php echo $nama_lengkap; ?></span></a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile-->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.php" aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="profile.php" aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Profile</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="status.php" aria-expanded="false">
                                <i class="fas fa-info-circle" aria-hidden="true"></i>
                                <span class="hide-menu">Status Pendaftaran</span>
                            </a>
                        </li>
                        <li class="text-center p-20 upgrade-btn">
                            <button class="btn d-grid btn-danger text-white" target="_blank"><a href="logout.php">
                                    Logout</a></button>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Profile page</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="#" class="fw-normal">Dashboard</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-12">
                        <div class="white-box">
                            <div class="user-bg"> <!-- <img width="100%" alt="user" src="uploads/avatar/<? //php echo $avatar; 
                                                                                                        ?>"> -->
                                <div class="overlay-box">
                                    <div class="user-content">
                                        <img src="uploads/avatar/<?php echo $avatar; ?>" class="thumb-lg img-circle" alt="img"></a>
                                        <h4 class="text-white mt-2"><?php echo $nama_lengkap; ?></h4>
                                        <h5 class="text-white mt-2"><?php echo $email; ?></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material" action="function/update_profile.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Nomor Pendaftaran</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" value="<?php echo $no_daftar;?>" class="form-control p-0 border-0" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">NIK</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" placeholder="NIK (16 Digit)" value="<?php echo $nik; ?>" class="form-control p-0 border-0" name="nik">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Nomor KK</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" placeholder="Nomor KK (16 Digit)" value="<?php echo $no_kk; ?>" class="form-control p-0 border-0" name="no_kk">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Nama Lengkap</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" placeholder="Nama Lengkap" value="<?php echo $nama_lengkap; ?>" class="form-control p-0 border-0" name="nama">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Jenis Kelamin</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <select name="gender" class="form-control">
                                                <option value="">- Pilih Jenis Kelamin -</option>
                                                <option value="Laki-laki" <?php if ($gender == 'Laki-laki') echo 'selected'; ?>>Laki-laki</option>
                                                <option value="Perempuan" <?php if ($gender == 'Perempuan') echo 'selected'; ?>>Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="col-md-12 p-0" class="col-md-12 p-0">Tempat Lahir</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" placeholder="Tempat Lahir" value="<?php echo $tempat_lahir; ?>" class="form-control p-0 border-0" name="tempat_lahir">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="col-md-12 p-0" class="col-md-12 p-0">Tanggal Lahir</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="date" value="<?php echo $tanggal_lahir; ?>" class="form-control p-0 border-0" name="tanggal_lahir">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="col-md-12 p-0" class="col-md-12 p-0">Email</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="email" placeholder="Email" value="<?php echo $email; ?>" class="form-control p-0 border-0" name="email">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Nomor HP</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" placeholder="Nomor HP" value="<?php echo $no_hp; ?>" class="form-control p-0 border-0" name="no_hp">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Pilihan Program Studi 1</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <select name="prodi_1" id="prodi_1" class="form-control" disabled>
                                                <option value="">- Pilih Program Studi -</option>
                                                <?php
                                                $queryProdi = "SELECT * FROM t_prodi";
                                                $stmtProdi = $pdo->query($queryProdi);

                                                $selectedProdiID = isset($prodi_1) ? $prodi_1 : '';

                                                while ($rowProdi = $stmtProdi->fetch(PDO::FETCH_ASSOC)) {
                                                    $selected = ($rowProdi['id'] == $selectedProdiID) ? 'selected' : '';
                                                    echo '<option value="' . $rowProdi['id'] . '" ' . $selected . '>' . $rowProdi['nama_prodi'] . ' - ' . $rowProdi['jenjang'] . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Pilihan Program Studi 2</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <select name="prodi_2" id="prodi_2" class="form-control" disabled>
                                                <option value="">- Pilih Program Studi -</option>
                                                <?php
                                                $queryProdi = "SELECT * FROM t_prodi";
                                                $stmtProdi = $pdo->query($queryProdi);

                                                $selectedProdiID = isset($prodi_2) ? $prodi_2 : '';

                                                while ($rowProdi = $stmtProdi->fetch(PDO::FETCH_ASSOC)) {
                                                    $selected = ($rowProdi['id'] == $selectedProdiID) ? 'selected' : '';
                                                    echo '<option value="' . $rowProdi['id'] . '" ' . $selected . '>' . $rowProdi['nama_prodi'] . ' - ' . $rowProdi['jenjang'] . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Avatar</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="file" name="avatar" id="avatarInput" class="form-control p-0 border-0" onchange="handleAvatarChange()">
                                            <img id="avatarPreview" src="uploads/avatar/<?php echo $avatar; ?>" alt="Avatar Preview" class="img-preview">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-success">Update Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End Page Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center"> &copy; Copyright <strong><span>Universitas ALETA</strong>. All Rights Reserved
                <p>Dikelola Oleh Tim IT <strong>Universitas ALETA</strong></p>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!-- Cropper JS -->
    <script src="cropper/dist/cropper.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
    <script>
        function handleAvatarChange() {
            var input = document.getElementById('avatarInput');
            var preview = document.getElementById('avatarPreview');

            var reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;

                // Inisialisasi Cropper.js
                var cropper = new Cropper(preview, {
                    aspectRatio: 1, // Tetapkan rasio aspek sesuai kebutuhan
                    crop: function(e) {
                        // Perbarui bidang input tersembunyi dengan data yang dipotong (mis., e.detail.x, e.detail.y, e.detail.width, e.detail.height)
                    }
                });
            };

            // Baca file gambar yang dipilih
            reader.readAsDataURL(input.files[0]);
        }
    </script>
</body>

</html>