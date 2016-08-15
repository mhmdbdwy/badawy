<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title>Admin Panel - trained brain</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Lecturer Control Panel">
    <meta name="author" content="Muhammad badawy">

    <!-- The styles -->
   <link href="<?php echo base_url(); ?>panel/css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>panel/css/charisma-app.css" rel="stylesheet">
    
    
    <link href='<?php echo base_url(); ?>panel/bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>panel/bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    
    
    <link href='<?php echo base_url(); ?>panel/css/jquery.noty.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>panel/css/noty_theme_default.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>panel/css/elfinder.min.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>panel/css/elfinder.theme.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>panel/css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>panel/css/uploadify.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>panel/css/animate.min.css' rel='stylesheet'>

    
    <script src="<?php echo base_url(); ?>panel/bower_components/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>panel/ed/ckeditor/ckeditor.js"></script>
    
    <link rel="shortcut icon" href="img/favicon.ico">

</head>

<body>
    <!-- topbar starts -->
   <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"> <img alt="Charisma Logo" src="<?php echo base_url(); ?>panel/img/logo20.png" class="hidden-xs"/>
                <span>TB Admin</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> Admin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url(); ?>admin/home/">Home</a></li>
                    <li class="divider"></li>
                     <li><a href="<?php echo base_url(); ?>admin/home/config/">Admin configuration</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo base_url(); ?>admin/logout/">Log Out !</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

            
            
           
                
        </div>
    </div>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">
        
        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Admin</li>
     <li><a class="ajax-link" href="<?php echo base_url() ?>admin/home/"><i></i><span>Management</span></a></li>
     <li class="nav-header hidden-md">Pages & Articles</li>
     <li><a class="ajax-link" href="<?php echo base_url() ?>admin/home/whyjamie/"><i></i><span> Why Jamie?</span></a></li>
      <li><a class="ajax-link" href="<?php echo base_url() ?>admin/home/coaching/"><i></i><span> Coaching</span></a></li>
      <li><a class="ajax-link" href="<?php echo base_url() ?>admin/home/nextevent/"><i></i><span> Next Event</span></a></li>
       <li><a class="ajax-link" href="<?php echo base_url() ?>admin/home/magazine/"><i></i><span> Magazine</span></a></li>
        <li><a class="ajax-link" href="<?php echo base_url() ?>admin/home/contact/"><i></i><span> Contact</span></a></li>
          <li class="nav-header hidden-md">Home Page Images</li>
        <li><a class="ajax-link" href="<?php echo base_url() ?>admin/home/photogallery/"><i></i><span> Photo Gallery</span></a></li>
         <li class="nav-header hidden-md">Events</li>
         <li><a class="ajax-link" href="<?php echo base_url() ?>admin/home/addevent/"><i></i><span> Add Event</span></a></li>
         <li><a class="ajax-link" href="<?php echo base_url() ?>admin/home/eventmanager/"><i></i><span> Remove & Edit</span></a></li>
           
            <li class="nav-header hidden-md">Blog</li>
         <li><a class="ajax-link" href="<?php echo base_url() ?>admin/home/addblog/"><i></i><span> Add Blog</span></a></li>
         <li><a class="ajax-link" href="<?php echo base_url() ?>admin/home/blogmanager/"><i></i><span> Remove & Edit</span></a></li>
           
           
            <li class="nav-header hidden-md">Newsletter</li>
            <li><a class="ajax-link" href="<?php echo base_url() ?>admin/home/newsletter/"><i></i><span> NewsLetter Emails</span></a></li>
            
              
                        
    
                        
    </ul>
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="#">WELCOME</a>
        </li>
        
    </ul>
</div>
<div class=" row">
    

   

    

    
</div>