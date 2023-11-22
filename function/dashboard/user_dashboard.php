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

<?php
// Contoh data nomor daftar, nama, dan pilihan prodi
$nomor_daftar = "123456";
$nama = "Gita Mahardika";
$pilihan_prodi = "S1 - Teknik Informatika";
?>

<div class="info">
    <p>Nomor Daftar: <?php echo $nomor_daftar; ?></p>
    <p>Nama: <?php echo $nama; ?></p>
    <p>Pilihan Prodi: <?php echo $pilihan_prodi; ?></p>
</div>