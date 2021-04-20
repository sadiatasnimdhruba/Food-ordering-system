<?php


$url="http://localhost/restaurant/";


$id= $_GET['id'];
$userid= $_GET['userid'];
$conn=mysqli_connect('localhost','root','dhruba0004','restaurant');
if($conn)
{
  $sql="SELECT * FROM orders where id=$id";
  $result=mysqli_query($conn,$sql);
  $std=mysqli_fetch_assoc($result);

  $sql10="SELECT id as userid,name FROM users where id=$userid";
  $result10=mysqli_query($conn,$sql10);

  


}

?>

<?php include('../include/header.php'); ?><br><br><br><br><br>

 <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a class="btn btn-info mb-2" href="<?php echo $url; ?>index.php">Back</a>
            <br><br><br><br><br>
          <img src="<?php echo $url; ?>images/foodform.png" style="float: left; width:250px;height:250px">
        </div>
        <div class="col-md-9">
          <h2>Your last order</h2>
          <hr>
          <table class ="table">
            <tr>
              <th>Image :</th>
              <td><img src="../<?php echo $std['image'] ;?>" width="250" height="230"></td>
          </tr>
         
            <tr>
            <th class="text-right" width="150">Food name :</th>
            <td><?php echo $std['food'];?></td>
          </tr>
            <tr>
            <th class="text-right" width="150">Price :</th>
            <td><?php echo $std["price"];?></td>
          </tr>
            <tr>
            <th class="text-right" width="150">Quantity :</th>
            <td><?php echo $std["quantity"];?></td>
          </tr>
           <tr>
            <th class="text-right" width="150">Total :</th>
            <td><?php echo $std["total"];?></td>
          </tr>
                 <tr>
            <th class="text-right" width="150">Order Date :</th>
            <td><?php echo $std['order_date'];?></td>
          </tr>
          
               <tr>
            <th class="text-right" width="150">My name :</th>
            <td><?php echo $std["customer_name"];?></td>
          </tr>
            <tr>
            <th class="text-right" width="150">My phone number :</th>
            <td><?php echo $std["customer_phone"];?></td>
          </tr>

            <tr>
            <th class="text-right" width="150">My Email : </th>
            <td><?php echo $std["customer_email"];?></td>
          </tr>
          <tr>
            <th class="text-right" width="150">My Address :</th>
            <td><?php echo $std["customer_address"];?></td>
          </tr>
          <tr>
            <th class="text-right" width="150">Status :</th>
            <td><?php echo $std['status'];?></td>
          </tr>


          </table>
  
        </div>
      </div>
    </div><br><br><br>


<?php include('../include/footer.php'); ?>