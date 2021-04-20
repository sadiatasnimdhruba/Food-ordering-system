       <?php 

          $url="http://localhost/restaurant/";

          $id= $_GET['id'];
          $conn=mysqli_connect('localhost','root','dhruba0004','restaurant');
             if(isset($_POST['submit']))
             {
               $status=$_POST['status'];

               $sql2="UPDATE orders SET status='$status' where id=$id";

                 if(mysqli_query($conn,$sql2))
                {
                  $_SESSION['success4']=1;
    	          header("Location: orders.php");
        
                }
                 else
                {
                     $_SESSION['error']=1;
                   	header("Location: orders.php");
                 }
             }

        ?>