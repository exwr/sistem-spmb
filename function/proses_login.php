<?php
require_once('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Cari pengguna berdasarkan username
    $query = "SELECT * FROM t_user WHERE username = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if (!$user) {
        // Username tidak ditemukan, arahkan kembali ke halaman login dengan pesan kesalahan
        header("Location: login.php?error=username_not_found");
        exit;
    }

    if (password_verify($password, $user['password'])) {
        session_start();
        $_SESSION['id'] = $user['id'];
        header("Location: dashboard.php"); // Ganti dengan halaman yang sesuai setelah login berhasil
    } else {
        // Password salah
        header("Location: login.php?error=1"); // Redirect ke halaman login dengan pesan kesalahan
    }
}

?>
