<?php
include "config.php";

// Ambil data dari form (POST)
$username = $_POST["username"];
$email    = $_POST["email"];
$password = $_POST["password"];

// Enkripsi password agar aman
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Cek apakah email sudah ada
$check = mysqli_query($conn, "SELECT email FROM users WHERE email='$email'");
if (mysqli_num_rows($check) > 0) {
    echo json_encode(["status" => "error", "message" => "Email already registered"]);
    exit;
}

// Simpan ke database
$query = "INSERT INTO users (username, email, password) 
          VALUES ('$username', '$email', '$hashed_password')";

if (mysqli_query($conn, $query)) {
    echo json_encode(["status" => "success", "message" => "Registration successful"]);
} else {
    echo json_encode(["status" => "error", "message" => "Database error"]);
}
?>
