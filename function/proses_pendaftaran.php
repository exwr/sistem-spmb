<?php
require_once('connection.php');

// Fungsi untuk generate nomor pendaftaran
function generateNomorPendaftaran()
{
    // Generate nomor acak sepanjang 10 digit
    $randomNumber = str_pad(mt_rand(1, 999999), 10, '0', STR_PAD_LEFT);

    // Gabungkan prefix dengan nomor acak
    $no_daftar = $randomNumber;

    return $no_daftar;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];

    // Cek apakah username sudah digunakan
    $queryCheckUsername = "SELECT * FROM t_user WHERE username = ?";
    $stmtCheckUsername = $pdo->prepare($queryCheckUsername);
    $stmtCheckUsername->execute([$username]);

    if ($stmtCheckUsername->rowCount() > 0) {
        // Username sudah digunakan, arahkan kembali ke halaman registrasi dengan pesan kesalahan
        header("Location: ../register.php?error=username_exists");
        exit;
    }
}

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

    // Set avatar default untuk pengguna baru
    $defaultAvatar = "default-avatar.png";

    // Masukkan data ke tabel user
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $queryUser = "INSERT INTO t_user (username, password, email, avatar, role) VALUES (?, ?, ?, ?, 'user')";
    $stmtUser = $pdo->prepare($queryUser);
    $stmtUser->execute([$username, $hashed_password, $email, $defaultAvatar]);

    // Dapatkan ID user yang baru saja dimasukkan
    $user_id = $pdo->lastInsertId();

    // Generate nomor pendaftaran secara otomatis
    $no_daftar = generateNomorPendaftaran();

    // Masukkan data ke dalam tabel mahasiswa
    $queryMahasiswa = "INSERT INTO t_mahasiswa (no_daftar, nama, nik, no_kk, gender, tempat_lahir, tanggal_lahir, no_hp, alamat_id, prodi_1, prodi_2) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmtMahasiswa = $pdo->prepare($queryMahasiswa);
    $stmtMahasiswa->execute([$no_daftar, $nama, $nik, $no_kk, $gender, $tempat_lahir, $tanggal_lahir, $no_hp, $alamat_id, $prodi_1, $prodi_2]);

    // Dapatkan ID user yang baru saja dimasukkan
    $user_id = $pdo->lastInsertId();

    // Masukkan data ke dalam tabel pendaftaran
    $queryPendaftaran = "INSERT INTO t_pendaftaran (id_mahasiswa, tanggal_pendaftaran, status_pendaftaran) VALUES (?, NOW(), 'Menunggu Verifikasi')";
    $stmtPendaftaran = $pdo->prepare($queryPendaftaran);
    $stmtPendaftaran->execute([$user_id]);

    // Redirect ke halaman sukses atau lainnya
    header("Location: ../konfirmasi.php");
}
