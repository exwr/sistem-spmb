<?php

// Ambil informasi pengguna dari database
$id = $_SESSION['id'];
$role = isset($_SESSION['role']) ? $_SESSION['role'] : '';

// Periksa apakah pengguna memiliki peran user
if ($_SESSION['role'] !== 'user') {
    // Jika tidak, arahkan ke halaman error-404.php atau berikan pesan akses ditolak
    header("Location: ../../error-404.php");
    exit;
}
?>

<h1>Dashboard</h1>
<section>
    <h2>Selamat datang, <?php echo "$nama_lengkap"; ?>!</h2>
</section>

<div class="info">
    <p>Nomor Daftar: <?php echo $no_daftar; ?></p>
    <p>Nama: <?php echo $nama_lengkap; ?></p>
    <p>Pilihan Program Studi 1: <?php echo $prodi_1; ?></p>
    <p>Pilihan Program Studi 2: <?php echo $prodi_2; ?></p>
</div>