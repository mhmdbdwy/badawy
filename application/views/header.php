<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="<?php echo $manage->keywords; ?>">

<meta name="description" content="<?php echo $manage->details; ?>">

<meta name="robots" content="index, follow">
<meta name="alexaVerifyID" content="" />
<meta name="robots" content="all">
<meta name="revisit-after" content="1 hours">
<meta name="rating" content="General">
<meta name="distribution" content="Global">
<meta http-equiv="Content-Language" content="EN">
<meta name="Expires" content="0" />
<meta name="reply-to" content="info@trained-brain.com">
<meta name="owner" content="Jamie Edwards">
<meta name="classification" content="All">
<meta name="Publisher" content="Jamie Edwards">

<meta name="Copyright" content="Jamie Edwards">
<meta name="googlebot" content="archive">
<meta name="resource-type" content="document" >

    <title></title>

    <link rel="shortcut icon" type="image/icon" href="<?php echo base_url(); ?>site/assets/images/favicon.ico"/>
    <link href="<?php echo base_url(); ?>site/assets/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>site/assets/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>site/assets/css/slick.css"/> 
    <link rel="stylesheet" href="<?php echo base_url(); ?>site/assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>site/assets/css/animate.css"/> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>site/assets/css/bootstrap-progressbar-3.3.4.css"/> 
    <link id="switcher" href="<?php echo base_url(); ?>site/assets/css/theme-color/lite-blue-theme.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>site/style.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>    
  </head>
  <body>
  
  <!-- BEGAIN PRELOADER -->
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
  <!-- END PRELOADER -->

  <!-- SCROLL TOP BUTTON -->
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header -->
  <header id="header">
    <!-- header top search -->
    <div class="header-top">
      <div class="container">
        <form action="">
          <div id="search">
          <input type="text" placeholder="Type your search keyword here and hit Enter..." name="s" id="m_search" style="display: inline-block;">
          <button type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
        </form>
      </div>
    </div>
    <!-- header bottom -->
    <div class="header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-6">
            <div class="header-contact">
              <ul>
                <li>
                  <div class="phone">
                    <i class="fa fa-phone"></i>
                    +44 (0) 7773351463
                  </div>
                </li>
                <li>
                  <div class="mail">
                    <i class="fa fa-envelope"></i>
                     info@trained-brain.com
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-6">
            <div class="header-login">
              <a class="login modal-form" data-target="#login-form" data-toggle="modal" href="#">Welcome</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End header -->
  
  

  <!-- BEGIN MENU -->
  <section id="menu-area">      
    <nav class="navbar navbar-default" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->              
          <!-- TEXT BASED LOGO -->
          <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>site/assets/images/logo.png" /></a>              
          <!-- IMG BASED LOGO  -->
           <!-- <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt="logo"></a> -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
     <li <?php  if(base_url(uri_string()) === base_url()){ echo 'class="active"';} ?>><a href="<?php echo base_url(); ?>">Home</a></li>
 <li <?php  if(base_url(uri_string()) === base_url('whyjamie/')){ echo 'class="active"';} ?> ><a href="<?php echo base_url(); ?>whyjamie/">Why Jamie ?</a></li>
<li <?php  if(base_url(uri_string()) === base_url('coaching/')){ echo 'class="active"';} ?> ><a href="<?php echo base_url(); ?>coaching/">Coaching</a></li>
            <li <?php  if(base_url(uri_string()) === base_url('magazine/')){ echo 'class="active"';} ?> ><a href="<?php echo base_url(); ?>magazine/">Magazine</a></li>
            <li><a href="http://www.trainedbrain.academy/" target="_new">Online Academy</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Events <span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">
              <?php
                foreach($events as $row){
				
					
				echo '<li><a href="'.base_url().'events/viewevent/'.str_replace(' ','-',$row->title).'">'.$row->title.'</a></li>';                
				}
			  ?>
			  </ul>
            </li>
            <li <?php  if(base_url(uri_string()) === base_url('blog/')){ echo 'class="active"';} ?> ><a href="<?php echo base_url(); ?>blog/">Blog</a></li>               
            <li <?php  if(base_url(uri_string()) === base_url('contact/')){ echo 'class="active"';} ?> ><a href="<?php echo base_url(); ?>contact/">Contact</a></li>
          </ul>                     
        </div><!--/.nav-collapse -->
        <a href="#" id="search-icon">
          <i class="fa fa-search">            
          </i>
        </a>
      </div>     
    </nav>
  </section>
  <!-- END MENU --> 