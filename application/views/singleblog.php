<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="<?php echo $manage->keywords.','.$page->keywords ?>">

<meta name="description" content="<?php echo $page->details; ?>">

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

    <title><?php echo $manage->title; ?></title>

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
  
  <!-- Start single page header -->
  <section id="single-page-header">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-page-header-left">
              <h2><?php echo $page->title; ?></h2>
             
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-page-header-right">
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End single page header -->
  
  <!-- Start blog archive -->
  <section id="blog-archive">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="blog-archive-area">
            <div class="row">
              <div class="col-md-8">
                <div class="blog-archive-left">
                  <!-- Start blog news single -->
                  <article class="blog-news-single">
                    <div class="blog-news-img">
                      <img src="<?php echo base_url().'uploads/blog/'.$page->image ?>" alt="image">
                    </div>
                    <div class="blog-news-title">
                      <h2>title</h2>
                      <p>By <a class="blog-author" href="<?php echo base_url().'blog/view/'.str_replace(' ','-',$page->title) ?>"><?php echo $page->Author; ?></a> <span class="blog-date">|<?php echo $page->thedate; ?></span></p>
                    </div>
                    <div class="blog-news-details blog-single-details">
                    <?php echo $page->content; ?>  
                      
                      
                      
                      
                      
                      
                      <div class="blog-single-bottom">
                        <div class="row">
                          
                          <div class="col-md-4">
                            <div class="blog-single-social">
                              <a href="#"><i class="fa fa-facebook"></i></a>
                              <a href="#"><i class="fa fa-twitter"></i></a>
                              <a href="#"><i class="fa fa-google-plus"></i></a>
                             
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </article>
                  <!-- Start blog navigation -->
                 
                </div>
              </div>
              <div class="col-md-4">
                <aside class="blog-side-bar">
                  <!-- Start sidebar widget -->
                  <div class="sidebar-widget">
                    <!-- Start blog search -->
                    <form>                    
                      <div class="search-group">                        
                        <button type="button" class="blog-search-btn"><span class="fa fa-search"></span></button>
                        <input type="search" placeholder="Search">
                      </div>                    
                    </form>
                    <!-- End blog search -->                                
                  </div>
                  <!-- Start sidebar widget -->
                  <div class="sidebar-widget">
                    <h4 class="widget-title">Latest Blog Posts</h4>
                    <ul class="widget-catg">                      
                      <?php
                    foreach($latest as $row){                      
                     echo '<li><a href="'.base_url().'blog/view/'.str_replace(' ','-',$row->title).'">'.$row->title.'</a></li>';
					}
					  ?>
                    </ul>
                  </div>
                  
                 
                  <!-- Start sidebar widget -->
                  <div class="sidebar-widget">
                    <h4 class="widget-title">Important Links</h4>
                    <ul>
                     <li><a href="http://www.trainedbrain.academy/">Online Academy</a></li>
                      <li><a href="<?php echo base_url(); ?>magazine/">Magazine</a></li>
                      <li><a href="<?php echo base_url(); ?>whyjamie/">Jamie Edwards</a></li>
                      <li><a href="<?php echo base_url(); ?>contact/">Contact us</a></li>
                    </ul>
                  </div>
                </aside>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  
  </section>
  <!-- End blog archive -->
<?php include 'footer.php'; ?>