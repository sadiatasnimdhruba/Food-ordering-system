<?php

session_start();

if(!isset($_SESSION['login']))
{
  $_SESSION['warning']=1;
 header("Location: http://localhost/restaurant/login&registration/login.php");
  die();
}

$url="http://localhost/restaurant/";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="<?php echo $url;?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo $url;?>style.css" rel="stylesheet">


    <title>Food order</title>

  </head>
  <body>
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #5e1e1e!important">
      <div class="container">
        <div class="col-lg-4">
       <img class="navbar-brand" src="<?php echo $url;?>images/admin.png" width="120" height="70">
    <br>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
    <div class="collapse navbar-collapse col-lg-7" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-end">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="categories.php"> Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="foods.php"> Foods</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="orders.php"> Orders</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            More
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?php echo $url;?>login&registration/login.php">logout</a></li>
            <li><a class="dropdown-item" href="<?php echo $url;?>login&registration/userlogin.php"> User</a></li>
          </ul>
        </li>
        
      </ul>

    </div>
    <div class="col-lg-1 text-light">Login as<br>
      <span style="font-size: 20px;">Admin</span>
    </div>
    <div class="col-lg-1 text-light">
      <i class="fa fa-user fa-3x"></i>
    </div>
</div>
</nav>
</hr>