<?php
session_start();

$url="http://localhost/restaurant/";
$conn=mysqli_connect('localhost','root','dhruba0004','restaurant');

 if (isset($_GET['q']))
  {
    $q = $_GET['q'];
    $sql="SELECT * fROM foods where name LIKE '%$q%' or id='$q'";
  }
  else{
   $sql="SELECT * from foods";
 }
$result=mysqli_query($conn,$sql);
?>


<?php include('header.php'); ?><br><br><br><br><br>

<div class="container row">
   <h2 class="text-center">All foods</h2>

  <div class="col-md-2">
    <a class="btn btn-info mb-2" href="<?php echo $url;?>admin/index.php">Back to home </a><br>
    
  </div>
  <div class="col-md-10">
  	<a class="btn btn-info pull-right" href="<?php echo $url;?>admin/foodsinsert.php">Add new food</a><br><br>
    <div class="row">
      <div class="col-md-2">
      </div>
          <div class="col-md-6">
               <form class="my-4">
              <div class="input-group">
                <input required type="text" name="q" class="form-control" placeholder="search....">
                <div class="input-group-append" style="margin-left:12px;">
                  <button type="submit" class="btn btn-info"><i class="fa fa-search"></i> Search</button>
                </div>
              </div>
            </form>
          </div>
        </div>

  	<?php if(isset($_SESSION['success'])){?>
          <div class="alert alert-success">
            <strong>Successfully deleted!</strong>
   
          </div>
        <?php }?>
        <?php if(isset($_SESSION['success1'])){?>
          <div class="alert alert-success">
            <strong>Successfully updated!</strong>
   
          </div>
        <?php }?>

         <?php if(isset($_SESSION['success3'])){?>
          <div class="alert alert-success">
            <strong>Successfully added a new food!</strong>
   
          </div>
        <?php }?>

            <?php if(isset($_SESSION['error'])){?>
          <div class="alert alert-warning">
            <strong>Failed!</strong> Something wrong.
          </div>
        <?php }?>

    <table class="table">
            <thead>
              <th>Food ID</th>
              <th>Food name</th>
              <th>Category title</th>
              <th>Description</th>
              <th>Price</th>
              <th>Image</th>
              <th class="text-center">Action</th>

            </thead>
            <tbody>
              <?php 
                 while($row=mysqli_fetch_assoc($result))
                 {?>
              <tr>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['category_name']?></td>
                <td><?php echo $row['description']?></td>
                <td><?php echo $row['price']."/="?></td>
                <td><img src="<?php echo $url.$row['image']?>" width="150px" height="100px"></td>
                <td class="text-center">
                  <a class="btn btn-info mb-2" href="foodsedit.php?id=<?php echo $row['id'];?>"><i class="fa fa-edit"></i> Edit</a>
                  <a class="btn btn-danger mb-2" onclick="return confirm('Are you sure?')" href="foodsdelete.php?id=<?php echo $row['id'];?>"><i class="fa fa-trash"></i> Delete</a>
                </td>

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

<?php unset($_SESSION['success']); ?>
<?php unset($_SESSION['success1']); ?>
<?php unset($_SESSION['success3']); ?>
<?php unset($_SESSION['error']); ?>