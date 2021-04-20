<?php

session_start();

$id=$_GET['id'];
$conn=mysqli_connect('localhost','root','dhruba0004','restaurant');
if($conn)
{
  $sql="DELETE FROM foods where id=$id";
  if(mysqli_query($conn,$sql))
    {
      $_SESSION['success']=1;
      header("Location: foods.php")  ;

    }
      else
    {
         $_SESSION['error']=1;
    	header("Location: foods.php?");
    }

}

?>