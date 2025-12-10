<?php
header("Content-Type: application/json");
include "config.php";

$query = "SELECT * FROM orders ORDER BY id DESC";
$result = mysqli_query($conn, $query);

$orders = [];

while ($row = mysqli_fetch_assoc($result)) {

    // Decode JSON items
    $row['items'] = json_decode($row['items'], true);

    $orders[] = $row;
}

echo json_encode($orders);
?>
