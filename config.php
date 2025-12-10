<?php
$host = "localhost";
$user = "root";          // username phpMyAdmin
$pass = "";              // password phpMyAdmin
$db   = "oversky_db";

// Membuat koneksi ke database
$conn = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
