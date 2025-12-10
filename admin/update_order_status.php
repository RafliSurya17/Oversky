<?php
include "config.php";

$id     = $_POST['id'] ?? '';
$status = $_POST['status'] ?? '';

if (!$id || !$status) {
    echo "Data tidak lengkap!";
    exit;
}

$query = $conn->prepare("UPDATE orders SET status = ? WHERE id = ?");
$query->bind_param("si", $status, $id);

if ($query->execute()) {
    echo "Status berhasil diperbarui!";
} else {
    echo "Gagal update status!";
}
?>
