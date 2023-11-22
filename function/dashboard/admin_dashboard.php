<?php

// Ambil informasi pengguna dari database atau sumber lainnya
$id = $_SESSION['id'];
$role = isset($_SESSION['role']) ? $_SESSION['role'] : '';

// Periksa apakah pengguna memiliki peran admin
if ($role !== 'admin') {
    // Jika tidak, arahkan ke halaman error-404.php atau berikan pesan akses ditolak
    header("Location: ../../error-404.php");
    exit;
}

?>

<h2>Selamat Datang, <?php echo $nama_lengkap;?></h2>