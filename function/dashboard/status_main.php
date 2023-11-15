<?php
session_start();
include_once('./function/connection.php');

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['id'])) {
    // Jika tidak, arahkan kembali ke halaman login
    header("Location: login.php");
    exit;
}

// Ambil informasi pengguna dari database
$id = $_SESSION['id'];

// Query untuk mengambil avatar dari t_user
$queryUser = "SELECT avatar FROM t_user WHERE id = :id";
$stmtUser = $pdo->prepare($queryUser);
$stmtUser->bindParam(':id', $id, PDO::PARAM_INT);
$stmtUser->execute();
$userData = $stmtUser->fetch();

// Query untuk mengambil nama dari t_mahasiswa
$queryMahasiswa = "SELECT nama FROM t_mahasiswa WHERE id = :id";
$stmtMahasiswa = $pdo->prepare($queryMahasiswa);
$stmtMahasiswa->bindParam(':id', $id, PDO::PARAM_INT);
$stmtMahasiswa->execute();
$mahasiswaData = $stmtMahasiswa->fetch();

if ($userData && $mahasiswaData) {
    $avatar = $userData['avatar']; // Avatar pengguna
    $nama_lengkap = $mahasiswaData['nama']; // Nama lengkap pengguna
} else {
    // Handle jika pengguna tidak ditemukan di salah satu tabel
    $avatar = "default_avatar.jpg"; // Gantilah dengan nilai default gambar
}
?>