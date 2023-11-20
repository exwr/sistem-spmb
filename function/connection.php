<?php
$host = "localhost"; // Ganti dengan nama host database Anda
$dbname = "db_spmb"; // Ganti dengan nama database Anda
$username = "root"; // Ganti dengan nama pengguna database Anda
$password = ""; // Ganti dengan kata sandi database Anda

try {
  // Membuat koneksi ke database menggunakan PDO
  $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

  // Atur mode error dan pengecualian PDO
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Atur karakter pengkodean UTF-8
  $pdo->exec("set names utf8");
} catch (PDOException $e) {
  // Tangani kesalahan jika koneksi gagal
  die("Koneksi database gagal: " . $e->getMessage());
}
?>