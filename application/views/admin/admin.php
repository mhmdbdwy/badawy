<?php include 'header.php'; ?>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Admin settings</h2>

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
                   
                   <?php echo form_open_multipart('admin/home/config'); ?>
                    <table class="table table-striped table-bordered">
   
    <tbody>
    <tr>
    
    <td align="center">Username</td>
          <td>  <input name="username" type="text" value="<?php echo set_value('username'); ?>"  class="form-control">   </td>
        </tr>
        
        <tr>
    
    <td align="center">Password</td>
          <td> <input name="password" type="password" value="<?php echo set_value('password'); ?>" class="form-control">  </td>
        </tr>
        
    
   
    
    </tbody>
    </table>
      
       <center> <input type="submit" name="submit" value="update" class="btn-default"> </center>                 
                    
                    </form>
                    
                    
                    
                    
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