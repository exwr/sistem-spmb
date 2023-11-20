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
$queryUser = "SELECT avatar, email FROM t_user WHERE id = :id";
$stmtUser = $pdo->prepare($queryUser);
$stmtUser->bindParam(':id', $id, PDO::PARAM_INT);
$stmtUser->execute();
$userData = $stmtUser->fetch();

// Query untuk mengambil nama dari t_mahasiswa
$queryMahasiswa = "SELECT no_daftar, nik, no_kk, nama, gender, tempat_lahir, tanggal_lahir, no_hp, prodi_1, prodi_2 FROM t_mahasiswa WHERE id = :id";
$stmtMahasiswa = $pdo->prepare($queryMahasiswa);
$stmtMahasiswa->bindParam(':id', $id, PDO::PARAM_INT);
$stmtMahasiswa->execute();
$mahasiswaData = $stmtMahasiswa->fetch();

if ($userData && $mahasiswaData) {
    $avatar = $userData['avatar'];
    $nama_lengkap = $mahasiswaData['nama'];
    $no_daftar = $mahasiswaData['no_daftar'];
    $email = $userData['email'];
    $nik = $mahasiswaData['nik'];
    $gender = $mahasiswaData['gender'];
    $tempat_lahir = $mahasiswaData['tempat_lahir'];
    $tanggal_lahir = $mahasiswaData['tanggal_lahir'];
    $no_kk = $mahasiswaData['no_kk'];
    $no_hp = $mahasiswaData['no_hp'];
    $prodi_1 = $mahasiswaData['prodi_1'];
    $prodi_2 = $mahasiswaData['prodi_2'];
} else {
    // Handle jika pengguna tidak ditemukan di salah satu tabel
    $avatar = "default-avatar.png";
}
?>