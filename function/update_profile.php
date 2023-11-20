<?php
session_start();
include_once('connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Periksa apakah pengguna sudah login
    if (!isset($_SESSION['id'])) {
        // Jika tidak, arahkan kembali ke halaman login
        header("Location: login.php");
        exit;
    }
}
// Ambil informasi pengguna dari database
$id = $_SESSION['id'];

// Ambil data yang dikirim dari formulir
$nik = $_POST['nik'];
$no_kk = $_POST['no_kk'];
$nama = $_POST['nama'];
$gender = $_POST['gender'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$prodi_1 = $_POST['prodi_1'];
$prodi_2 = $_POST['prodi_2'];
$avatar = $_FILES['avatar'];

// Cek apakah file avatar diunggah
if (!empty($avatar['name'])) {
    $avatarDirectory = "../uploads/avatar/";

    // Nama file avatar baru
    $avatarName = $id . "_" . $avatar['name'];

    // Path lengkap untuk menyimpan file avatar
    $avatarPath = $avatarDirectory . $avatarName;

    // Hapus foto avatar lama jika bukan default-avatar.png
    $queryOldAvatar = "SELECT avatar FROM t_user WHERE id = :id";
    $stmtOldAvatar = $pdo->prepare($queryOldAvatar);
    $stmtOldAvatar->bindParam(':id', $id, PDO::PARAM_INT);
    $stmtOldAvatar->execute();
    $oldAvatarData = $stmtOldAvatar->fetch();
    $oldAvatarPath = $oldAvatarData['avatar'];

    // Jika ada foto avatar lama dan bukan default-avatar.png, hapus foto lama
    if ($oldAvatarPath && $oldAvatarPath != "uploads/avatar/default-avatar.png") {
        unlink($oldAvatarPath);
    }

    // Pindahkan file avatar yang diunggah ke direktori yang sesuai
    move_uploaded_file($avatar['tmp_name'], $avatarPath);
} else {
    // Jika tidak ada file avatar yang diunggah, gunakan avatar yang ada di database
    $queryAvatar = "SELECT avatar FROM t_user WHERE id = :id";
    $stmtAvatar = $pdo->prepare($queryAvatar);
    $stmtAvatar->bindParam(':id', $id, PDO::PARAM_INT);
    $stmtAvatar->execute();
    $avatarData = $stmtAvatar->fetch();
    $avatarName = $avatarData['avatar'];
}

// Query untuk mengupdate profil pengguna di tabel t_user
$queryUpdateUser = "UPDATE t_user SET email = :email, avatar = :avatar WHERE id = :id";
$stmtUpdateUser = $pdo->prepare($queryUpdateUser);
$stmtUpdateUser->bindParam(':id', $id, PDO::PARAM_INT);
$stmtUpdateUser->bindParam(':email', $email, PDO::PARAM_STR);
$stmtUpdateUser->bindParam(':avatar', $avatarName, PDO::PARAM_STR);

// Query untuk mengupdate profil pengguna di tabel t_mahasiswa
$queryUpdateMahasiswa = "UPDATE t_mahasiswa SET nik = :nik, no_kk = :no_kk,
                                                nama = :nama, no_hp = :no_hp,
                                                gender = :gender, tempat_lahir = :tempat_lahir,
                                                tanggal_lahir = :tanggal_lahir, prodi_1 = :prodi_1,
                                                prodi_2 = :prodi_2 WHERE id = :id";
$stmtUpdateMahasiswa = $pdo->prepare($queryUpdateMahasiswa);
$stmtUpdateMahasiswa->bindParam(':id', $id, PDO::PARAM_INT);
$stmtUpdateMahasiswa->bindParam(':nik', $nik, PDO::PARAM_STR);
$stmtUpdateMahasiswa->bindParam(':no_kk', $no_kk, PDO::PARAM_STR);
$stmtUpdateMahasiswa->bindParam(':nama', $nama, PDO::PARAM_STR);
$stmtUpdateMahasiswa->bindParam(':no_hp', $no_hp, PDO::PARAM_STR);
$stmtUpdateMahasiswa->bindParam(':gender', $gender, PDO::PARAM_STR);
$stmtUpdateMahasiswa->bindParam(':tempat_lahir', $tempat_lahir, PDO::PARAM_STR);
$stmtUpdateMahasiswa->bindParam(':tanggal_lahir', $tanggal_lahir, PDO::PARAM_STR);
$stmtUpdateMahasiswa->bindParam(':prodi_1', $prodi_1, PDO::PARAM_STR);
$stmtUpdateMahasiswa->bindParam(':prodi_2', $prodi_2, PDO::PARAM_STR);

if ($stmtUpdateUser->execute()) {
    if ($stmtUpdateMahasiswa->execute()) {
        header("Location: ../profile.php?success=1");
    } else {
        echo "Pembaruan data mahasiswa gagal. Silakan coba lagi.";
    }
} else {
    echo "Pembaruan data pengguna gagal. Silakan coba lagi.";
}

?>