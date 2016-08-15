<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title>Control Panel Unit</title>
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
            <h2>Welcome to Trained Brain Control Unit</h2>
        </div>
        <!--/span-->
    </div><!--/row-->

    <div class="row">
        <div class="well col-md-5 center login-box">
   
           <?php echo $result; ?>
                   
                   <?php echo form_open('admin/login','form-horizontal'); ?>
        
                <fieldset>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                        
<input type="text" name="username" class="form-control" placeholder="username" value="<?php echo set_value('username'); ?>">
                    </div>
                    <div class="clearfix"></div><br>

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                        
<input type="password" name="password" class="form-control" placeholder="password">
                    </div>
                   

                   
                    

                    <p class="center col-md-5">
                        <input type="submit" class="btn btn-primary" value="Log In" name="submit">
                    </p>
                </fieldset>
            </form>
            
        </div>
        <!--/span-->
    </div><!--/row-->
</div><!--/fluid-row-->

</div><!--/.fluid-container-->


</body>
</html>