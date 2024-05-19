<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Document</title>
    <style>
        .c{
        margin-left: 5%;
        }
       </style>
</head>
<body>
    <form class="c">
        <div class="form-group ">
          <label for="exampleInputEmail1">Name</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
          <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Surname</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Surname">
        </div>
        <!-- <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> -->
        <div class="form-group ">
          <label for="exampleInputEmail1">Vehicle</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Vehicle">
          <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Origin</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Origin">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Arival</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Arival">
          
        <br>
       
        
      </form>
      <form action="staf.php" target="_blank" method="POST">
        <button class="btn btn-dark b" type="submit" ><h5><b>Submit</b></h5></button>
        </form>
      </div>
</body>
</html>
<?php include 'connection.php' 



?>;
