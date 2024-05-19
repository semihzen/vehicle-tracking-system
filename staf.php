<!DOCTYPE html>
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
