<?php
session_start();
$conn=mysqli_connect('localhost','root','dhruba0004','restaurant');
if($conn)
{
  $sql="SELECT * fROM users";
  $result=mysqli_query($conn,$sql);

}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Food order</title>
    <style>
      
        body{
      display: flex;
      flex-direction: column;
      height: 100vh;
      align-items: center;
      background-image: url('../images/login.jpg');
      background-size: cover;
      background-position: top center;
      font-family: sans-serif;
  }
.form-control
{
 background-color: #d6dcff;
     border: 1.5px solid #09427c;


  }
  hr
  {
    color: #0d0f1a;
    padding: 1.2px;
  }

  label{
      background-color: #d5faff;
    color: #080858;
    border-radius: 5px;
    font-weight: bold;
    padding: 5px;
    margin: 10px 0;
}
h2
{
      font-weight: bold;
    color: #06075e;
}
.link
{
  margin:0 10px;
}

    </style>
  
  </head>
  <body>
    <br><br><br>

    <div class="container">
      <div class="row">
         <div class="col-md-3">
          <a class="btn btn-info mb-2" href="../index.php">Back to home</a><br>
          
        </div>
        <div class="col-md-6 mt-4">

             <?php if(isset($_SESSION['error'])) { ?>
          <div class="alert alert-warning">
            <strong>Warning!</strong> Wrong email address and password.
          </div>
        <?php } ?>

             <?php if(isset($_SESSION['regi_msg'])) { ?>
          <div class="alert alert-success">
            <strong>Registration successfully! </strong><?php echo $_SESSION['regi_msg']; ?>
          </div>
        <?php } ?>


          <h2>Login</h2>
          <hr>
          <form action="confirmlogin.php" method="POST">
            <div class="form-group">
              <label>Email :</label><br>
              <input required type="email" class="form-control" name="email" placeholder="Email address">
            </div><br>
                    <div class="form-group">
              <label>Password :</label><br>
              <input required type="password" class="form-control" name="password" placeholder="Type a password">
            </div><br><br>
           <button type="submit" class="btn btn-success link">Submit</button>
          </form>
       
        </div>
      </div>
    </div>

   

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


  </body>
</html>
<?php unset($_SESSION['error']); ?>
<?php unset($_SESSION['regi_msg']); ?>
<?php unset($_SESSION['error_msg']); ?>