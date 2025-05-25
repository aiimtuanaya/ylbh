<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/ylbh/koneksi.php';
// pastikan file ini menyambung ke database

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

// Hash password sebelum disimpan
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Cek apakah username atau email sudah ada
$check = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' OR email = '$email'");
if (mysqli_num_rows($check) > 0) {
    echo "<script>alert('Username atau email sudah digunakan!'); window.history.back();</script>";
    exit();
}

// Simpan ke database
$query = "INSERT INTO users (fullname, email, username, password) VALUES (?, ?, ?, ?)";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "ssss", $fullname, $email, $username, $hashedPassword);

if (mysqli_stmt_execute($stmt)) {
    echo "<script>alert('Pendaftaran berhasil! Silakan login.'); window.location.href = 'login-register.php';</script>";
} else {
    echo "<script>alert('Terjadi kesalahan saat mendaftar.'); window.history.back();</script>";
}
?>