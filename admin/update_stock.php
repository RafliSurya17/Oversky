<?php
include "config.php";

$id = $_POST['id'];
$stock = $_POST['stock'];

$query = "UPDATE products SET stock = '$stock' WHERE id = '$id'";
mysqli_query($conn, $query);

echo "success";
?>
