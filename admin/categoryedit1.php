<?php 

session_start();

$url="http://localhost/restaurant/";

      $id=$_GET['id'];
      
      $image='';
    $title=$_POST['title'];


    $conn=mysqli_connect('localhost','root','dhruba0004','restaurant');

    $sql="UPDATE categories SET title='$title'";

    if(!empty($_FILES['image']['name']))
{
  $rand=rand(111,9999999);

$image='uploads/'.$rand.$_FILES['image']['name'];
$upload='../uploads/'.$rand.$_FILES['image']['name'];
  
  move_uploaded_file($_FILES['image']['tmp_name'], $upload);

   $sql.= ", image = '$image' ";
  if(!empty($std['image']))
  {
    unlink('../'.$std['image']);
  }
}

    $sql.="where id='$id'";

    if(mysqli_query($conn,$sql))
    {
        $_SESSION['success1']=1;
    	header("Location: categories.php");
        
    }
    else
    {
         $_SESSION['error']=1;
    	header("Location: categoryedit.php?id=".$id);
    }
?>