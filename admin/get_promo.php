<?php
include "../config.php";

$result = $conn->query("SELECT * FROM promo ORDER BY id DESC");
$rows = [];

while ($row = $result->fetch_assoc()) {
    $rows[] = $row;
}

echo json_encode($rows);
