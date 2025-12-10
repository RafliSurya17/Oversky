<?php
include "config.php";

$range = $_GET['range'] ?? 7;

// Ambil data
$sql = "SELECT * FROM orders 
        WHERE created_at >= DATE_SUB(NOW(), INTERVAL $range DAY)
        ORDER BY created_at DESC";

$res = $conn->query($sql);

$items = [];
$total_transaksi = 0;
$total_pendapatan = 0;

while ($row = $res->fetch_assoc()) {
    $items[] = $row;
    $total_transaksi++;
    $total_pendapatan += $row['total'];
}

echo json_encode([
    "total_transaksi" => $total_transaksi,
    "total_pendapatan" => $total_pendapatan,
    "items" => $items
]);
?>
