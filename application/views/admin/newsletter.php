<?php include 'header.php'; ?>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Email Subscribers</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content row">
                <div class="col-lg-7 col-md-12">
                    <p align="left">
                    
                    
                    
                     <?php
				   
					if($mark){
					   echo '<table class="table table-striped table-bordered"><tbody>';
                   foreach($mark as $row){
					 
					   echo '<tr><td>'.$row->email.'</td>';
					   echo '<td><span class="label label-success">Subscribed</span></td></tr>';
					    
						
				   }
					   
					   echo '</tbody></table>';
					  
					  
				  }else{ echo '<div class="alert alert-info">There is no email subscribers</div>';}
                   
                   ?>
                    
                    
                    
                    
                    
                    </p>    
                   
                
                </div>
                

            </div>
        </div>
    </div>
</div>


    



    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->

    

   <?php include 'footer.php'; ?>