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
        $_SESSION['role'] = $user['role'];
        
        // Arahkan ke dashboard sesuai peran
        if ($_SESSION['role'] == 'admin') {
            header("Location: dashboard.php");
        } else {
            header("Location: dashboard.php");
        }
        exit;
    } else {
        // Password salah
        header("Location: login.php?error=1");
    }
}
?>
