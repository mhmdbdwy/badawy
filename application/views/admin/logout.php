<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title>Log out from control panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad badawy">

    <!-- The styles -->
    <link id="bs-css" href="<?php echo base_url(); ?>panel/css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>panel/css/charisma-app.css" rel="stylesheet">
    <link href='<?php echo base_url(); ?>panel/bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>panel/bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='<?php echo base_url(); ?>panel/bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>panel/bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>panel/bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>panel/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>panel/css/jquery.noty.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>panel/css/noty_theme_default.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>panel/css/elfinder.min.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>panel/css/elfinder.theme.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>panel/css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>panel/css/uploadify.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>panel/css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>panel/bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>panel/img/favicon.ico">

</head>

<body>

<div class="ch-container">
    <div class="row">
        
    <div class="row">
        <div class="col-md-12 center login-header">
            <h2>Thank You</h2>
        </div>
        <!--/span-->
    </div><!--/row-->

    <div class="row">
        <div class="well col-md-5 center login-box">
   
           <?php echo $result; ?>
                   
            
        </div>
        <!--/span-->
    </div><!--/row-->
</div><!--/fluid-row-->

</div><!--/.fluid-container-->


</body>
</html>