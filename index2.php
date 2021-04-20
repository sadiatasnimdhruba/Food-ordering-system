<?php

session_start();
$conn=mysqli_connect('localhost','root','dhruba0004','restaurant');
$sql="SELECT * fROM categories";
$result=mysqli_query($conn,$sql);


if(!isset($_SESSION['login']))
{
 include('include/homeheader.php');
}
else
{
  include('include/header.php'); 
}
?>

       <header class="masthead">
            
             
                    <div class="row align-items-center justify-content-center">
                    <div class="col-lg-10  ">
                      <h1 class="col text-light" style="margin-top:10px;font-size: 70px;">Food delivery service</h1>
                         <h1 class="col" style="color:#a6a3a3;">Welcome to our food network</h1>
                        <hr class="divider ml-2" />
                         <p style="font-size:23px;margin-left:15px;font-weight: 600;">
We are a food delivery service company. We provide food to your home<br> in a shortest possible time and cheaper rate. Our goal is to to deliver
<br> the best food to our customer</p>
                          <br>
                          <br>
                          
                    </div>
               
            </div>
        </header>

            <?php if(isset($_SESSION['success'])){?>
          <div class="alert alert-success">
            <strong>Successfully ordered!</strong> Check a confirmation message to your email.
            
          </div>
        <?php }?>

          <?php if(isset($_SESSION['error'])){?>
          <div class="alert alert-warning">
            <strong>Failed order!</strong> Something wrong.
          </div>
        <?php }?>

  <div class="container ri">
    <div class="mb-5" id="about" style="margin-top:90px;">
      <h2 class="text-center"> About Us </h2>
          <p class="under text-center">------------------<i class="fa fa-star"></i>------------------</p>
          <br><br>
          <div class="row">
            <div class="col-md-4">
              <div class="service-item">
                <img src="images/fastdelivery.png" width="230px" height="230px">
                <p>We know you are hungry and so, we are just couple of minutes away from your home!!! We deliver the best food in the shortest possible time. Just place your order, take a nap and open the door to receive your desired food!!</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="service-item">
                 <img src="images/good-food.jpg" width="230px" height="230px" style="border-radius: 50%;">
                 <p>No compromise with the food quality! We are here to serve you the best quality food in the cheapest rate. As a customer you will expect better quality of food, keeping this in mind, we will deliver the best one to your home!!!</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="service-item">
                <img src="images/cash.jpg" width="230px" height="230px" style="border-radius: 42%;">
                <p>Don’t want to take risk? Yes, we also don’t want you to take risk. Pay whenever you get the food in hand. So, we only support cash on delivery in our system. Order and enjoy your food without any risk!!!</p>
              </div>
            </div>

          </div>
          <h2 class="text-center"> Our Food Categories </h2>
          <p class="under text-center">---------------------<i class="fa fa-star"></i>---------------------</p>
          <br><br>
          <div class="row">
            <?php 
                 while($row=mysqli_fetch_assoc($result))
                 {?>
          <div class="col-md-3">
            <div class="service-item">
             <?php if(!isset($_SESSION['login']))
              { ?>
                   <a href="food_item.php?id=<?php echo $row['id']; ?>"><img src="<?php echo $url.$row['image']; ?>" class="img-responsive" width="250px" height="250px" style="border-radius: 45%;">
             <?php }
              else
              { ?>
          <a href="food_item.php?id=<?php echo $row['id'].'&userid='.$userdata['userid']; ?>"><img src="<?php echo $url.$row['image']; ?>" class="img-responsive" width="250px" height="250px" style="border-radius: 45%;">
          <?php } ?>
            <h3><?php echo $row['title']; ?></h3></a>
           
              </div>
          </div>
        <?php  }
        ?>
        <br>
    </div>


</div>
</div>
<?php include('include/footer.php'); ?>
<?php unset($_SESSION['success']); ?>
<?php unset($_SESSION['error']); ?>
