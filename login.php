<?php
header("Content-Type: application/json");
include "config.php";

$email    = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

/* ==== 1. Cek admin ==== */
$stmt = $conn->prepare("SELECT * FROM admin_users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $admin = $result->fetch_assoc();

    if (password_verify($password, $admin['password'])) {
        echo json_encode([
            "status" => "admin",
            "message" => "Login admin berhasil!"
        ]);
        exit;
    }
}

/* ==== 2. Cek user biasa ==== */
$stmt2 = $conn->prepare("SELECT * FROM users WHERE email = ?");
$stmt2->bind_param("s", $email);
$stmt2->execute();
$result2 = $stmt2->get_result();

if ($result2->num_rows === 1) {
    $user = $result2->fetch_assoc();

    if (password_verify($password, $user['password'])) {
        echo json_encode([
            "status" => "success",
            "message" => "Login user berhasil!"
        ]);
        exit;
    }
}

/* ==== 3. Jika tidak ditemukan ==== */
echo json_encode([
    "status" => "error",
    "message" => "Email atau password salah!"
]);
?>
