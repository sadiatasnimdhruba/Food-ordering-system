<?php

$id=$_GET['id'];
$url="http://localhost/restaurant/";
$conn=mysqli_connect('localhost','root','dhruba0004','restaurant');
$sql="SELECT foods.*,categories.title as categoryTitle
 FROM foods 
 Join categories on foods.category_id=categories.id
 where categories.id=$id";
$result=mysqli_query($conn,$sql);

?>


<?php include('header.php'); ?>
<br><br><br><br><br><br>

<div class="container row">
  <div class="col-md-2">
    <a class="btn btn-info" href="index.php">Back to home</a>
  </div>
  <div class="col-md-10"><br><br>
    <table class="table">
            <thead>
              
              <th>Food name</th>
              <th>Description</th>
              <th>Price</th>
              <th>Image</th>

            </thead>
            <tbody>
              <?php 
                 while($row=mysqli_fetch_assoc($result))
                 {?>
              <tr>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['description']?></td>
                <td ><?php echo $row['price']?></td>
                <td><img src="<?php echo $url.$row['image']?>" width="100px" height="100px"></td>
             
              </tr>

                <?php  }
                ?>
            </tbody>
          </table>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>