<?php
session_start();

$url="http://localhost/crud/";

$conn=mysqli_connect('localhost','root','dhruba0004','restaurant');
if($conn)
{
  $sql="SELECT * fROM foods";
  $result=mysqli_query($conn,$sql);

}

?>

<?php include('header.php'); ?><br><br><br><br><br><br>

    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a class="btn btn-info mb-2" href="foods.php">Food list</a><br><br><br><br><br>
          <img src="<?php echo $url; ?>images/foodform.png" style="float: left; width:280px;height:300px">
        </div>
        <div class="col-md-9">
             <?php if(isset($_SESSION['error'])){?>
          <div class="alert alert-warning">
            <strong>Failed!</strong> Something wrong.
          </div>
        <?php }?>
          <h2> Add new food</h2>
          <hr>
          <form action="foodsstore.php" method="POST" enctype="multipart/form-data">
            
            <div class="form-group">
              <label>Food name :</label>
              <input required type="text" class="form-control" name="name" placeholder="Food name">
            </div>
            <div class="form-group">
              <label>Category ID :</label>
              <input required type="text" class="form-control" name="category_id" placeholder="Category id">
            </div>

            <div class="form-group">
              <label>Category title :</label>
              <input required type="text" class="form-control" name="category_name" placeholder="Category title">
            </div>
            <div class="form-group">
              <label>Description :</label>
              <input required type="text" class="form-control" name="description" placeholder="Description">
            </div>
            <div class="form-group">
              <label>Food price:</label>
              <input required type="text" class="form-control" name="price" placeholder="food price">
            </div>
             <div class="form-group">
              <label>Image :</label>
              <input required type="file" class="form-control" name="image">
            </div><br>
          
             <br>
           <button type="submit" class="btn btn-primary">Submit</button><br><br><br>
        
          </form>
        
       
        </div>
      </div>
    </div>

   

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


  </body>
</html>
<?php unset($_SESSION['error']); ?>