<?php
session_start();

$url="http://localhost/restaurant/";
$conn=mysqli_connect('localhost','root','dhruba0004','restaurant');
$sql="SELECT * from orders order by id desc";
$result=mysqli_query($conn,$sql);
?>


<?php include('header.php'); ?><br><br><br><br><br><br>
<div class="container">
 
    <a class="btn btn-info mb-2" href="<?php echo $url;?>admin/index.php">Back to home </a><br>

 
  
  <br><br>

 
  

         
        <?php if(isset($_SESSION['success4'])){?>
          <div class="alert alert-success">
            <strong>Successfully updated!</strong>
          </div>
        <?php }?>

            <?php if(isset($_SESSION['error'])){?>
          <div class="alert alert-warning">
            <strong>Failed!</strong> Something wrong.
          </div>
        <?php }?>

    <table class="table">
            <thead>
              <th>Order ID</th>
              <th>Food name</th>
              <th>Price</th>
              <th>Quanity</th>
              <th>Total</th>
              <th>Order date</th>
              <th>Customer Name</th>
              <th>Customer contact</th>
              <th>Customer email</th>
              <th>Customer address</th>
              <th>Status</th>
              
     

            </thead>
            <tbody>
              <?php 
                 while($row=mysqli_fetch_assoc($result))
                 {?>
              <tr>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['food']?></td>
                <td><?php echo $row['price']."/="?></td>
                <td class="text-center"><?php echo $row['quantity']?></td>
                <td><?php echo $row['total']."/="?></td>
                <td><?php echo $row['order_date']?></td>
                <td><?php echo $row['customer_name']?></td>
                <td><?php echo $row['customer_phone']?></td>
                <td><?php echo $row['customer_email']?></td>
                <td><?php echo $row['customer_address']?></td>
                <td><?php echo $row['status']?></td>
                <td><a class="btn btn-danger mb-2" href="editorder.php?id=<?php echo $row['id'];?>"><i class="fa fa-biking"></i>Update status</a></td>
               

              </tr>

                <?php  }
                ?>
            </tbody>
          </table>
  </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
<?php unset($_SESSION['success4']); ?>

<?php unset($_SESSION['error']); ?>

