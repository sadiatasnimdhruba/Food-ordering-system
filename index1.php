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
<style>


svg.intro {
  
  max-width: 800px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
 
}
svg.intro .text {
  display: none;
}
svg.intro.go .text {
  font-family: Arial, sans-serif;
  font-size: 20px;
  text-transform: uppercase;
  display: block;
}
svg.intro.go .text-stroke {
  fill: none;
  stroke: #51256f;
  stroke-width: 2.8px;
  stroke-dashoffset: -900;
  stroke-dasharray: 900;
  stroke-linecap: butt;
  stroke-linejoin: round;
  -webkit-animation: dash 2.5s ease-in-out forwards;
          animation: dash 2.5s ease-in-out forwards;
}
svg.intro.go .text-stroke:nth-child(2) {
  -webkit-animation-delay: 0.3s;
          animation-delay: 0.3s;
}
svg.intro.go .text-stroke:nth-child(3) {
  -webkit-animation-delay: 0.9s;
          animation-delay: 0.9s;
}
svg.intro.go .text-stroke-2 {
  stroke: #f6bdfa;
  -webkit-animation-delay: 1.2s;
          animation-delay: 1.2s;
}
svg.intro.go .text-stroke:nth-child(5) {
  -webkit-animation-delay: 1.5s;
          animation-delay: 1.5s;
}
svg.intro.go .text-stroke:nth-child(6) {
  -webkit-animation-delay: 1.8s;
          animation-delay: 1.8s;
}

@-webkit-keyframes dash {
  100% {
    stroke-dashoffset: 0;
  }
}

@keyframes dash {
  100% {
    stroke-dashoffset: 0;
  }
}
.reload {
  position: absolute;
  bottom: 15px;
  right: 15px;
  background: #fff;
  border: none;
  border-radius: 20px;
  outline: none !important;
  font-size: 11px;
  line-height: 1.5;
  padding: 8px 12px;
  text-transform: uppercase;
  z-index: 10;
  cursor: pointer;
  box-shadow: 0 6px 7px #350e4c;
  transition: all 0.1s cubic-bezier(0.67, 0.13, 0.1, 0.81);
}
.reload:hover {
  box-shadow: 0 4px 4px #350e4c;
  transform: translateY(1px);
}
.reload:active {
  box-shadow: 0 1px 2px #244B94;
  transform: translateY(2px);
}
.reload svg {
  vertical-align: middle;
  position: relative;
  top: -2px;
}
  </style>

       <header class="masthead">
            
             <svg class="intro" viewbox="0 0 200 86">
  <text text-anchor="start" x="10" y="30" class="text text-stroke" clip-path="url(#text1)">Where</text>
  <text text-anchor="start" x="10" y="50" class="text text-stroke" clip-path="url(#text2)">Ideas</text>
  <text text-anchor="start" x="10" y="70" class="text text-stroke" clip-path="url(#text3)">Begin.</text>
  <text text-anchor="start" x="10" y="30" class="text text-stroke text-stroke-2" clip-path="url(#text1)">Where</text>
  <text text-anchor="start" x="10" y="50" class="text text-stroke text-stroke-2" clip-path="url(#text2)">Ideas</text>
  <text text-anchor="start" x="10" y="70" class="text text-stroke text-stroke-2" clip-path="url(#text3)">Begin.</text>
  <defs>
    <clipPath id="text1">
      <text text-anchor="start" x="10" y="30" class="text">Where</text>
    </clipPath>
    <clipPath id="text2">
      <text text-anchor="start" x="10" y="50" class="text">Ideas</text>
    </clipPath>
    <clipPath id="text3">
      <text text-anchor="start" x="10" y="70" class="text">Begin.</text>
    </clipPath>
  </defs>
</svg>
<div>
  <button class="reload">
  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 92.33 92.33" style="enable-background:new 0 0 92.33 92.33;" xml:space="preserve">
<g>
  <path d="M70.598,16.753c-1.722-1.24-4.113-0.852-5.349,0.866c-1.242,1.716-0.853,4.113,0.865,5.35   c13.613,9.818,18.021,27.857,10.482,42.89c-4.082,8.138-11.088,14.202-19.726,17.066c-8.636,2.871-17.877,2.2-26.013-1.879   c-8.134-4.083-14.197-11.088-17.066-19.722c-2.866-8.642-2.197-17.877,1.886-26.014c4.958-9.89,14.458-16.779,25.413-18.429   c0.074-0.008,0.137-0.036,0.211-0.053l0.157,7.571c0.021,0.839,0.542,1.585,1.321,1.889c0.782,0.305,1.672,0.11,2.25-0.496   l10.904-11.379c0.794-0.828,0.764-2.142-0.062-2.933L44.492,0.577c-0.606-0.582-1.499-0.739-2.267-0.399   c-0.251,0.108-0.476,0.269-0.662,0.462c-0.372,0.389-0.585,0.919-0.579,1.479l0.151,7.212c-0.385-0.063-0.78-0.087-1.188-0.027   c-13.418,2.021-25.052,10.46-31.125,22.571C-1.499,52.451,6.85,77.584,27.424,87.901c5.989,3.005,12.362,4.429,18.646,4.429   c15.306,0,30.065-8.439,37.382-23.028C92.688,50.884,87.284,28.782,70.598,16.753z" fill="#404853"/></svg>  reload
</button>
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
<script>

  $(function() {
  $('.intro').addClass('go');

  $('.reload').click(function() {
    $('.intro').removeClass('go').delay(200).queue(function(next) {
      $('.intro').addClass('go');
      next();
    });

  });
})
</script>
<?php include('include/footer.php'); ?>
<?php unset($_SESSION['success']); ?>
<?php unset($_SESSION['error']); ?>
