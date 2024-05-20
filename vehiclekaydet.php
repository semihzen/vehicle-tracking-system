<?php
// Veritabanı bağlantısı için connection.php dosyasını include edin
include 'connection.php'; 

//POST ile gelen verileri alın
$vehicles = $_POST['vehicles'];
$licenseplate = $_POST['licenseplate'];
$origin = $_POST['origin'];
$arrival = $_POST['arrival'];
$edit= "edit";
$deletes="deletes";

// Veritabanına ekleme işlemi yapın
$sql = "INSERT INTO vehicle (vehicles, licenseplate, origin, arrival, edit,deletes) VALUES ('$vehicles', '$licenseplate', '$origin', '$arrival', '$edit','$deletes')";

// Sorguyu çalıştırın
if (mysqli_query($connect, $sql)) {
    echo "Veriler başarıyla eklendi!";
} else {
    echo "Hata: " . $sql . "<br>" . mysqli_error($connect);
}

// Veritabanı bağlantısını kapatın
mysqli_close($connect);

?>
