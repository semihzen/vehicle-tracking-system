<?php
// Veritabanı bağlantısını içe aktar
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form verilerini al
    $email = $_POST['email'];
    $password = $_POST['password'];

    // E-posta adresinin geçerliliğini kontrol et
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Geçersiz giriş.'); window.location.href = 'signin.php';</script>";
        // echo "Geçersiz e-posta adresi";
        exit(); // İşlemi sonlandır
    }
   

    // Veritabanına bağlan
    $conn = new mysqli($vt_server, $vt_username, $vt_password, $vt_databasename);

    // Bağlantıyı kontrol et
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL sorgusu
    $sql = "SELECT * FROM kullanıcılar WHERE mail = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // E-posta adresine ait kullanıcı var
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Şifre doğru
            // Giriş başarılı olduğunda menu.php sayfasına yönlendir
            header("Location: menu.php");
            exit();
        } else {
            // Şifre yanlış
            echo "<script>alert('Yanlış şifre'); window.location.href = 'signin.php';</script>";
        }
    } else {
        // E-posta adresine ait kullanıcı yok
        echo "<script>alert('Kullanıcı bulunamadı'); window.location.href = 'signin.php';</script>";
    }
   

    // Bağlantıyı kapat
    $conn->close();
}
?>
