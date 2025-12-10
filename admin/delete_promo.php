<?php
include "../config.php";

$id = $_POST['id'];

$stmt = $conn->prepare("DELETE FROM promo WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();

echo "Promo berhasil dihapus!";
