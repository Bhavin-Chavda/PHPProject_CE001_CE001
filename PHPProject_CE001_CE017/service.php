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
$accurecy=$_POST['accurecy'];
$speed=$_POST['speed'];
$cleanliness=$_POST['cleanliness'];
$welcome=$_POST['welcome'];
$descr=$_POST['descr'];
$srating=$_POST['srating'];
$sql="INSERT INTO `project`.`service` (`name`, `email`, `accurecy`, `speed`, `cleanliness`, `welcom`, `descr`, `srating`, `d&t`) VALUES ('$name', '$email', '$accurecy', '$speed', '$cleanliness', '$welcome', '$descr', '$srating', current_timestamp());";

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
            background-image: url('static/a16.jpg');
            background-size: cover;
        }
    </style>
    <title>Service Review</title>
</head>

<body >
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link" href="welcome.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="food.php">Food </a>
                </li>
                <li class="nav-item active">
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

    <h1 style="text-align:center; color:rgb(52, 48, 48)">How was the Service....!!Let's Review</h1>
    <h3 style="text-align:center; color:rgb(91, 87, 87)">Please provide us feedback, we'd love to hear from you !</h5>
    <br>
    <form method="POST" class="mx-5" style = "position:relative; left:80px; top:2px;">
        <h3 >Name :</h3><input type="text" name="name" id="name" placeholder="Enter your name" required><br><br>
        <h5>Email :</h3> <input type="email" name="email" id="email" placeholder="Enter your email"><br><br>

        <h3>Order Accurecy : </h3><input type="radio" name="accurecy" value="Excellent" /> <h5 style="display:inline"> Excellent</h5><br> <input type="radio"
            name="accurecy" value="Good" /> <h5 style="display:inline"> Good</h5><br> <input type="radio" name="accurecy" value="Average" /> <h5 style="display:inline"> Average</h5><br> <input
            type="radio" name="accurecy" value="Dissatisfied" /> <h5 style="display:inline"> Dissatisfied</h5><br><br>

        <h3>Speed of Service : </h3><input type="radio" name="speed" value="Excellent" /> <h5 style="display:inline"> Excellent</h5><br> <input type="radio"
            name="speed" value="Good" /> <h5 style="display:inline"> Good</h5><br> <input type="radio" name="speed" value="Average" /> <h5 style="display:inline"> Average</h5><br> <input
            type="radio" name="speed" value="Dissatisfied" /> <h5 style="display:inline"> Dissatisfied</h5><br><br>

        <h3>Cleanliness : </h3><input type="radio" name="cleanliness" value="Excellent" /> <h5 style="display:inline"> Excellent</h5><br> <input type="radio"
            name="cleanliness" value="Good" /> <h5 style="display:inline"> Good</h5><br> <input type="radio" name="cleanliness" value="Average" /> <h5 style="display:inline"> Average</h5><br> <input
            type="radio" name="cleanliness" value="Dissatisfied" /> <h5 style="display:inline"> Dissatisfied</h5><br><br>    

        <h3>Are you happy with the way you welcomed..? : </h3><input type="radio" name="welcome"
            value="Yes" /> <h5 style="display:inline"> Yes</h5><br> <input type="radio" name="welcome" value="No" /> <h5 style="display:inline"> No</h5><br><br>

        <h3>How could we serve you better in the future? :</h3><textarea name="descr" cols="40" rows="5"
            placeholder="Enter Your text"></textarea><br><br>

        <h3>Overall Service Quality: </h3><input type="radio" name="srating" value="1" /> <h5 style="display:inline"> 1</h5><br> <input type="radio" name="srating"
            value="2" /> <h5 style="display:inline"> 2</h5><br> <input type="radio" name="srating" value="3" /> <h5 style="display:inline"> 3</h5><br> <input type="radio" name="srating"
            value="4" /> <h5 style="display:inline"> 4</h5><br> <input type="radio" name="srating" value="5" /> <h5 style="display:inline"> 5</h5> <br><br>
            
        <input type="submit" name="submit" value="submit"> <input type="reset" value="reset"><br><br>

    </form>


</body>

</html>