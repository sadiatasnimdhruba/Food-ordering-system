<?php
session_start();

$url="http://localhost/restaurant/";

$id= $_GET['id'];
$conn=mysqli_connect('localhost','root','dhruba0004','restaurant');
if($conn)
{
  $sql="SELECT * FROM orders where id=$id";
  $result=mysqli_query($conn,$sql);

  $std=mysqli_fetch_assoc($result);

}

?>

<?php include('header.php'); ?><br><br><br><br><br><br>
<div class="container">

  

<h2>Update order status</h2>
          <hr>
          <form action="editorder1.php?id=<?php echo $std['id'];?>" method="POST">
          	
          	<h5>order Id: <?php echo $std['id']?></h5>
            <h4>Food Name: <?php echo $std['food']?></h4>
            <br>

            <div class="form-group">
              <label>Category Title :</label>
              <select name="status" class="form-control" style="width:35%">
                <option value="ordered">Ordered</option>
                <option value="on delivery">On delivery</option>
                <option value="delivered">Delivered</option>
                <option value="cancelled">Cancelled</option>
                  </select>
            </div><br><br>
             <button type="submit" name="submit" class="btn btn-primary">Update</button><br><br><br><br>
         </form>
        </div>

        
        </body>
        </html>
        
