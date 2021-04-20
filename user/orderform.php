<?php

$id=$_GET['id'];

$url="http://localhost/restaurant/";

session_start();
if(!isset($_SESSION['login']))
{
  $_SESSION['warning']=1;
 header("Location: http://localhost/restaurant/login&registration/userlogin.php");
  die();
}

$conn=mysqli_connect('localhost','root','dhruba0004','restaurant');
$sql="SELECT foods.*,categories.title as categoryTitle
 FROM foods 
 Join categories on foods.category_id=categories.id
 where foods.id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

?>


<?php include('../include/header.php'); ?><br><br><br><br><br>
<style>
  .form-control
{
 background-color: #f4f4f4;
     border: 1.5px solid #474a4b;


  }
  hr
  {
    color: #0d0f1a;
    padding: 1.2px;
  }

  label{
      background-color: #e5e5e5;
    color: #1c0000;
    border-radius: 5px;
    font-weight: bold;
    padding: 5px;
    margin: 10px 0;
}
</style>
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a class="btn btn-info mb-2" href="<?php echo $url; ?>index.php"><i class="fa fa-arrow-alt-circle-left"></i>Back</a>
          <br><br><br><br><br>
          <img src="<?php echo $url; ?>images/foodform.png" style="float: left; width:280px;height:300px">
        </div>
        <div class="col-md-9">
  
            
            <h4>Selected food : </h4>
            <div class="row">
            	<div class="col-md-2">
            <img src="<?php echo $url.$row['image'] ?>" width="100px" height="100px"></div>
            <div class="col-md-10">
            	<h4>Food Title:</h4>
            	<h5><?php echo $row['name']?></h5>
            	<h5>Price : <?php echo $row['price']?>/=</h5> 
            </div>
        </div>
         
            <br><br>
          <h2> Fill up this form to confirm your order</h2>
          <hr>
          <form action="store.php?id=<?php echo $row['id'].'&userid='.$userdata['userid'];?>" method="POST">
             <div class="form-group">
            <div class="form-group">
              <label>Full name :</label>
              <input required type="text" class="form-control" name="name" placeholder="Enter your full name">
            </div>
                 <div class="form-group">
              <label>Phone number :</label>
              <input required type="text" class="form-control" name="phone_number" placeholder="Phone number">
            </div>
            <div class="form-group">
              <label>Email address :</label>
              <input required type="text" class="form-control" name="email" placeholder="Email Address">
            </div>
            <div class="form-group">
              <label>Address :</label>
             <!-- <input required type="text" class="form-control" name="address" placeholder="Address">-->
             <textarea name ="address" class="form-control" placeholder="Enter your address" rows="5" cols="130"></textarea>

            </div>
                   <div class="form-group">
              <label>Food quantity :</label>
              <input required type="number" class="form-control" name="quantity" placeholder="Select a number">
            </div>
          
             <br>
           <button type="submit" class="btn btn-primary">Confirm order</button><br><br><br>
        
          </form>
        
       
        </div>
      </div>
    </div>
</div>
</div>
</div>


   <?php include('../include/footer.php'); ?>