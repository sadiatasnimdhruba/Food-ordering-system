<?php
$url="http://localhost/restaurant/";

$userid=$_GET['userid'];
$sql1="SELECT * FROM orders order by id desc";
  $result1=mysqli_query($conn,$sql1);
  $std1=mysqli_fetch_assoc($result1);


  $res=mysqli_query($conn,"SELECT userid,name FROM users where userid=$userid");
  $userdata=mysqli_fetch_assoc($res);
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

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <title>Food order</title>

  </head>
  <body>
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #5e1e1e!important">
      <div class="container">
        <div class="col-lg-4">
       <img class="navbar-brand" src="<?php echo $url;?>images/logo.png" width="80" height="70">
    <br>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
    <div class="collapse navbar-collapse col-lg-7" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-end">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?php echo $url;?>index.php?userid=<?php echo $userdata['userid'];?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?php echo $url;?>index.php?userid=<?php echo $userdata['userid'];?>"> About us</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo $url;?>index.php?userid=<?php echo $userdata['userid'];?>"> Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $url;?>user/vieworder.php?id=<?php echo $std1['id'].'&userid='.$userdata['userid'];?>"> View order</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            More
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Help</a></li>
            <li><a class="dropdown-item" href="<?php echo $url;?>login&registration/logout.php">logout</a></li>
            
          </ul>
        </li>
        
      </ul>

    </div>
    <div class="col-lg-1 text-light">Login as<br>
      <span style="font-size: 10px;"><?php echo $userdata['name']; ?></span>
    </div>
    <div class="col-lg-1 text-light">
      <i class="fa fa-user fa-3x"></i>
    </div>
</div>
</nav>
</hr>