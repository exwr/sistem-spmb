<?php
require_once('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nik = $_POST["nik"];
    $no_kk = $_POST["no_kk"];
    $nama = $_POST["nama"];
    $gender = $_POST["gender"];
    $tempat_lahir = $_POST["tempat_lahir"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $no_hp = $_POST["no_hp"];
    $email = $_POST["email"];
    $alamat = $_POST["alamat"];
    $provinsi = $_POST["provinsi"];
    $kab_kota = $_POST["kab_kota"];
    $kecamatan = $_POST["kecamatan"];
    $kelurahan = $_POST["kelurahan"];
    $no_rt = $_POST["no_rt"];
    $no_rw = $_POST["no_rw"];

    // Lakukan validasi data (contoh: pastikan email adalah alamat email yang valid)

    // Simpan data ke dalam database
    $query = "INSERT INTO user (nik, no_kk, nama, gender, tempat_lahir, tanggal_lahir, no_hp, email, alamat, provinsi, kab_kota, kecamatan, kelurahan, no_rt, no_rw)
              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = $pdo->prepare($query);
    
    if ($stmt->execute([$nik, $no_kk, $nama, $gender, $tempat_lahir, $tanggal_lahir, $no_hp, $email, $alamat, $provinsi, $kab_kota, $kecamatan, $kelurahan, $no_rt, $no_rw])) {
        header("Location: ../konfirmasi.php"); // Redirect ke halaman konfirmasi
    } else {
        echo "Gagal menyimpan data.";
    }
}
?>
