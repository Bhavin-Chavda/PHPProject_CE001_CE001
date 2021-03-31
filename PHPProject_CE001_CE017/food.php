<?php
$confirm=0;
if(isset($_POST['submit'])){
$server="127.0.0.1:3325";
$username="root";
$password="";
$confirm=0;
$con=mysqli_connect($server,$username,$password);
if(!$con)
{
    die("Connection Failed".mysqli_connect_error());
}
// echo "Connection Successfull";
$name=$_POST['name'];
$email=$_POST['email'];
$quality=$_POST['quality'];
$quantity=$_POST['quantity'];
$expectation=$_POST['expectation'];
$descr=$_POST['descr'];
$frating=$_POST['frating'];
$sql="INSERT INTO `project`.`food` (`name`, `email`, `quality`, `quantity`, `expectation`, `descr`, `frating`, `d&t`) VALUES ('$name', '$email', '$quality', '$quantity', '$expectation', '$descr', '$frating', current_timestamp());";

if($con->query($sql)==TRUE)
{
    //  echo "Successfully inserted";
    $confirm=1;
}
else{
    echo "ERROR: $sql <br> $con->error";
}
$con->close();
} 
?>
















<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            background-image: url('static/a15.jpg');
            background-size: cover;
        }
    </style>
    <title>Food Review</title>
</head>

<body >
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link" href="welcome.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="food.php">Food </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="service.php">Service </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="staff.php">Ambience </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

<?php

if($confirm==1)
{
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Thank you for your valuable feedback</strong> 
  </div>';
}


?>
    <h1 style="text-align:center; color:rgb(52, 48, 48)">How was the food....!!Let's Review</h1>
    <h3 style="text-align:center; color:rgb(91, 87, 87)">Please provide us feedback, we'd love to hear from you !</h3>
    <br>
    <form method="POST" class="mx-5" style = "position:relative; left:80px; top:2px;">
        <h3>Name :</h3><input type="text" name="name" id="name" placeholder="Enter your name" required><br><br>
        <h3>Email :</h3><input type="email" name="email" id="email" placeholder="Enter your email"><br><br>

        <h3>Food Quality :</h3><input type="radio" name="quality" value="Excellent" /><h5 style="display:inline"> Excellent</h5> <br><input type="radio"
            name="quality" value="Good" />  <h5 style="display:inline"> Good</h5><br> <input type="radio" name="quality" value="Average" />  <h5 style="display:inline"> Average</h5><br> <input
            type="radio" name="quality" value="Dissatisfied" /> <h5 style="display:inline"> Dissatisfied</h5><br><br>

        <h3>Was it worth it ? :</h3><input type="radio" name="quantity" value="Excellent" /> <h5 style="display:inline"> Excellent</h5><br> <input type="radio"
            name="quantity" value="Good" /> <h5 style="display:inline"> Good</h5><br> <input type="radio" name="quantity" value="Average" /> <h5 style="display:inline"> Average</h5><br> <input
            type="radio" name="quantity" value="Dissatisfied" /> <h5 style="display:inline"> Dissatisfied</h5><br><br>

        <h3>Please let us know did it match up your expectations? :</h3> <input type="radio" name="expectation"
            value="Yes" /> <h5 style="display:inline"> Yes</h5><br> <input type="radio" name="expectation" value="No" /> <h5 style="display:inline"> No</h5><br><br>
        <h3>Did you find anything missinng....? : </h3><br><textarea name="descr" cols="40" rows="5"
            placeholder="Enter Your text"></textarea><br><br>

        <h3>Overall Ratings: </h3><input type="radio" name="frating" value="1" /> <h5 style="display:inline"> 1</h5><br> <input type="radio" name="frating"
            value="2" /><h5 style="display:inline"> 2</h5><br> <input type="radio" name="frating" value="3" /> <h5 style="display:inline"> 3</h5><br> <input type="radio" name="frating" value="4" /> <h5 style="display:inline"> 4</h5><br> <input type="radio" name="frating" value="5" /> <h5 style="display:inline"> 5</h5> <br><br>

        <input type="submit" name="submit" value="submit"> <input type="reset" value="reset"><br><br>

    </form>

</body>

</html>