<?php include 'header.php'; ?>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Events Management</h2>

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
                    
                    <script type="text/javascript">
			function confirm_delete() {
 		    return confirm('Do you want to Remove this Event ?');}
											
										</script>
                                        
                                        
                    
                    <?php
				   
					if($events){
					   echo '<table class="table table-striped table-bordered"><tbody>';
                   foreach($events as $row){
					 
					   echo '<tr><td>'.$row->title.'</td>';
					   echo '<td><a onclick="return confirm_delete()" href="'.base_url().'admin/home/remevent/'.$row->id.'" class="btn btn-danger btn-sm">Delete</a></td><td><a href="'.base_url().'admin/home/editevent/'.$row->id.'" class="btn btn-primary btn-sm">Edit</a></td></tr>';
					    
						
				   }
					   
					   echo '</tbody></table>';
					  
					  
				  }else{ echo '<div class="alert alert-info">There is no Events Online.</div>';}
                   
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