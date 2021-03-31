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
$decent=$_POST['decenet'];
$relax=$_POST['relax'];
$dinning=$_POST['dinning'];
$atmp=$_POST['atmp'];
$lighting=$_POST['lighting'];
$am=$_POST['am'];
$descr=$_POST['descr'];
$arating=$_POST['arating'];
$sql="INSERT INTO `project`.`ambiance` (`name`, `email`, `decent`, `relax`, `dinning`,`atmp`,`lighting`,`am`, `descr`, `arating`, `d&t`) VALUES ('$name', '$email', '$decent', '$relax', '$dinning', '$atmp', '$lighting', '$am', '$descr', '$arating', current_timestamp());";

if($con->query($sql)==TRUE)
{
    // echo "Successfully inserted";
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
            background-image: url('static/a13.jpg');
            background-size: cover;
        }
    </style>
    <title>Ambience Review</title>
</head>

<body >
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="welcome.php">Home <span class="sr-only">(current)</span></a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="food.php">Food </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="service.php">Service </a>
                </li>
                <li class="nav-item  active">
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
    <h1 style="text-align:center; color:rgb(52, 48, 48)">How was the Ambience....!!Let's Review</h1>
    <h3 style="text-align:center; color:rgb(91, 87, 87)">Please provide us feedback, we'd love to hear from you !</h3>
    <br>
    <form method="POST" class="mx-5"  style = "position:relative; left:80px; top:2px;">
        <h3>Name :</h3><input type="text" name="name" id="name" placeholder="Enter your name" required><br><br>
        <h3>Email : </h3><input type="email" name="email" id="email" placeholder="Enter your email"><br><br>

        <h3>Did you find Restaurent Decenet?: </h3><input type="radio" name="decenet"
            value="Yes" /> <h5 style="display:inline"> Yes</h5><br> <input type="radio" name="decenet" value="No" /> <h5 style="display:inline"> No</h5><br><br>

        <h3>Did you feel relaxing?: </h3><input type="radio" name="relax"
            value="Yes" /> <h5 style="display:inline"> Yes</h5><br> <input type="radio" name="relax" value="No" /> <h5 style="display:inline"> No</h5><br><br>

        <h3>Did you find table sitting and dinning formal? :</h3><input type="radio" name="dinning"
            value="Yes" /> <h5 style="display:inline"> Yes</h5><br> <input type="radio" name="dinning" value="No" /> <h5 style="display:inline"> No</h5><br><br>
        
        <h3>Was Atmosphere Attractive and friendly?? : </h3><input type="radio" name="atmp"
            value="Yes" /> <h5 style="display:inline"> Yes</h5><br> <input type="radio" name="atmp" value="No" /> <h5 style="display:inline"> No</h5><br><br>     


        <h3>How did you find the lighting condition inside the restaurent? </h3><input type="radio" name="lighting" value="Pleasent">  <h5 style="display:inline"> Pleasent</h5><br> <input type="radio" name="lighting" value="Cool" /> <h5 style="display:inline"> Cool</h5><br> <input type="radio" name="lighting" value="Aggresive"/> <h5 style="display:inline"> Aggresive</h5><br> <input type="radio" name="lighting" value="Dim" /> <h5 style="display:inline"> Dim</h5><br><br>
            
        <h3>Rate your AC music experience: </h3><input type="radio" name="am" value="1" /> <h5 style="display:inline"> 1</h5><br> <input type="radio" name="am"
            value="2" /> <h5 style="display:inline"> 2</h5><br> <input type="radio" name="am" value="3" /> <h5 style="display:inline"> 3</h5><br> <input type="radio" name="am"
            value="4" /> <h5 style="display:inline"> 4</h5><br> <input type="radio" name="am" value="5" /> <h5 style="display:inline"> 5</h5> <br><br>    

        <h3>Did you find anything missinng....? :</h3> <textarea name="descr" cols="40" rows="5"
            placeholder="Enter Your text"></textarea><br><br>

        <h3>Overall Ambience: </h3><input type="radio" name="arating" value="1" /> <h5 style="display:inline"> 1</h5><br> <input type="radio" name="arating"
            value="2" /> <h5 style="display:inline"> 2</h5><br> <input type="radio" name="arating" value="3" /> <h5 style="display:inline"> 3</h5><br> <input type="radio" name="arating"
            value="4" /> <h5 style="display:inline"> 4</h5><br> <input type="radio" name="arating" value="5" /> <h5 style="display:inline"> 5</h5> <br><br>

        <input type="submit" name="submit" value="submit"> <input type="reset" value="reset"><br><br>

    </form>


</body>

</html>