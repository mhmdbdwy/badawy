<?php include 'header.php'; ?>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Home Information</h2>

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
                    
                    
                  
                  <?php echo $error; ?>
                  <?php echo $man; ?>
                  
                   <?php echo form_open_multipart('admin/home/'); ?>
                    <table class="table table-striped table-bordered">
   
    <tbody>
    <tr>
    
    <td align="center">Title</td>
          <td> <input type="text" name="title" value="<?php echo set_value('title',$contact->title); ?>" class="form-control">  </td>
        </tr>
     
   
    
      <td align="center">Description</td>
    <td>
       <input type="text" name="details" value="<?php echo set_value('details',$contact->details); ?>" class="form-control">    
        </td>
          
    </tr>
    
    
    <tr>
    
      <td align="center">Keywords</td>
    <td>
       <textarea type="text" name="keywords" class="form-control"><?php echo set_value('keywords',$contact->keywords); ?> </textarea>   
        </td>
          
    </tr>
    
    
    <tr>
    
      <td align="center">Facebook Link</td>
    <td>
       <input type="text" name="facebook" value="<?php echo set_value('facebook',$contact->facebook); ?>" class="form-control">    
        </td>
          
    </tr>
    
    
    <tr>
    
      <td align="center">Twitter Link</td>
    <td>
       <input type="text" name="twitter" value="<?php echo set_value('twitter',$contact->twitter); ?>" class="form-control">    
        </td>
          
    </tr>
    
    
    <tr>
    
      <td align="center">google Plus Link</td>
    <td>
       <input type="text" name="google" value="<?php echo set_value('google',$contact->google); ?>" class="form-control">    
        </td>
          
    </tr>
    
    
     <tr>
    
      <td align="center">About Jamie</td>
    <td>
       
        <textarea class="ckeditor" name="jamie" cols="100" rows="20" id="editor1"><?php echo set_value('jamie',$contact->jamie); ?></textarea>
        <script type="text/javascript">
CKEDITOR.replace( 'editor1',
{
filebrowserBrowseUrl: '<?php echo base_url()?>panel/ed/kcfinder/browse.php?type=files',
filebrowserImageBrowseUrl: '<?php echo base_url()?>panel/ed/kcfinder/browse.php?type=images',
filebrowserFlashBrowseUrl: '<?php echo base_url()?>panel/ed/kcfinder/browse.php?type=flash',
filebrowserUploadUrl: '<?php echo base_url()?>panel/ed/kcfinder/upload.php?type=files',
filebrowserImageUploadUrl: '<?php echo base_url()?>panel/ed/kcfinder/upload.php?type=images',
filebrowserFlashUploadUrl: '<?php echo base_url()?>panel/ed/kcfinder/upload.php?type=flash'
}
);
</script>   
        </td>
          
    </tr>
    
    <tr>
    
    </tbody>
    </table>
      
       <center> <input type="submit" name="submit" value="Submit" class="btn-default"> </center>                 
                    
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