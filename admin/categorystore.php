<?php 
session_start();


$url="http://localhost/restaurant/";

$rand=rand(111,9999999);

$image='uploads/'.$rand.$_FILES['image']['name'];
$upload='../uploads/'.$rand.$_FILES['image']['name'];
  
  move_uploaded_file($_FILES['image']['tmp_name'], $upload);


    $title=$_POST['title'];


    $conn=mysqli_connect('localhost','root','dhruba0004','restaurant');
    $sql="INSERT INTO categories values(NULL,'$title','$image')";

    if(mysqli_query($conn,$sql))
    {
        $_SESSION['success2']=1;
        header("Location: categories.php");
    }
    else
    {
        $_SESSION['error']=1;
        header("Location: categoryinsert.php");

    }
?>