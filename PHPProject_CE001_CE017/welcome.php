<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}



?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
body {
  background-image: url('static/a9.jpg');
  background-size: cover;
}
</style>
    <title>Welcome</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>

  <div class="navbar-collapse collapse">
  <ul class="navbar-nav ml-auto">
  <li class="nav-item active">
        <a class="nav-link" href="#"> <?php echo "Welcome, ". $_SESSION['username']?></a>
      </li>
  </ul>
  </div>


  </div>
</nav>

<div class="container mt-4">
<h3><?php echo "Welcome ". $_SESSION['username']?>! You can now use this website</h3>
<hr>

</div>

<h2 style="padding:20px; color:rgb(20, 20, 18)">Select the catogory you want to review</h2>
<hr style="height: 3px; color: rgb(241, 181, 102); margin: 10px;">
<p style="color:rgb(25, 240, 57); padding: 20px;">
<p style="text-align:center"><a href="food.php" style="background-color: #ff4800; color: white; padding: 14px 20px; width: 30%; text-align: center;text-decoration: none; display: inline-block;">Food </a></p><br><br>
    <p style="text-align:center;"><a href="service.php" style="background-color: #ff4800; color: white; padding: 14px 20px; width: 30%; text-align: center;text-decoration: none; display: inline-block;">Service </a></p><br><br>
    <p style="text-align:center"><a href="staff.php" style="background-color: #ff4800; color: white; padding: 14px 20px; width: 30%; text-align: center;text-decoration: none; display: inline-block;">Ambience </a></p><br><br>
    
</p>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
