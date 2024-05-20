<?php
// Veritabanı bağlantısı
include 'connection.php';

// POST verilerini al ve kontrol et
if(isset($_POST['id'], $_POST['vehicles'], $_POST['licenseplate'], $_POST['origin'], $_POST['arrival'])) {
    $id = $_POST['id'];
    $vehicles = $_POST['vehicles'];
    $licenseplate = $_POST['licenseplate'];
    $origin = $_POST['origin'];
    $arrival = $_POST['arrival'];

    // Hazırlanmış ifade kullanarak veritabanında ilgili satırı güncelle
    $stmt = $connect->prepare("UPDATE vehicle SET vehicles=?, licenseplate=?, origin=?, arrival=? WHERE id=?");
    if($stmt) {
        $stmt->bind_param("ssssi", $vehicles, $licenseplate, $origin, $arrival, $id);
        if($stmt->execute()) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $connect->error;
    }
} else {
    echo "Missing required POST parameters";
}

// Veritabanı bağlantısını kapat
$connect->close();
?>
