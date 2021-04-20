<?php
session_start();
$email=$_POST['email'];
  $password=$_POST['password'];

  $conn=mysqli_connect('localhost','root','dhruba0004','restaurant');
if(isset($_POST['submit1']))
{
  $query="SELECT * from users where email='$email'";
   $result=mysqli_query($conn, $query);

   $count=mysqli_num_rows($result);
   if($count > 0)
   {
    while($row=mysqli_fetch_assoc($result))
    {
      $subject="Password recovery :";
      $body="Your password is :".$row['password'];
      $headers="From: stasnim416@gmail.com";
      if(mail($email,$subject,$body,$headers))
      {
        
        $_SESSION['recover']=$email;
        header("Location: userlogin.php");
      }
      else
      {
        echo "Your password recovered failed!";
      }
    }
   }
   else
   {
    $_SESSION['fail']=true;
    header("Location: userlogin.php");
   }

  die();
}
  
  

  $sql="SELECT * from users where email='$email' and password='$password'";

   $result=mysqli_query($conn, $sql);
   $dat=mysqli_fetch_assoc($result);
   $userid=$dat['userid'];
   $rowcount=mysqli_num_rows($result);
   if($rowcount==1)
   {
   	 $_SESSION['login']=true;
   	 header("Location: ../index.php?userid=".$userid);
   }
   else
   {
   	 $_SESSION['error']=true;
   	header("Location: userlogin.php");
   }
   ?>