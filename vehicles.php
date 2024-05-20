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
                <a class="nav-link a"  aria-current="page" href="vehicles.php"><h4 ><i class="fa-solid fa-car fa-flip"></i>Vehicles</h4></a>
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
                    <th scope="col">Vehicles</th>
                    <th scope="col">License Plate</th>
                    <th scope="col">Origin</th>
                    <th scope="col">Arrival</th>
                </tr>
            </thead>
            <tbody>
            <?php
                // Veritabanından verileri al
                $sql = "SELECT * FROM vehicle";
                $result = mysqli_query($connect, $sql);

                // Sonuçtan gelen her bir satır için bir tablo satırı oluştur
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['vehicles'] . "</td>";
                    echo "<td>" . $row['licenseplate'] . "</td>";
                    echo "<td>" . $row['origin'] . "</td>";
                    echo "<td>" . $row['arrival'] . "</td>";
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
        <h3>Adding a new vehicle </h3>        
        <form class="c" id="form">
            <div class="form-group ">
                <label for="vehicleInput">Vehicles</label>
                <input name="vehicles" type="text" class="form-control" id="vehicles" placeholder="Vehicles">
                <label for="licensePlateInput">License Plate</label>
                <input  name="licenseplate" type="text" class="form-control" id="licenseplate" placeholder="License Plate">
                <label for="originInput">Origin</label>
                <input  name="origin" type="text" class="form-control" id="origin" placeholder="Origin">
                <label for="arrivalInput">Arrival</label>
                <input  name="arrival" type="text" class="form-control" id="arrival" placeholder="Arrival">
                <button id="ekle" class="btn btn-dark b" type="submit">Insert into the Table</button>
            </div>
        </form>
    </div>
</div>

<script>
   function editRow(id) {
        const vehicles = prompt("Enter new vehicles:");
        const licenseplate = prompt("Enter new license plate:");
        const origin = prompt("Enter new origin:");
        const arrival = prompt("Enter new arrival:");

        if (vehicles && licenseplate && origin && arrival) {
            const xhr = new XMLHttpRequest();
            xhr.open("POST", "vguncelle.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            const data = "id=" + encodeURIComponent(id) + "&vehicles=" + encodeURIComponent(vehicles) + "&licenseplate=" + encodeURIComponent(licenseplate) + "&origin=" + encodeURIComponent(origin) + "&arrival=" + encodeURIComponent(arrival);
            
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
            xhr.open("POST", "vehiclesil.php", true);
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

    document.getElementById("form").addEventListener("submit", function(event) {
        event.preventDefault(); // Formun otomatik olarak gönderilmesini engelle
        const vehicles = document.querySelector("#vehicles").value;
        const licenseplate = document.querySelector("#licenseplate").value;
        const origin = document.querySelector("#origin").value;
        const arrival = document.querySelector("#arrival").value;

        // AJAX isteği oluştur
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "vehiclekaydet.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        // Gönderilecek veriyi hazırla
        const data = "vehicles=" + vehicles + "&licenseplate=" + licenseplate + "&origin=" + origin + "&arrival=" + arrival;

        // İstek gönder
        xhr.onreadystatechange = function() {
            if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
                // İşlem başarılı, geri dönen yanıtı işle
                console.log(this.responseText);
                location.reload();
            }
        };
        xhr.send(data);

        // Yeni bir satır oluştur
        const tr = document.createElement("tr");

        // Satıra yeni hücreler ekle
        const tdVehicles = document.createElement("td");
        tdVehicles.textContent = vehicles;
        tr.appendChild(tdVehicles);

        const tdLicensePlate = document.createElement("td");
        tdLicensePlate.textContent = licenseplate;
        tr.appendChild(tdLicensePlate);

        const tdOrigin = document.createElement("td");
        tdOrigin.textContent = origin;
        tr.appendChild(tdOrigin);

        const tdArrival = document.createElement("td");
        tdArrival.textContent = arrival;
        tr.appendChild(tdArrival);

        const tdButton = document.createElement("td");
        const button = document.createElement("button");
        button.textContent = "Edit";
        button.className = "btn btn-dark"; // Bootstrap sınıfı ile stil ekleme
        button.onclick = function() { editRow(id); };
        tdButton.appendChild(button);
        tr.appendChild(tdButton);
        
        const td2Button = document.createElement("td");
        const button2 = document.createElement("button");
        button2.textContent = "Delete";
        button2.className = "btn btn-danger"; // Bootstrap sınıfı ile stil ekleme
        button2.onclick = function() { editRow2(id); };
        
        tdButton.appendChild(button2);
        tr.appendChild(td2Button);

        // Tabloya satırı ekle
        document.querySelector("#liste tbody").appendChild(tr);

        // Formu temizle
        document.querySelector("#vehicles").value = "";
        document.querySelector("#licenseplate").value = "";
        document.querySelector("#origin").value = "";
        document.querySelector("#arrival").value = "";
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
    <title>Vehicles</title>
</head>
<body>
    
</body>
</html>
<?php include 'connection.php' ?>;
>>>>>>> 0f7b00e97079eeba504e7e5b7d2167846df839f0
