<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <title>Page Under Development</title>
  <?php include("head.php"); ?>
</head>
<body class="collapsing_header">
  <header>
    <div class="container">
      <div class="navbar">
        <div class="navbar-inner"> 
          <?php include("logo.php"); ?>
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="nb_left pull-left"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></span> <span class="nb_right pull-right">menu</span> </a>
          <div class="nav-collapse collapse">
            <ul class="nav pull-right">
              <li><a href="index.php">Home</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Portfolio</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="contact.php">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
      <?php include("social_media_top.php"); ?>
    </div>
  </header>
  <div class="full_page_photo" style="background-image: url(images/404.jpg);">
    <div class="container">
      <section class="call_to_action">
        <h3 class="animated bounceInDown">OMG! <strong>error 404</strong></h3>
        <h4 class="animated bounceInUp">we are really sorry but the page you requested is still under construction</h4>
      </section>
    </div>
  </div>
  <div id="main">
    <div class="container">
      <div class="hgroup">
        <h1>Page not found</h1>
        <ul class="breadcrumb pull-right">
          <li class="active">Oops</li>
        </ul>
      </div>
      <section class="call_to_action"> <i class="icon-ambulance icon-4x"></i>
        <h3>error 404 is nothing to really worry about...</h3>
        <h4>This page is still under construction, check back from time to time to see updates!</h4>
      </section>
    </div>
    <?php include("footer.php"); ?>
  </div>
<?php include("scripts.php"); ?>
</body>
</html>