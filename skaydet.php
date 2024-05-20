<?php
// Veritabanı bağlantısı için connection.php dosyasını include edin
include 'connection.php'; 

//POST ile gelen verileri alın
$sname = $_POST['sname'];
$s_surname = $_POST['s_surname'];
$vehicle = $_POST['vehicle'];
$plaka = $_POST['plaka'];
$edit= "edit";
$deletes="deletes";

// Veritabanına ekleme işlemi yapın
$sql = "INSERT INTO staff_list (sname, s_surname, vehicle, plaka, edit,deletes) VALUES ('$sname', '$s_surname', '$vehicle', '$plaka', '$edit','$deletes')";

// Sorguyu çalıştırın
if (mysqli_query($connect, $sql)) {
    echo "Veriler başarıyla eklendi!";
} else {
    echo "Hata: " . $sql . "<br>" . mysqli_error($connect);
}

// Veritabanı bağlantısını kapatın
mysqli_close($connect);

?>
