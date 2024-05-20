<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">  -->
    <link rel="stylesheet" href="css.css">
    <?php include 'connection.php'
    
    


// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Form verilerini al
//     $email = $_POST['mail'];
//     $password = $_POST['password'];

//     // Veritabanına bağlan
//     $conn = new mysqli($vt_server, $vt_username, $vt_password, $vt_databasename);

//     // Bağlantıyı kontrol et
//     if ($conn->connect_error) {
//         die("Connection failed: " . $conn->connect_error);
//     }

//     // SQL sorgusu
//     $sql = "SELECT * FROM kullanıcılar WHERE mail = '$email'";
//     $result = $conn->query($sql);

//     if ($result->num_rows > 0) {
//         // E-posta adresine ait kullanıcı var
//         $row = $result->fetch_assoc();
//         if (password_verify($password, $row['password'])) {
//             // Şifre doğru
//             // Giriş başarılı olduğunda menu.php sayfasına yönlendir
//             header("Location: menu.php");
//             exit();
//         } else {
//             // Şifre yanlış
//             echo "Yanlış şifre";
//         }
//     } else {
//         // E-posta adresine ait kullanıcı yok
//         echo "Kullanıcı bulunamadı";
//     }

//     // Bağlantıyı kapat
//     $conn->close();
// }

    
    
    
    
    
    
    ?>;
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Vehicle Tracking System </title>

</head>

<body style="background-image: url('https://i0.wp.com/papier-transfert.fr/wp-content/uploads/2022/10/Motifs-voiture.jpg?fit=845%2C845&ssl=1')">

    <section class="section">

        <div id="div" class="container ">
            <div class="row div c" style="width: 55%; margin-left: 20%; ">
                <div id="leftdiv" class="col">

                    <h3 class="carvehicle"><b>Vehicle Tracking System</b></h3>
                    <br>
                    <h4>How To Use?</h4><br>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged.

                </div>

<!-- <form action="signin.php" method="post"> -->
                <div id="rightdiv" class="col" ;>
                <form action="signinpro.php" method="post">
                        <div class="mb-3">
                            <label for="email" class="form-label"><h5><b>E-mail Address</b></h5></label>
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="name@example.com">
                        </div>
                        <label for="password" class="form-label"><h5><b>Password</b></h5></label>
                        <input type="password" name="password" id="password" class="form-control"
                            aria-describedby="passwordHelpBlock" placeholder="Password">
                        <div id="passwordHelpBlock" class="form-text">
                            <div class="d-grid gap-2">
                                <button class="btn btn-dark b" style="margin-left: 33%;" type="submit"><h5><b>Sign In</b></h5></button>
                            </div>
                            <a href="" style="text-decoration: none; color: black;"><h6><b>Did you forget your password?</b></h6></a>
                            <hr>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <a href="signup.php" style="text-decoration: none; color: black;"><button class="btn btn-dark" type="button"><h5><b>Sign Up</b></h5></button></a>
                            </div>
                        </div>
                    </form>
<!-- </form> --> 
            </div>
        </div>
       
    </section>








    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
       
</body>
</html>