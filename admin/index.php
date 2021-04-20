<?php
$url="http://localhost/restaurant/";

 $conn=mysqli_connect('localhost','root','dhruba0004','restaurant');
 $count_categories=mysqli_query($conn,"SELECT * from categories");
 $total_categories=mysqli_num_rows($count_categories);
 $result=mysqli_query($conn,"SELECT * from categories");

  $count_foods=mysqli_query($conn,"SELECT * from foods");
 $total_foods=mysqli_num_rows($count_foods);

 $count_orders=mysqli_query($conn,"SELECT * from orders");
 $total_orders=mysqli_num_rows($count_orders);

?>

<?php include('header.php'); ?><br><br><br><br>
<style>
	.panel-heading
{
  border-top-left-radius: 13px;
  border-top-right-radius: 13px;
  color:#fff;
  background-image:  linear-gradient(rgb(255 7 7 / 44%), rgb(75 0 0));
}
.panel-footer
{
   border:2px solid #700000;
   border-bottom-left-radius: 13px;
   border-bottom-right-radius: 13px;
}
h4
{
    box-shadow: 0px 0px 8px 2px rgb(0 0 0 / 20%);
    border-radius: 5px;
    
}
h1
{
color: #d30000!important;
}
</style>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-2">
</div>
<div class="col-sm-9">
  <div class="content">
    <h1><i class="fa fa-dashboard"></i> Dashboard <small>Statistics overview</small></h1><br>
      
    <h4 class=" bg-light p-3"><i class="fa fa-dashboard"></i> Dashboard</h4>
    <br>

  <div class="row">
    <div class="col-sm-4 mb-3">
      <div class="panel">
        <div class="panel-heading p-2">
          <div class="row">
            <div class="col-xs-3"><img src="<?php echo $url;?>images/cat.png" style="border-radius:50%" width="100px" height="100px">
              <p class="pull-right" style="font-size: 45px"><?php echo $total_categories;?></p>
            </div>
            <div class="col-xs-9">
              
              <div class="clearfix"></div>
              <div class="pull-right">All categories</div>
            </div>
          </div>
        </div>
        <a href="<?php echo $url; ?>admin/categories.php">
        <div class="panel-footer bg-light p-2" style="color:#000;">
          <span class="pull-left">View All categories</span>
          <span class="pull-right"><i class="fa fa-arrow-circle-o-right fa-2x"></i></span>
            <div class="clearfix"></div>
        </div>
      </a>
      </div>
    </div>

        <div class="col-sm-4 mb-3">
      <div class="panel">
        <div class="panel-heading p-2">
          <div class="row">
            <div class="col-xs-3"><img src="<?php echo $url;?>images/1.png" width="100px" height="100px">
              <p class="pull-right" style="font-size: 45px"><?php echo $total_foods;?></p>
            </div>
            <div class="col-xs-9">
              
              <div class="clearfix"></div>
              <div class="pull-right">All foods</div>
            </div>
          </div>
        </div>
        <a href="<?php echo $url; ?>admin/foods.php">
        <div class="panel-footer bg-light p-2" style="color:#000;">
          <span class="pull-left">View All foods</span>
          <span class="pull-right"><i class="fa fa-arrow-circle-o-right fa-2x"></i></span>
            <div class="clearfix"></div>
        </div></a>
      </div>
    </div>

        <div class="col-sm-4 mb-3">
      <div class="panel">
        <div class="panel-heading p-2">
          <div class="row">
            <div class="col-xs-3"><img src="<?php echo $url;?>images/order.png" width="100px" height="100px">
              <p class="pull-right" style="font-size: 45px"><?php echo $total_orders;?></p>
            </div>
            <div class="col-xs-9">
              
              <div class="clearfix"></div>
              <div class="pull-right">All orders</div>
            </div>
          </div>
        </div>
        <a href="<?php echo $url; ?>admin/orders.php">
        <div class="panel-footer bg-light p-2" style="color:#000;">
          <span class="pull-left">View all orders</span>
          <span class="pull-right"><i class="fa fa-arrow-circle-o-right fa-2x"></i></span>
            <div class="clearfix"></div>

        </div></a>
      </div>
    </div><br>
  </div>
  <hr/>
</div>
</div>
</div>
</div>
<div class="container">
<h2 class="text-center"> Our Food Categories </h2>
          <p class="under text-center">---------------------<i class="fa fa-star"></i>---------------------</p>
          <br><br>
          <div class="row">
            <?php 
                 while($row=mysqli_fetch_assoc($result))
                 {?>
          <div class="col-md-3">
            <div class="service-item">
          <a href="food_item.php?id=<?php echo $row['id']; ?>"><img src="<?php echo $url.$row['image']; ?>" class="img-responsive" width="250px" height="250px" style="border-radius: 45%;">
            <h3><?php echo $row['title']; ?></h3></a>
           
              </div>
          </div>
        <?php  }
        ?>
        <br>
    </div>
</div>
<br><br><br>



<?php include('../include/footer.php'); ?>
