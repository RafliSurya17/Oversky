<?php
include "config.php";

// Admin default
$email = "admin@gmail.com";
$password = password_hash("admin123", PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO admin_users (email, password) VALUES (?, ?)");
$stmt->bind_param("ss", $email, $password);

if ($stmt->execute()) {
    echo "Admin berhasil dibuat!";
} else {
    echo "Gagal: " . $stmt->error;
}
?>
