<?php
// Veritabanı bağlantısı için connection.php dosyasını include edin
include 'connection.php'; 

//POST ile gelen verileri alın
$name = $_POST['name'];
$surname = $_POST['surname'];
$mail = $_POST['email'];
$age = $_POST['age'];
$edit= "edit";
$deletes="deletes";

// Veritabanına ekleme işlemi yapın
$sql = "INSERT INTO profile (name, surname, mail, age, edit,deletes) VALUES ('$name', '$surname', '$mail', '$age', '$edit','$deletes')";

// Sorguyu çalıştırın
if (mysqli_query($connect, $sql)) {
    echo "Veriler başarıyla eklendi!";
} else {
    echo "Hata: " . $sql . "<br>" . mysqli_error($connect);
}

// Veritabanı bağlantısını kapatın
mysqli_close($connect);

?>
