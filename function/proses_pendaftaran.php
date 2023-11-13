<?php
require_once('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
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
    $prodi_1 = $_POST["prodi_1"];
    $prodi_2 = $_POST["prodi_2"];

    // Masukkan data ke tabel alamat
    $queryAlamat = "INSERT INTO t_alamat (alamat, provinsi, kab_kota, kecamatan, kelurahan, no_rt, no_rw) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmtAlamat = $pdo->prepare($queryAlamat);
    $stmtAlamat->execute([$alamat, $provinsi, $kab_kota, $kecamatan, $kelurahan, $no_rt, $no_rw]);

    // Dapatkan ID alamat yang baru saja dimasukkan
    $alamat_id = $pdo->lastInsertId();

    // Masukkan data ke tabel user
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $queryUser = "INSERT INTO t_user (username, password, email, role) VALUES (?, ?, ?, 'user')";
    $stmtUser = $pdo->prepare($queryUser);
    $stmtUser->execute([$username, $hashed_password, $email]);

    // Dapatkan ID user yang baru saja dimasukkan
    $user_id = $pdo->lastInsertId();

    // Masukkan data ke tabel mahasiswa
    $queryMahasiswa = "INSERT INTO t_mahasiswa (nama, nik, no_kk, gender, tempat_lahir, tanggal_lahir, no_hp, alamat_id, prodi_1, prodi_2) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmtMahasiswa = $pdo->prepare($queryMahasiswa);
    $stmtMahasiswa->execute([$nama, $nik, $no_kk, $gender, $tempat_lahir, $tanggal_lahir, $no_hp, $alamat_id, $prodi_1, $prodi_2]);

    // Redirect ke halaman sukses atau lainnya
    header("Location: ../konfirmasi.php");
}
?>
