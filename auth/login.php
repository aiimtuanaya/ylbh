<?php
session_start();
require_once __DIR__ . '/../koneksi.php'; // koneksi ke database

$username = $_POST['username'];
$password = $_POST['password'];

// Cek username dan password dari tabel admin
$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $query);

// Jika cocok
if ($data = mysqli_fetch_assoc($result)) {
    $_SESSION['user'] = $data['username'];
    header("Location: admin-dashboard.php");
    exit();
} else {
    // Gagal login, kembali ke form dengan pesan error
    header("Location: login-form.php?error=1");
    exit();
}
?>
