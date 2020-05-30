<?php
include 'incl.php';
?>
<!DOCTYPE>
<head>
<title>The Newspaper</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/font/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="assets/font/font.css" />
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="screen" />
<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="assets/css/responsive.css" media="screen" />
<link rel="stylesheet" type="text/css" href="assets/css/jquery.bxslider.css" media="screen" />
</head>
<body>
<div class="body_wrapper">
  <div class="center">
    <div class="header_area">
      <div class="logo floatleft">
        <h2>The Newspaper</h2>
      </div>
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
        <li><a href="#">HOME</a></li>
        <li><a href="sports.php">SPORTS</a></li>
        <li><a href="tec.php">TECNOLOGY</a></li>
        <li><a href="enter.php">ENTAIRMENT</a></li>
        <li><a href="style.php">LIFESTYLE</a></li>   
    </div>
     <div class="slider_area">
      <div class="slider">
        <ul class="bxslider">
          <li><img src="images/21.jpg" alt="" title="" /></li>
          <li><img src="images/45.jpg" alt="" title="3 Major Bridges by Early Next Year: Dhaka-Ctg highway awaits relief" /></li>
          <li><img src="images/49.jpg" alt="" title="" /></li>
        </ul>
      </div>
    </div>
    <div class="content_area">
      <div class="main_content floatleft">
        <div class="left_coloum floatleft">
          <div class="single_left_coloum_wrapper">
          <h2 class="title">TODAYS LAST NEWS</h2>
          <?php
            $sql="SELECT * FROM news ORDER BY id DESC LIMIT 3";
            $t=$m->query($sql);
            while ($s=$t->fetch_assoc()) {
          ?>
            <a class="more" href="#">more</a>
            <div class="single_left_coloum floatleft"> <img src="news/upload/<?php  echo $s['img'];?>" alt="" />
                <h3><?php echo $s['caption'];?></h3>
                <p><?php echo $s['deatils'];?></p>
                <a class="readmore" href="#">read more</a> 
            </div>
              <?php
                }
              ?>
              
          </div>

          <div class="single_left_coloum_wrapper">
            <h2 class="title">international</h2>
          <?php
            $sql="SELECT * FROM international ORDER BY id DESC LIMIT 3";
            $t=$m->query($sql);
            while ($s=$t->fetch_assoc()) {
          ?>
            <a class="more" href="#">more</a>
            <div class="single_left_coloum floatleft">
             <img src="international/upload/<?php echo $s['img']; ?>" alt="" />
              <h3><?php echo $s['caption'];?></h3>
              <p><?php echo $s['deatils'];?></p>
              <a class="readmore" href="#">read more</a> 
            </div>
              <?php
                }
              ?>
          </div>
          <div class="single_left_coloum_wrapper gallery">
            <h2 class="title">gallery</h2>
            <a class="more" href="#">more</a> 
            <?php
            $sql="SELECT * FROM gallery ORDER BY id DESC LIMIT 6";
            $t=$m->query($sql);
            while ($s=$t->fetch_assoc()) {
            ?>
            <img src="gallery/upload/<?php echo $s['img']; ?>" alt="" /> 
            <?php
            }
           ?>
           </div>

           <div class="right_coloum floatright">
          <div class="single_right_coloum">
            </div>

          </div>

          </div>

      </div>

      <div class="sidebar floatright">
        <div class="single_sidebar">
          <h2 class="title">ADD</h2>
          <?php
            $sql="SELECT * FROM addv ORDER BY id DESC LIMIT 2";
            $t=$m->query($sql);
            while ($s=$t->fetch_assoc()) {
          ?>
          <img src="addv/upload/<?php echo $s['img']; ?>" alt="" /> 
          </div>
          <?php
            }
          ?>
      </div>
    </div>
    <div class="footer_top_area">
      <div class="inner_footer_top"></div>
    </div>
    <div class="footer_bottom_area">
      <div class="footer_menu">
        <ul id="f_menu">
          <li><a href="http://www.bbc.com/news/world">world news</a></li>
          <li><a href="https://www.bbc.com/sport">sports</a></li>
          <li><a href="http://www.bbc.com/news/technology">tech</a></li>
          <li><a href="http://www.bbc.com/news/business">business</a></li>
          <li><a href="https://www.movies.com">Movies</a></li>
          <li><a href="https://news.sky.com/entertainment">entertainment</a></li>
          <li><a href="https://www.thedailystar.net/supplements/independence-day-special-2017/bangladesh-the-goal-culture-and-civilisation-1381243">culture</a></li>
          <li><a href="https://www.theguardian.com/world/2015/nov/02/bangladesh-publishers-burn-books-protest-secularist-murders">Books</a></li>
          <li><a href="https://bdnews24.com/classifieds/">classifieds</a></li>
          <li><a href="https://enblog.mukto-mona.com/">blogs</a></li>
        </ul>
      </div>
      <div class="copyright_text">
        <p>Copyright &copy; 2018 The News paper. All rights reserved | Design by <a target="_blank" rel="nofollow">Sabbir Biswas</a></p>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="assets/js/jquery-min.js"></script> 
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="assets/js/jquery.bxslider.js"></script> 
<script type="text/javascript" src="assets/js/selectnav.min.js"></script> 
<script type="text/javascript">
selectnav('nav', {
    label: '-Navigation-',
    nested: true,
    indent: '-'
});
selectnav('f_menu', {
    label: '-Navigation-',
    nested: true,
    indent: '-'
});
$('.bxslider').bxSlider({
    mode: 'fade',
    captions: true
});
</script>
</body>
</html>