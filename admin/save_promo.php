<?php
include "../config.php";

$id    = $_POST['id'] ?? "";
$name  = $_POST['name'];
$price = $_POST['price'];

$imageName = "";

// Jika upload gambar baru
if (!empty($_FILES['image']['name'])) {
    $imageName = time() . "_" . basename($_FILES['image']['name']);
    $target = "../assets/img/" . $imageName;

    move_uploaded_file($_FILES['image']['tmp_name'], $target);
}

// Jika EDIT promo
if ($id != "") {

    if ($imageName != "") {
        $sql = "UPDATE promo SET name=?, price=?, image=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sisi", $name, $price, $imageName, $id);

    } else {
        $sql = "UPDATE promo SET name=?, price=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sii", $name, $price, $id);
    }

    $stmt->execute();
    echo "Promo berhasil diupdate!";
    exit;
}

/* Jika TAMBAH promo */
if ($imageName == "") {
    echo "Gambar wajib diupload!";
    exit;
}

$sql = "INSERT INTO promo (name, price, image) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sis", $name, $price, $imageName);
$stmt->execute();

echo "Promo baru berhasil ditambahkan!";
