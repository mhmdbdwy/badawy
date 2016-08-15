<?php include 'header.php'; ?>
  
  <!-- Start single page header -->
  <section id="single-page-header-blog">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-page-header-left">
              <h2>Blog</h2>
             
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
                  <?php
				  foreach($blog as $row){
					  echo'
                  <article class="blog-news-single">
                    <div class="blog-news-img">
                      <a href="'.base_url().'blog/view/'.str_replace(' ','-',$row->title).'"><img src="'.base_url().'uploads/blog/'.$row->image.'" alt="image"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="'.base_url().'blog/view/'.str_replace(' ','-',$row->title).'">'.$row->title.'</a></h2>
                      <p>By <a class="blog-author" href="'.base_url().'blog/view/'.str_replace(' ','-',$row->title).'">'.$row->Author.'</a> <span class="blog-date">| '.$row->thedate.'</span></p>
                    </div>
                    <div class="blog-news-details">
                      <p>'.$row->details.'</p>
                      <a class="blog-more-btn" href="'.base_url().'blog/view/'.str_replace(' ','-',$row->title).'">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
				  ';
				  }
				  ?>
                 
                  <!-- Start blog pagination -->
                  <div class="blog-pagination">
                    <ul class="pagination-nav">
                     <?php echo $result; ?>
                    </ul>
                  </div>
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