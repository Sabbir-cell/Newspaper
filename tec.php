<?php
include 'header.php';
?>
<body>
	<div class="body_wrapper">
  <div class="center">
    <div class="header_area">
      <div class="logo floatleft"><a href="#"><img src="images/logo.png" alt="" /></a></div>
      <div class="top_menu floatleft">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="contact/form.php">Contact us</a></li>
          <li><a href="login/login.php">Login</a></li>
        </ul>
      </div>
      <div class="social_plus_search floatright">
        <div class="social">
          <ul>
            <li><a href="https://twitter.com/login?lang=en" class="twitter"></a></li>
            <li><a href="https://www.facebook.com/" class="facebook"></a></li>
            <li><a href="https://en.oxforddictionaries.com/definition/feed" class="feed"></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="main_menu_area">
      <ul id="nav">
        <li><a href="index.php">HOME</a>
        <li><a href="sports.php">SPORTS</a>
        <li><a href="#">TECNOLOGY</a>
        <li><a href="enter.php">ENTAIRMENT</a>
        <li><a href="style.php">LIFESTYLE</a>
    </div>
     <div class="slider_area">
      <div class="slider">
        <ul class="bxslider">
          <li><img src="images/24.jpg" alt="" title="TECNOLOGY" /></li>
          <li><img src="images/25.jpg" alt="" title="TECNOLOGY" /></li>
          <li><img src="images/26.jpg" alt="" title="TECNOLOGY" /></li>
        </ul>
      </div>
    </div>
    <div class="content_area">
      <div class="main_content floatleft">
        <div class="left_coloum floatleft">
          <div class="single_left_coloum_wrapper">
            <h2 class="title">Today latest technologic news</h2>
            <?php
              $sql="SELECT * FROM tech ORDER BY id DESC LIMIT 3";
              $t=$m->query($sql);
              while ($s=$t->fetch_assoc()) {
            ?>
            <a class="more" href="#">more</a>
            <div class="single_left_coloum floatleft"> <img src="tecnology/upload/<?php  echo $s['img'];?>" alt="" />
              <h3><?php echo $s['caption'];?></h3>
              <p><?php echo $s['deatils'];?></p>
              <a class="readmore" href="#">read more</a> 
              </div>
            <?php
              }
            ?>
          	</div>
              </div>
                </div>
          <?php
          include 'footer.php';
          ?>

          <?php
          include 'slider2.php';
          ?>

          
</body>
</html>