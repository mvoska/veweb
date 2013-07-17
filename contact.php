<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang="en"> <!--<![endif]-->
<head>
 <title>VE | Contact</title>
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
              <li class="active"><a href="index.php">Home</a></li>
              <li><a href="404.php">About Us</a></li>
              <li class="dropdown"> <a data-toggle="dropdown" class="dropdown-toggle" href="#">Services<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="404.php">Home</a></li>
                  <li><a href="404.php">Business</a></li>
                </ul>
              </li>
              <li><a href="404.php">Blog</a></li>
              <li><a href="contact.php">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
      <?php include("social_media_top.php"); ?>
    </div>
  </header>
  <div class="full_page_photo">
    <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=&amp;aq=&amp;sll=42.074272,-87.907791&amp;sspn=0.418446,1.012115&amp;t=h&amp;ie=UTF8&amp;ll=42.172564,-87.925644&amp;spn=0.417798,1.012115&amp;z=11&amp;output=embed"></iframe>
  </div>
  <div id="main">
    <div class="container">
      <section id="contact">
        <div class="hgroup">
          <h1>Contact us</h1>
          <h2>We love hearing from our clients</h2>
          <ul class="breadcrumb pull-right">
            <li><a href="index.html">Home</a> <span class="divider">/</span></li>
            <li class="active">Contact</li>
          </ul>
        </div>
        <div class="row">
          <div class="span4 office_address">
            <address>
              <strong>Voska Electronics</strong><br>
              Northwest Chicagoland Area <br>
              <abbr title="Phone">P:</abbr> (224) 633-9427
            </address>
            <address>
              <strong>Matt Voska</strong><br>
              <a href="mailto:#">matt@voskaelectronics.com</a>
            </address>
          </div>
          <!--div class="span8 contact_form">
            <form>
              <div class="row">
                <div class="span4">
                  <label>Name</label>
                  <input type="text" class="span4">
                </div>
                <div class="span4">
                  <label>E-mail</label>
                  <input type="text" class="span4">
                </div>
                <div class="span8">
                  <label>Subject</label>
                  <input type="text" class="span8">
                </div>
                <div class="span8">
                  <label>Message</label>
                  <textarea rows="8" class="span8"></textarea>
                </div>
                <div class="span8"> <a class="btn btn-large btn-success"><span>Submit Message</span></a></div>
              </div>
            </form>
          </div-->
          <div>
            <h1>Email us</h1>
            <button><a href="mailto:info@voskaelectronics.com">Click Here</a></button>
          </div>
        </div>
      </section>
      <!--END Contact-->
    </div>
    <?php include("footer.php"); ?>
  </div>
  <?php include("scripts.php"); ?>
</body>
</html>