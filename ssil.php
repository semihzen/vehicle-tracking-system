<?php
// Veritabanı bağlantısı
include 'connection.php';

// POST isteğinden gelen id parametresini al
$id = $_POST['id'];

// SQL sorgusu oluştur
$sql = "DELETE FROM staff_list WHERE id = $id";

// Sorguyu çalıştır ve sonucu kontrol et
if (mysqli_query($connect, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($connect);
}

// Veritabanı bağlantısını kapat
mysqli_close($connect);
?>
