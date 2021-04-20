<?php
session_start();


if(!isset($_SESSION['login']))
{
  $_SESSION['warning']=1;
 header("Location: http://localhost/restaurant/login&registration/login.php");
  die();
}


$url="http://localhost/restaurant/";

$id= $_GET['id'];
$conn=mysqli_connect('localhost','root','dhruba0004','restaurant');
if($conn)
{
  $sql="SELECT * FROM categories where id=$id";
  $result=mysqli_query($conn,$sql);

  $std=mysqli_fetch_assoc($result);

}

?>

<?php include('header.php'); ?><br><br><br><br><br>

    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a class="btn btn-info mb-2" href="categories.php">Category list</a>
          <br><br><br><br><br>
          <img src="<?php echo $url; ?>images/foodform.png" style="float: left; width:280px;height:300px">
        </div>
        <div class="col-md-9">
           <?php if(isset($_SESSION['error'])){?>
          <div class="alert alert-warning">
            <strong>Failed!</strong> Something wrong.
          </div>
        <?php }?>
          <h2>Edit category information</h2>
          <hr>
          <form action="categoryedit1.php?id=<?php echo $id ?>" method="POST" enctype="multipart/form-data">
         
            <div class="form-group">
              <label>Category Title :</label>
              <input required type="text" class="form-control" name="title" placeholder="Category title" value="<?php echo $std['title'] ?>">
            </div>
              <div class="form-group">
             <label for="title">Image:</label>
             <input type="file" class="form-control"  name="image"><br>
             <img src="../<?php echo $std['image']; ?>" width="200">
            </div><br>
           <button type="submit" class="btn btn-primary">Submit</button><br><br><br><br>
          </form>
       
        </div>
      </div>
    </div>

   

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


  </body>
</html>