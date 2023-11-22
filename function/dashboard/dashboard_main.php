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
$role = isset($_SESSION['role']) ? $_SESSION['role'] : '';

// Query untuk mengambil avatar dan nama dari tabel yang sesuai dengan peran pengguna
if ($role == 'admin') {
    $queryAdmin = "SELECT avatar, nama FROM t_admin WHERE id = :id";
    $stmtAdmin = $pdo->prepare($queryAdmin);
    $stmtAdmin->bindParam(':id', $id, PDO::PARAM_INT);
    $stmtAdmin->execute();
    $adminData = $stmtAdmin->fetch();

    if ($adminData) {
        $avatar = $adminData['avatar'];
        $nama_lengkap = $adminData['nama'];
    } else {
        $avatar = "default-avatar.png";
    }
} else {
    // Pengguna adalah pengguna biasa
    $queryUser = "SELECT avatar FROM t_user WHERE id = :id";
    $stmtUser = $pdo->prepare($queryUser);
    $stmtUser->bindParam(':id', $id, PDO::PARAM_INT);
    $stmtUser->execute();
    $userData = $stmtUser->fetch();

    if ($userData) {
        $avatar = $userData['avatar']; // Avatar pengguna biasa
    } else {
        $avatar = "default-avatar.png"; // Gantilah dengan nilai default gambar
    }

    // Ambil data dari t_mahasiswa
    $queryMahasiswa = "SELECT 
                        t_mahasiswa.no_daftar, 
                        t_mahasiswa.nama, 
                        t_mahasiswa.prodi_1, 
                        t_prodi_1.jenjang AS jenjang_prodi_1,
                        t_prodi_1.nama_prodi AS nama_prodi_1, 
                        t_mahasiswa.prodi_2, 
                        t_prodi_2.jenjang AS jenjang_prodi_2,
                        t_prodi_2.nama_prodi AS nama_prodi_2
                    FROM t_mahasiswa
                    LEFT JOIN t_prodi AS t_prodi_1 ON t_mahasiswa.prodi_1 = t_prodi_1.id
                    LEFT JOIN t_prodi AS t_prodi_2 ON t_mahasiswa.prodi_2 = t_prodi_2.id
                    WHERE t_mahasiswa.id = :id";
    $stmtMahasiswa = $pdo->prepare($queryMahasiswa);
    $stmtMahasiswa->bindParam(':id', $id, PDO::PARAM_INT);
    $stmtMahasiswa->execute();
    $mahasiswaData = $stmtMahasiswa->fetch();

    if ($mahasiswaData) {
        $no_daftar = $mahasiswaData['no_daftar'];
        $nama_lengkap = $mahasiswaData['nama'];
        $prodi_1 = $mahasiswaData['jenjang_prodi_1'] . ' - ' . $mahasiswaData['nama_prodi_1'];
        $prodi_2 = $mahasiswaData['jenjang_prodi_2'] . ' - ' . $mahasiswaData['nama_prodi_2'];
    } else {
        $nama_lengkap = "Pengguna";
    }
}
