
  <!-- Start subscribe us -->
  <section id="subscribe">
    <div class="subscribe-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="subscribe-area">
              <h2 class="wow fadeInUp">Subscribe Newsletter</h2>
              
              <div id="subs">
              <form name="send" class="subscrib-form wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s" id="myform">
                <input type="email" name="emails" id="emails" placeholder="Enter Your E-mail.." required>
       <button name="subscribe" onclick="getsub('<?php echo base_url(); ?>home/addemail/')" class="subscribe-btn" type="button" value="Submit" >Subscribe</button>
              </form>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End subscribe us -->

  <!-- Start footer -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <div class="footer-left">
            <p>All Rights Reserved.</p>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="footer-right">
            <a href="<?php echo $manage->facebook; ?>" target="_new"><i class="fa fa-facebook"></i></a>
            <a href="<?php echo $manage->twitter; ?>" target="_new"><i class="fa fa-twitter"></i></a>
            <a href="<?php echo $manage->google; ?>" target="_new"><i class="fa fa-google-plus"></i></a>
           
          
          </div>
        </div>
      </div>
    </div>
  </footer>
 
  <!-- End footer -->
<script src="<?php echo base_url();?>site/fn/sfn.js"></script>
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>    
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!-- Bootstrap -->
  <script src="<?php echo base_url(); ?>site/assets/js/bootstrap.js"></script>
  <!-- Slick Slider -->
  <script type="text/javascript" src="<?php echo base_url(); ?>site/assets/js/slick.js"></script>    
  <!-- mixit slider -->
  <script type="text/javascript" src="<?php echo base_url(); ?>site/assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="<?php echo base_url(); ?>site/assets/js/jquery.fancybox.pack.js"></script>
 <!-- counter -->
  <script src="<?php echo base_url(); ?>site/assets/js/waypoints.js"></script>
  <script src="<?php echo base_url(); ?>site/assets/js/jquery.counterup.js"></script>
  <!-- Wow animation -->
  <script type="text/javascript" src="<?php echo base_url(); ?>site/assets/js/wow.js"></script> 
  <!-- progress bar   -->
  <script type="text/javascript" src="<?php echo base_url(); ?>site/assets/js/bootstrap-progressbar.js"></script>  
  
 
  <!-- Custom js -->
  <script type="text/javascript" src="<?php echo base_url(); ?>site/assets/js/custom.js"></script>
 
  </body>
</html>