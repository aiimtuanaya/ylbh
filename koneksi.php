<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "ylbh"; // ganti sesuai nama database kamu

$conn = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>