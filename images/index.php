<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-gb" class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!--[if lt IE 9]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
<title>Impeccable Technology Solutions</title>
<meta name="description" content="">
<meta name="author" content="WebThemez">
<!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<!--[if lte IE 8]>
		<script type="text/javascript" src="http://explorercanvas.googlecode.com/svn/trunk/excanvas.js"></script>
	<![endif]-->
<script type="text/javascript" src="js/angular.min.js"></script>
<scirp src="js/angular.min.js.map"></script>
<script type="text/javascript" src="js/app.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/da-slider.css" />
<link rel="stylesheet" href="css/styles.css" />
<!-- Font Awesome -->
<link href="css/font-awesome.min.css" rel="stylesheet">
</head>

<body ng-app="MyApplication">
<header class="header">
  <div class="container">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a href="#" class="navbar-brand scroll-top logo"><img src="images/its-logo.png" alt="Impeccable Technology Solutions"></a> </div>
      <!--/.navbar-header-->
        <navigation-menu></navigation-menu>
      <!--/.navbar-collapse-->
    </nav>
    <!--/.navbar-->
  </div>
  <!--/.container-->
</header>
<!--/.header-->

<?php
  $servername = "localhost:3306";
  $username = "impecca1_mukesh";
  $password = "Mukesh091217";
  $dbname = "impecca1_its";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  $mysqltime = date ("Y-m-d H:i:s", $phptime);

  $sql = "INSERT INTO MyGuests (ip_address, date_entered)
    VALUES ('".$_SERVER['REMOTE_ADDR']."', '".$mysqltime."')";
    //
    // if ($conn->query($sql) === TRUE) {
    //     echo "New record created successfully";
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }

    $conn->close();
?>
<div id="#top"></div>
<section id="home" ng-controller="homeController">
  <div class="banner-container"> <img src="images/banner-bg-code.jpg" alt="banner" />
    <div class="container banner-content">
      <div class="heroText">
        <h2><span>HEllo, I'm</span><br>
          {{myName}}</h2>
        <span class="caption">Frontend Developer/ Backend Developer</span> </div>
    </div>
  </div>
</section>
<section id="introText">
  <div class="container">
    <div>
      <h1>We create beautiful responsive websites, Yes We are technology geek</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum erat et neque tincidunt volutpat. Cras eget augue id dui varius pretium. Cras posuere dolor risus. Pellentesque elementum ultricies quam, sit amet rhoncus nisl viverra in. Cras imperdiet nisi a euismod molestie. Ut a metus arcu. Pellentesque feugiat dictum erat. Nulla vehicula condimentum purus, quis imperdiet nisl ultricies eleifend. Nulla quis rhoncus risus. Ut vel vehicula urna.</p>
    </div>
  </div>
</section>
<!--About-->
<section id="aboutUs">
  <div class="container">
    <div class="row">
      <!-- item -->
      <div class="col-md-4 tileBox"> <img width="100%" src="images/portfolio.jpg" alt="me"/> </div>
      <div class="col-md-8 tileBox">
        <div class="txtHead">
          <h2>We are best solutions provider,</h2>
          <h3> Frontend Development / Full stack development.</h3>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitendisse interdum erat et neque tincidunt volutpat. Cras eget. Suspendisse interdum erat et neque tincidunt volutpat. <br/>
          <br/>
          Cras eget augue id dui varius pretium.
          Consectetur adipiscing elit. Suspendisse interdum erat et neque tincidunt volutpat. Cras eget augue id dui varius.</p>
      </div>
      <!-- end: -->
    </div>
  </div>
</section>
<!--Quote-->
<section id="quote" class="bg-parlex">
  <div class="parlex-back">
    <div class="container">
     <div class="row">
	<div class="col-md-12">      <h2>“Dreams are extremely important. You can’t do it unless you imagine it.” <span>-George Lucas</span></h2></div>
      </div>
    </div>
    <!--/.container-->
  </div>
</section>

<!--Skills-->
<section id="skills" class="secPad white">
  <div class="container">
    <div class="heading ">
      <!-- Heading -->
      <h2>My Skills</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum erat et neque tincidunt volutpat. Cras eget augue id dui varius pretium. Cras posuere dolor risus. Pellentesque elementum ultricies quam, sit amet rhoncus nisl viverra in. Cras imperdiet nisi a euismod molestie. Ut a metus arcu. Pellentesque feugiat dictum erat. </p>
    </div>
    <div class="row skillContainer">
      <div class="col-md-4 skillBox">
        <div id="diagram-id-1" class="diagram" data-percent="95.2%"></div>
        <div class="chart-text">
          <h4>Visual Designing</h4>
          <p>Exp 4 years</p>
        </div>
      </div>
      <div class="col-md-4 skillBox">
        <div id="diagram-id-2" class="diagram" data-percent="75.2%"></div>
        <div class="chart-text">
          <h4>Frontend Developer</h4>
          <p>Exp 8 years</p>
        </div>
      </div>
      <div class="col-md-4 skillBox">
        <div id="diagram-id-3" class="diagram" data-percent="85.6%"></div>
        <div class="chart-text">
          <h4>Backend Developer</h4>
          <p>Exp 5 years</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <h2>Technologies We offer so far</h2>
        <p class="mrgBtm20"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
      </div>
      <div class="col-sm-6"> <br/>
        <br/>
        <br/>
        <div class="row">
          <div class="col-md-2 skilltitle"><b>HTML5</b></div>
          <div class="col-md-10">
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span class="sr-only">90% Complete</span> </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2 skilltitle"><b>JavaScript</b></div>
          <div class="col-md-10">
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span class="sr-only">80% Complete</span> </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2 skilltitle"><b>Angular</b></div>
          <div class="col-md-10">
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span class="sr-only">75% Complete</span> </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2 skilltitle"><b>EmberJs</b></div>
          <div class="col-md-10">
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span class="sr-only">75% Complete</span> </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2 skilltitle"><b>ReactJS</b></div>
          <div class="col-md-10">
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"> <span class="sr-only">75% Complete</span> </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2 skilltitle"><b>PHP</b></div>
          <div class="col-md-10">
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"> <span class="sr-only">75% Complete</span> </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2 skilltitle"><b>MySql</b></div>
          <div class="col-md-10">
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"> <span class="sr-only">75% Complete</span> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--Experience-->
<section id="experience" class="secPad">
<div class="container">
<div class="heading">
  <!-- Heading -->
  <h2>Experience</h2>
  <br/>
  <h4>9 Years 5 months Experience!</h4>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
</div>
<div class="row experience-details">
  <div class="col-md-6">
    <div class="col-md-5">
      <div class="icon-block"><i class="fa fa-cogs"></i></div>
      <div class="pull-left">
        <h5>Infore Managment</h5>
        <h4>Consultant</h4>
        <span>2013 - 2014</span> </div>
    </div>
    <div class="col-md-7"> Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. </div>
  </div>
  <div class="col-md-6">
    <div class="col-md-5">
      <div class="icon-block"><i class="fa fa-send-o"></i></div>
      <div class="pull-left">
        <h5>Infore Managment</h5>
        <h4>Consultant</h4>
        <span>2011 - 2013</span> </div>
    </div>
    <div class="col-md-7"> Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. </div>
  </div>
</div>
<div class="row experience-details">
  <div class="col-md-6">
    <div class="col-md-5">
      <div class="icon-block"><i class="fa fa-shopping-cart"></i></div>
      <div class="pull-left">
        <h5>Infore Managment</h5>
        <h4>Consultant</h4>
        <span>2008 - 2011</span> </div>
    </div>
    <div class="col-md-7"> Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. </div>
  </div>
  <div class="col-md-6">
    <div class="col-md-5">
      <div class="icon-block"><i class="fa fa-futbol-o"></i></div>
      <div class="pull-left">
        <h5>Infore Managment</h5>
        <h4>Consultant</h4>
        <span>2002 - 2008</span> </div>
    </div>
    <div class="col-md-7"> Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. </div>
  </div>
</div>
</section>

<!--Portfolio-->
<section id="portfolio" class="page-section section appear clearfix secPad">
  <div class="container">
    <div class="heading">
      <!-- Heading -->
      <h2>Portfolio</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum erat et neque tincidunt volutpat. Cras eget augue id dui varius pretium. Cras posuere dolor risus. Pellentesque elementum ultricies quam, sit amet rhoncus nisl viverra in. Cras imperdiet nisi a euismod molestie. Ut a metus arcu. Pellentesque feugiat dictum erat.</p>
    </div>
    <div class="row">
      <nav id="filter" class="col-md-12">
        <ul>
          <li><a href="#" class="current btn-theme btn-small" data-filter="*">All</a></li>
          <li><a href="#" class="btn-theme btn-small" data-filter=".webdesign">Web Design</a></li>
          <li><a href="#" class="btn-theme btn-small" data-filter=".photography">Photography</a></li>
          <li><a href="#" class="btn-theme btn-small" data-filter=".print">Print</a></li>
        </ul>
      </nav>
      <div class="col-md-12">
        <div class="row">
          <div class="portfolio-items isotopeWrapper clearfix" id="3">
            <article class="col-sm-4 isotopeItem webdesign">
              <div class="portfolio-item"> <img src="images/portfolio/img1.jpg" alt="" />
                <div class="portfolio-desc align-center">
                  <div class="folio-info"> <a href="images/portfolio/img1.jpg" class="fancybox">
                    <h5>Project Name</h5>
                    <i class="fa fa-plus-square-o fa-2x"></i></a> </div>
                </div>
              </div>
            </article>
            <article class="col-sm-4 isotopeItem photography">
              <div class="portfolio-item"> <img src="images/portfolio/img2.jpg" alt="" />
                <div class="portfolio-desc align-center">
                  <div class="folio-info"> <a href="images/portfolio/img2.jpg" class="fancybox">
                    <h5>Project Name</h5>
                    <i class="fa fa-plus-square-o fa-2x"></i></a> </div>
                </div>
              </div>
            </article>
            <article class="col-sm-4 isotopeItem photography">
              <div class="portfolio-item"> <img src="images/portfolio/img3.jpg" alt="" />
                <div class="portfolio-desc align-center">
                  <div class="folio-info"> <a href="images/portfolio/img3.jpg" class="fancybox">
                    <h5>Project Name</h5>
                    <i class="fa fa-plus-square-o fa-2x"></i></a> </div>
                </div>
              </div>
            </article>
            <article class="col-sm-4 isotopeItem print">
              <div class="portfolio-item"> <img src="images/portfolio/img4.jpg" alt="" />
                <div class="portfolio-desc align-center">
                  <div class="folio-info"> <a href="images/portfolio/img4.jpg" class="fancybox">
                    <h5>Project Name</h5>
                    <i class="fa fa-plus-square-o fa-2x"></i></a> </div>
                </div>
              </div>
            </article>
            <article class="col-sm-4 isotopeItem photography">
              <div class="portfolio-item"> <img src="images/portfolio/img5.jpg" alt="" />
                <div class="portfolio-desc align-center">
                  <div class="folio-info"> <a href="images/portfolio/img5.jpg" class="fancybox">
                    <h5>Project Name</h5>
                    <i class="fa fa-plus-square-o fa-2x"></i></a> </div>
                </div>
              </div>
            </article>
            <article class="col-sm-4 isotopeItem webdesign">
              <div class="portfolio-item"> <img src="images/portfolio/img6.jpg" alt="" />
                <div class="portfolio-desc align-center">
                  <div class="folio-info"> <a href="images/portfolio/img6.jpg" class="fancybox">
                    <h5>Project Name</h5>
                    <i class="fa fa-plus-square-o fa-2x"></i></a> </div>
                </div>
              </div>
            </article>
            <article class="col-sm-4 isotopeItem print">
              <div class="portfolio-item"> <img src="images/portfolio/img7.jpg" alt="" />
                <div class="portfolio-desc align-center">
                  <div class="folio-info"> <a href="images/portfolio/img7.jpg" class="fancybox">
                    <h5>Project Name</h5>
                    <i class="fa fa-plus-square-o fa-2x"></i></a> </div>
                </div>
              </div>
            </article>
            <article class="col-sm-4 isotopeItem photography">
              <div class="portfolio-item"> <img src="images/portfolio/img8.jpg" alt="" />
                <div class="portfolio-desc align-center">
                  <div class="folio-info"> <a href="images/portfolio/img8.jpg" class="fancybox">
                    <h5>Project Name</h5>
                    <i class="fa fa-plus-square-o fa-2x"></i></a> </div>
                </div>
              </div>
            </article>
            <article class="col-sm-4 isotopeItem print">
              <div class="portfolio-item"> <img src="images/portfolio/img9.jpg" alt="" />
                <div class="portfolio-desc align-center">
                  <div class="folio-info"> <a href="images/portfolio/img9.jpg" class="fancybox">
                    <h5>Project Name</h5>
                    <i class="fa fa-plus-square-o fa-2x"></i></a> </div>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--Contact -->
<section id="contactUs" class="page-section secPad">
  <div class="container">
    <div class="row">
      <div class="heading">
        <!-- Heading -->
        <h2>Let's Keep In Touch!</h2>
        <p>Thank you for visiting out my profile. If you would like to get into contact with me, please fill out the form below.</p>
      </div>
    </div>
    <div class="row mrgn30">
      <form method="post" action="" id="contactfrm" role="form">
        <div class="col-sm-4">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" title="Please enter your name (at least 2 characters)">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" title="Please enter a valid email address">
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label for="comments">Comments</label>
            <textarea name="comment" class="form-control" id="comments" cols="3" rows="5" placeholder="Enter your message…" title="Please enter your message (at least 10 characters)"></textarea>
          </div>
          <button name="submit" type="submit" class="btn btn-lg btn-primary" id="submit">Submit</button>
          <div class="result"></div>
        </div>
      </form>
      <div class="col-sm-4">
        <h4>Address:</h4>
        <address>
        Sabari devi VinodhRaja<br>
        22, Arnold Road<br>
        Staines-upon-thames, United Kingdom - TW181LX<br>
        </address>
        <h4>Phone:</h4>
        <address>
        +44 7440034192<br>
        </address>
      </div>
    </div>
  </div>
  <!--/.container-->
</section>

<!--/.page-section-->
<footer class="copyright">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="social pull-left"> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-flickr"></i></a> <a href="#"><i class="fa fa-github"></i></a> </div>
      </div>
      <div class="col-md-6"> <span class="pull-right">Copyright 2019 | All Rights Reserved </span> </div>
    </div>
    <!-- / .row -->
  </div>
</footer>
<a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a>

<!--[if lte IE 8]><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><![endif]-->
<script src="js/modernizr-latest.js"></script>
<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery.isotope.min.js" type="text/javascript"></script>
<script src="js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
<script src="js/jquery.nav.js" type="text/javascript"></script>
<script src="js/jquery.cslider.js" type="text/javascript"></script>
<script src="js/jquery.diagram.js"></script>
<script src="js/custom.js" type="text/javascript"></script>
<script src="js/owl-carousel/owl.carousel.js"></script>
</body>
</html>
