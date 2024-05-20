<?php 
$vt_server = "localhost";
$vt_username = "root"; // Kullanıcı adınız
$vt_password = ""; // Şifreniz
$vt_databasename = "database"; // Veritabanı adı

$connect = mysqli_connect($vt_server, $vt_username, $vt_password, $vt_databasename);

if(!$connect){
    die("Bağlantı hatası: " . mysqli_connect_error());
}







//update
if (isset($_POST["buttonu"])) {
    $profile_id = mysqli_real_escape_string($connect, $_POST['id']);
    $profile_name = mysqli_real_escape_string($connect, $_POST['name']);
    $profile_surname = mysqli_real_escape_string($connect, $_POST['surname']);
    $profile_mail = mysqli_real_escape_string($connect, $_POST['mail']);

    $sql = "UPDATE profile SET
            name='$profile_name',
            surname='$profile_surname',
            mail='$profile_mail'
            WHERE id='$profile_id'";

    if (mysqli_query($connect, $sql)) {
        header("location: ayarlar.php?durum=ok");
        exit;
    } else {
        echo "Hata: " . mysqli_error($connect);
    }
}


?>
