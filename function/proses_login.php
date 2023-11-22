<?php
require_once('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Cek apakah pengguna adalah admin
    $queryAdmin = "SELECT * FROM t_admin WHERE username = ?";
    $stmtAdmin = $pdo->prepare($queryAdmin);
    $stmtAdmin->execute([$username]);
    $admin = $stmtAdmin->fetch();

    // Jika admin ditemukan, lakukan login admin
    if ($admin && password_verify($password, $admin['password'])) {
        session_start();
        $_SESSION['id'] = $admin['id'];
        $_SESSION['role'] = 'admin';
        
        // Arahkan ke dashboard admin
        header("Location: dashboard.php");
        exit;
    }

    // Jika bukan admin, coba login sebagai pengguna biasa
    $queryUser = "SELECT * FROM t_user WHERE username = ?";
    $stmtUser = $pdo->prepare($queryUser);
    $stmtUser->execute([$username]);
    $user = $stmtUser->fetch();

    // Jika pengguna biasa ditemukan, lakukan login pengguna biasa
    if ($user && password_verify($password, $user['password'])) {
        session_start();
        $_SESSION['id'] = $user['id'];
        $_SESSION['role'] = 'user';
        
        // Arahkan ke dashboard pengguna biasa
        header("Location: dashboard.php");
        exit;
    }

    // Jika tidak ada yang cocok, arahkan kembali ke halaman login dengan pesan kesalahan
    header("Location: login.php?error=username_not_found");
    exit;
}
?>
