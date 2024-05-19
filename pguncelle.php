<?php
// Veritabanı bağlantısı
include 'connection.php';

// POST verilerini al
$id = $_POST['id'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$mail = $_POST['mail'];
$age = $_POST['age'];
// $edit="edit"

// Veritabanında ilgili satırı güncelle
$sql = "UPDATE profile SET name='$name', surname='$surname', mail='$mail', age='$age' WHERE id='$id'";
if (mysqli_query($connect, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($connect);
}

// Veritabanı bağlantısını kapat
mysqli_close($connect);
?>
