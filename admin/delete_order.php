<?php
include "config.php";

$id = $_POST['id'] ?? '';

if (!$id) {
    echo "ID tidak ditemukan!";
    exit;
}

$query = $conn->prepare("DELETE FROM orders WHERE id = ?");
$query->bind_param("i", $id);

if ($query->execute()) {
    echo "Order berhasil dihapus!";
} else {
    echo "Gagal menghapus!";
}
?>
