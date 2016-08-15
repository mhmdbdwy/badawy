<?php include 'header.php'; ?>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Add Photo to Home Page Gallery</h2>

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
                     <?php echo $result; ?>
                   
                   <form action="" method="post" enctype="multipart/form-data">
                    <table class="table table-striped table-bordered">
   
    <tbody>
    <tr>
    <td align="center">Upload Photo</td>
    <td>
        <input type="file" name="image" value="<?php echo set_value('image'); ?>" class="form-control" >   
                </td>
        
        
        
        
        
    </tr>
    
    <tr>
     <td align="center">Photo Title</td>
    <td>
        <input type="text" name="title" value="<?php echo set_value('title'); ?>" class="form-control" >   
                </td>
    
        
    </tr>

    </tbody>
    </table>
      
       <center><input type="submit" name="submit" class="btn-default" value="Upload"></center>                 
                    
                    </form>
                    </p>    
                   
                
                </div>
                

            </div>
            
            
            
        </div>
    </div>
 
</div>


 
 <!-- second row of photo content -->
 
 <div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Online Photos</h2>

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
 		    return confirm('Do you really want to delete this photo ?');}
											
										</script>
					 
                     
                      <?php
				   
					if($mark){
					   echo '<table class="table table-striped"><tbody>';
                   foreach($mark as $row){
					 
					   echo '<tr><td><img src="'.base_url().'uploads/homegallery/'.$row->image.'" height="50" width="50" /></td>';
					   echo '<td style="vertical-align: middle;"><a onclick="return confirm_delete()" href="'.base_url().'admin/home/removeimage/'.$row->id.'" class="btn btn-danger btn-sm">Remove</a></td></tr>';
					    
						
				   }
					   
					   echo '</tbody></table>';
					  
					  
				  }else{ echo '<div class="alert alert-info">There is no Photos online now.</div>';}
                   
                   ?>
                     
                     
                     
                     
       
       
       
                    </p>    
                   
                
                </div>
                

            </div>
            
            
            
        </div>
    </div>
 
</div>
<!-- end of photo content badawy -->  



    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->

  
  
    

   <?php include 'footer.php'; ?>