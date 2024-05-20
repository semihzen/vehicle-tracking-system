<?php
// Veritabanı bağlantısı
include 'connection.php';

// POST verilerini al
$id = $_POST['id'];
$sname = $_POST['sname'];
$s_surname = $_POST['s_surname'];
$vehicle = $_POST['vehicle'];
$plaka = $_POST['plaka'];
// $edit="edit"

// Veritabanında ilgili satırı güncelle
$sql = "UPDATE staff_list SET sname='$sname', s_surname='$s_surname', vehicle='$vehicle', plaka='$plaka' WHERE id='$id'";
if (mysqli_query($connect, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($connect);
}

// Veritabanı bağlantısını kapat
mysqli_close($connect);
?>
