<?php 

 	session_start();
   $name=$_POST['name'];
   $email=$_POST['email'];
   $password=$_POST['password'];
   $confirmpassword=$_POST['confirm_password'];

   if(strlen($password)<5)
   {
    $_SESSION['error_msg']="Your password must be at least 5 characters!";
    header("Location: registration.php");
    die();
   }

   if($password != $confirmpassword)
   {
  
   	$_SESSION['error_msg']="Password didn't match!";
   	header("Location: registration.php");
   }
   else{

   $conn=mysqli_connect('localhost','root','dhruba0004','restaurant');

     $sql1="SELECT * from users where email='$email'";

   $result1=mysqli_query($conn, $sql1);

   $rowcount=mysqli_num_rows($result1);

     if($rowcount==1)
   {
  
   	 $_SESSION['error_msg']="Account already exists!";
   	 header("Location: registration.php");
   }
   else{

   $sql="INSERT INTO users values(NULL,'$name','$email','$password')";
  

   $headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers.="From: stasnim416@gmail.com";

      $subject="Verify your email ";
       $body='<p>Hi '.$name.',<br>Please <a href="http://localhost/restaurant/login&registration/verifylogin.php">click here</a> to verify
       your email address</p>';
       

      if(mail($email, $subject, $body, $headers))
      {

            if(mysqli_query($conn,$sql))
   {
   
        $_SESSION['regi_msg']=" Please verify your email address!";
        $_SESSION['verify']=" Your email is verified! Please login.";
        header("Location: registration.php");
        echo "hi";
   }
   else{
    echo "hi";
   }

      }

  
}

}
   ?>