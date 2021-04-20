<?php 
session_start();
$id=$_GET['id'];
$userid=$_GET['userid'];

$url="http://localhost/restaurant/";

 $conn=mysqli_connect('localhost','root','dhruba0004','restaurant');




      $sql1="SELECT * from foods where id=$id";
      $result=mysqli_query($conn,$sql1);
      $row=mysqli_fetch_assoc($result);


      $food=$row['name'];
      $price=$row['price'];
      $image=$row['image'];
      $quantity=$_POST['quantity'];
      $total=$quantity*$price;
      $order_date=date("Y-m-d h:i:sa");
      $status="Ordered";

    $customer_name=$_POST['name'];
    $customer_phone=$_POST['phone_number'];
    $customer_email=$_POST['email'];
    $customer_address=$_POST['address'];
    

   
    $sql2="INSERT INTO orders VALUES (NULL,'$food','$image','$price','$quantity','$total','$order_date','$status',
    '$customer_name','$customer_phone','$customer_email','$customer_address')";
     
    $result1=mysqli_query($conn,$sql2);


      $sql3="SELECT * fROM orders order by id desc";
      $result3=mysqli_query($conn,$sql3);
      $data=mysqli_fetch_assoc($result3);
      $p=$data['id'];


    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers.="From: stasnim416@gmail.com";

    $subject="Order confirmation ";
    $body='<p>Hi '.$customer_name.',<br>Your '.$quantity.' '.$food.' order is confirmed!!<br>
                  Please <a href="http://localhost/restaurant/user/vieworder.php?id='.$p.'" >click here</a> to check your order</p>';

     if(mail($customer_email, $subject, $body, $headers))
      {
      if($result1==true)
    {
        $_SESSION['success']=1;
         
        header("Location: ../index.php?userid=".$userid);
    }
  }
    else
    {
        $_SESSION['error']=1;
        header("Location: ../index.php");

    }
?>