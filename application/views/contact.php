<?php include 'header.php'; ?>
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
  <!-- Start contact section  -->
  <section id="contact">
     <div class="container">
       <div class="row">
         <div class="col-md-12">
           <div class="title-area">
              <h2 class="title">Have any Questions?</h2>
              <span class="line"></span>
              
            </div>
         </div>
         <div class="col-md-12">
           <div class="cotact-area">
             <div class="row">
               <div class="col-md-4">
                 <div class="contact-area-left">
                   <h4>Contact Info</h4>
                   <p>
                   <?php echo $page->content; ?>
                   </p>
                   
                   <div class="footer-right contact-social">
                      <a href="<?php echo $manage->facebook; ?>" target="_new"><i class="fa fa-facebook"></i></a>
            <a href="<?php echo $manage->twitter; ?>" target="_new"><i class="fa fa-twitter"></i></a>
            <a href="<?php echo $manage->google; ?>" target="_new"><i class="fa fa-google-plus"></i></a>
                    </div>                
                 </div>
               </div>
               <div class="col-md-8">
                 <div class="contact-area-right">
                   <form action="" class="comments-form contact-form">
                    <div class="form-group">                        
                      <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">                        
                      <input type="email" class="form-control" placeholder="Email">
                    </div>
                     <div class="form-group">                        
                      <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">                        
                      <textarea placeholder="Message" rows="3" class="form-control"></textarea>
                    </div>
                    <button class="comment-btn">Submit</button>
                  </form>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
  </section>
  <!-- End contact section  -->

<?php include 'footer.php'; ?>