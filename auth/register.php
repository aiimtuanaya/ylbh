<?php
require 'auth.php';

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO users (fullname, email, username, password) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $fullname, $email, $username, $password);

if ($stmt->execute()) {
    header("Location: login-register.html?register=success");
} else {
    echo "Gagal registrasi: " . $conn->error;
}
?>