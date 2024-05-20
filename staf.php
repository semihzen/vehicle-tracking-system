<!DOCTYPE html>
<<<<<<< HEAD
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="menu.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Satisfy&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
  <?php include 'connection.php' ?>
  <title>Tasarım Kodlama</title>
</head>
<body>
<div class="maindiv">
    <div class="leftdiv">
        <h3 class="header"><b>Vehicle Tracking Menu</b></h3>
        <hr>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link a" href="profile.php"><h4 ><i class="fa-solid fa-user fa-flip "></i> Profile</h4></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active a" aria-current="page" href="staf.php"><h4 ><i class="fa-solid fa-list fa-flip"></i>Staf Lists</h4></a>
            </li>
            <li class="nav-item">
                <a class="nav-link a" href="vehicles.php"><h4 ><i class="fa-solid fa-car fa-flip"></i>Vehicles</h4></a>
            </li>
            <li class="nav-item">
                <a class="nav-link a" href="#"><h4 ><i class="fa-solid fa-timeline fa-flip"></i>Vehicle Track</h4></a>
            </li>
        </ul>
    </div>

    <div class="rightdiv">
        <table id="liste" class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Surname</th>
                    <th scope="col">Vehicle</th>
                    <th scope="col">License Plate</th>
                    <!-- <th scope="col">Mail</th>
                    <th scope="col">Age</th> -->
                </tr>
            </thead>
            <tbody>
            <?php
                // Veritabanından verileri al
                $sql = "SELECT * FROM staff_list";
                $result = mysqli_query($connect, $sql);

                // Sonuçtan gelen her bir satır için bir tablo satırı oluştur
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['sname'] . "</td>";
                    echo "<td>" . $row['s_surname'] . "</td>";
                    echo "<td>" . $row['vehicle'] . "</td>";
                    echo "<td>" . $row['plaka'] . "</td>";
                    echo "<td><button class='btn btn-dark' onclick='editRow(" . htmlspecialchars($row['id']) . ")'>Edit</button>" ;
                   echo " <button class='btn btn-danger' onclick='editRow2(" . htmlspecialchars($row['id']) . ")'>Delete</button>";
                       echo "</tr>";

                }

                // Sonuç kümesini serbest bırak
                mysqli_free_result($result);

                // Veritabanı bağlantısını kapat
                mysqli_close($connect);
                ?>
            </tbody>
        </table>

        <br><br> 
        <h3>Adding a new staf </h3>        
        <form class="c" id="form">
            <div class="form-group ">
                <label for="exampleInputEmail1">Name</label>
                <input name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Name">
                <label for="exampleInputPassword1">Surname</label>
                <input  name="surname" type="text" class="form-control" id="surname" placeholder="Surname">
                <label for="exampleInputEmail1">Vehicle</label>
                <input  name="vehicle"  class="form-control" id="vehicle" aria-describedby="emailHelp" placeholder="Vehicle">
                <label for="exampleInputPassword1">Plaka</label>
                <input  name="plaka" type="text" class="form-control" id="plaka" placeholder="Plaka">
                <button id="ekle" class="btn btn-dark b" type="submit">Insert into the table</button>
            </div>
        </form>
    </div>
</div>


<script>
     function editRow(id) {
        const name = prompt("Enter new name:");
    const surname= prompt("Enter new surname:");
    const vehicle = prompt("Enter new vehicle:");
    const plaka = prompt("Enter new plaka:");

    if (name && surname && vehicle && plaka) {
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "sguncelle.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        const data = "id=" + encodeURIComponent(id) + "&sname=" + encodeURIComponent(name) + "&s_surname=" + encodeURIComponent(surname) + "&vehicle=" + encodeURIComponent(vehicle) + "&plaka=" + encodeURIComponent(plaka);
        
        xhr.onreadystatechange = function() {
            if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
                console.log(this.responseText);
                location.reload(); // Sayfayı yenile
            }
        };
        xhr.send(data);
    }
    }
    function editRow2(id) {
        
        const confirmation = confirm("Are you sure you want to delete this profile?");
      
    if (confirmation) {
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "ssil.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        const data = "id=" + encodeURIComponent(id);
        
        xhr.onreadystatechange = function() {
            if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
                console.log(this.responseText);
                location.reload(); // Sayfayı yenile
            }
        };
        xhr.send(data);
    }
    }


//     function deleteRow(id) {
//     const confirmation = confirm("Are you sure you want to delete this profile?");
//     if (confirmation) {
//         const xhr = new XMLHttpRequest();
//         xhr.open("POST", "psil.php", true);
//         xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
//         const data = "id=" + encodeURIComponent(id);
        
//         xhr.onreadystatechange = function() {
//             if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
//                 console.log(this.responseText);
//                 location.reload(); // Sayfayı yenile
//             }
//         };
//         xhr.send(data);
//     }
// }






    document.getElementById("form").addEventListener("submit", function(event) {
        event.preventDefault(); // Formun otomatik olarak gönderilmesini engelle
        const name = document.querySelector("#name").value;
        const surname = document.querySelector("#surname").value;
        const vehicle = document.querySelector("#vehicle").value;
        const plaka = document.querySelector("#plaka").value;
        // AJAX isteği oluştur
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "skaydet.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        // Gönderilecek veriyi hazırla
        const data = "sname=" + name + "&s_surname=" + surname + "&vehicle=" + vehicle + "&plaka=" + plaka;

        // İstek gönder
        xhr.onreadystatechange = function() {
            if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
                // İşlem başarılı, geri dönen yanıtı işle
                console.log(this.responseText);
                // Burada isteğin başarılı olduğuna dair bir geri bildirim gösterebilirsiniz
            }
        };
        xhr.send(data);

        // Yeni bir satır oluştur
        const tr = document.createElement("tr");

        // Satıra yeni hücreler ekle
        const tdAd = document.createElement("td");
        tdAd.textContent = name;
        tr.appendChild(tdAd);

        const tdSoyad = document.createElement("td");
        tdSoyad.textContent = surname;
        tr.appendChild(tdSoyad);

        const tdVehicle = document.createElement("td");
        tdVehicle.textContent = vehicle;
        tr.appendChild(tdVehicle);

        const tdPlaka = document.createElement("td");
        tdPlaka.textContent = plaka;
        tr.appendChild(tdPlaka);

        const tdButton = document.createElement("td");
            const button = document.createElement("button");
            button.textContent = "Edit";
            button.className = "btn btn-dark"; // Bootstrap sınıfı ile stil ekleme
            button.onclick = function() { editRow(this.id); };
            tdButton.appendChild(button);
            tr.appendChild(tdButton);
            
            const td2Button = document.createElement("td");
            const button2 = document.createElement("button");
            button2.textContent = "Delete";
            button2.className = "btn btn-danger"; // Bootstrap sınıfı ile stil ekleme
            button.onclick = function() { editRow2(this.id); };
            
            tdButton.appendChild(button2);
            tr.appendChild(td2Button);
            setTimeout(function() {
                location.reload();
            }, 50);

           
          
            

        // Tabloya satırı ekle
       
        document.querySelector("#liste tbody").appendChild(tr);
        // Formu temizle
        document.querySelector("#name").value = "";
        document.querySelector("#surname").value = "";
        document.querySelector("#vehicle").value = "";
        document.querySelector("#plaka").value = "";
    });
</script>

    


</body>
</html>
=======
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="menu.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Satisfy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <title>Document</title>
</head>
<body>
    <div class="maindiv">
        <div class="leftdiv">
              <h3 class="header"><b>Vehicle Tracking Menu</b></h3>
              <hr>
              <ul class="nav flex-column">
              
                <li class="nav-item">
                  
                  <a class="nav-link a " href="profile.html"><h4 ><i class="fa-solid fa-user fa-flip "></i> Profile</h4></a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link active a" aria-current="page" href="staf.html"><h4 ><i class="fa-solid fa-list fa-flip"></i>Staf Lists</h4></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link a" href="#"><h4 ><i class="fa-solid fa-car fa-flip"></i>Vehicles</h4></a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link a " href="#"><h4 ><i class="fa-solid fa-timeline fa-flip"></i>Vehicle Track</h4></a>
                </li>
              </ul>
              
    
        </div>
    <div class="rightdiv">
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Surname</th>
                <th scope="col">Vehicle</th>
                <th scope="col">Origin</th>
                <th scope="col">Arrival</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Adana</td>
                <td>Ankara</td>
              </tr>
              <!-- <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
              </tr> -->
            </tbody>
          </table>
          <form action="sduzenle.php" target="_blank" method="POST">
            <button class="btn btn-dark b" type="submit" ><h5><b>Düzenle</b></h5></button>
            </form>
    </div>
    </div>
</body>
</html>
<?php include 'connection.php' ?>;
>>>>>>> 0f7b00e97079eeba504e7e5b7d2167846df839f0
