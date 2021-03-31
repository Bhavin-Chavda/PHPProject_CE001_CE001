<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
body {
    background-image: url('static/d.jpg');
    background-color: rgb(243, 144, 144);
    background-size: cover;
}
</style>
    <title>Index</title>
</head>


<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Welcome</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- <img src="static/s1.jpg" alt="Girl in a jacket" width="1550" height="600"> --><br>
    <h1 style="text-align: center; color:rgb(53, 35, 54)"><strong>Welcome to our Restaurent review management system</strong></h1>
    <h4 style="text-align: center;">Register Your self here</h4>
    <div class="text-center">
        <button type="submit" class="btn btn-primary" onclick="window.location.href='register.php'" style="background-color: rgb(44, 38, 236); /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;width: 200px;
        text-decoration: none;
        display: inline-block;
        font-size: 25px;"><strong>Register</strong></button>
    </div>
    <br>
    <h4 style="text-align: center;">Please, Login to visit our site</h4>
    <div class="text-center">
        <button type="submit" class="btn btn-primary" onclick="window.location.href='login.php'" style="background-color: rgb(44, 38, 236); /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;width: 200px;
        text-decoration: none;
        display: inline-block;
        font-size: 25px;"><strong>Login</strong></button>
    </div>
    <br>
    <h4 style="text-align: center;">Admin Panel</h4>
    <div class="text-center">
        <button type="submit" class="btn btn-primary" onclick="window.location.href='admin.php'" style="background-color: rgb(44, 38, 236); /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;width: 200px;
        text-decoration: none;
        display: inline-block;
        font-size: 25px;"><strong>AdminPanel</strong></button>
    </div>
</body>

</html>
