<?php 
session_start();


$url="http://localhost/restaurant/";

$rand=rand(111,9999999);

$image='uploads/'.$rand.$_FILES['image']['name'];
$upload='../uploads/'.$rand.$_FILES['image']['name'];
  
  move_uploaded_file($_FILES['image']['tmp_name'], $upload);
  $conn=mysqli_connect('localhost','root','dhruba0004','restaurant');

     $category_id=$_POST['category_id'];
    $name=$_POST['name'];
    $category_name=$_POST['category_name'];
    $description=$_POST['description'];
    $price=$_POST['price'];

   
    $sql1="INSERT INTO foods values(NULL,$category_id,'$category_name','$name','$description',$price,'$image')";

    if(mysqli_query($conn,$sql1))
    {
        $_SESSION['success3']=1;
        header("Location: foods.php");
        
    }
    else
    {
        $_SESSION['error']=1;
        header("Location: foodsinsert.php");
        

    }
?>