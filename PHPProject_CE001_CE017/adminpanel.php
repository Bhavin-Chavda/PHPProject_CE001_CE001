<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
body {
    background-image: url('static/a13.jpg');
    background-color: rgb(243, 144, 144);
    background-size: cover;
}
</style>
    <title>Index</title>
</head>


<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="adminpanel.php">Welcome</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " href="foodadmin.php">Food admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="ambianceadmin.php">Ambiance admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="serviceadmin.php">Service Admin</a>
        </li>
      </ul>
    </div>
    <a href="index.php" role="button" target="_blank" style="border-color: rgb(241, 181, 102); color: rgb(241, 181, 102);" class="btn btn-dark m-1">Home</a>
  </nav>
    <!-- <img src="static/s1.jpg" alt="Girl in a jacket" width="1550" height="600"> --><br>
    <h1 style="text-align: center; color:rgb(53, 35, 54)"><strong>Welcome to AdminPanel </strong></h1>
    <h4 style="text-align: center;">Here all feedbacks are stored you can view all of them here</h4><br><br>
    <div class="text-center">
        <button type="submit" class="btn btn-primary" onclick="window.location.href='foodadmin.php'" style="background-color: rgb(44, 38, 236); /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;width: 500px;
        text-decoration: none;
        display: inline-block;
        font-size: 25px;"><strong>Reviews of Food</strong></button>
    </div>
    <br>
    
    <div class="text-center">
        <button type="submit" class="btn btn-primary" onclick="window.location.href='ambianceadmin.php'" style="background-color: rgb(44, 38, 236); /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;width: 500px;
        text-decoration: none;
        display: inline-block;
        font-size: 25px;"><strong>Reviews of Ambiance</strong></button>
    </div>
    <br>
    
    <div class="text-center">
        <button type="submit" class="btn btn-primary" onclick="window.location.href='serviceadmin.php'" style="background-color: rgb(44, 38, 236); /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;width: 500px;
        text-decoration: none;
        display: inline-block;
        font-size: 25px;"><strong>Reviews of Service</strong></button>
    </div>
</body>

</html>
