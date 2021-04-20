<?php
session_start();
  
  $email=$_POST['email'];
  $password=$_POST['password'];

  $conn=mysqli_connect('localhost','root','dhruba0004','restaurant');

  $sql="SELECT * from admin where email='$email' and password='$password'";

   $result=mysqli_query($conn, $sql);

   $rowcount=mysqli_num_rows($result);
   if($rowcount==1)
   {
   	 $_SESSION['login']=true;
   	 header("Location: ../admin/index.php");
   }
   else
   {
   	 $_SESSION['error']=true;
   	header("Location: login.php");
   }
   ?>