<?php include 'header.php'; ?>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Add Blog Post</h2>

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
                   <?php echo $result; ?>
                   
                   <?php echo form_open_multipart('admin/home/addblog'); ?>
                    <table class="table table-striped table-bordered">
   
    <tbody>
    <tr>
    
    <td align="center">Title</td>
          <td> <input type="text" name="title" value="<?php echo set_value('title'); ?>" class="form-control">  </td>
        </tr>
        
        <tr>
    
    <td align="center">Description</td>
          <td> <input type="text" name="details" value="<?php echo set_value('details'); ?>" class="form-control">  </td>
        </tr>
        
       <tr>
    
    <td align="center">Keywords & Tags</td>
          <td> <input type="text" name="keywords" value="<?php echo set_value('keywords'); ?>" class="form-control">  </td>
        </tr> 
     
    <tr>
     <tr>
    
    <td align="center">Author</td>
          <td> <input type="text" name="author" value="<?php echo set_value('author'); ?>" class="form-control">  </td>
        </tr> 
     
    <tr>
    
     <tr>
    
    <td align="center">Publish Date</td>
          <td> <input type="text" name="thedate" value="<?php echo set_value('thedate'); ?>" class="form-control">  </td>
        </tr> 
     
    <tr>
    
     <tr>
    
    <td align="center">Featured Image</td>
          <td> <input type="file" name="image" value="<?php echo set_value('image'); ?>" class="form-control">  </td>
        </tr> 
     
    <tr>
    
      <td align="center">Content</td>
    <td>
           <textarea class="ckeditor" name="content" cols="100" rows="20" id="editor1"><?php echo set_value('content'); ?></textarea>
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
<br><br>
        </td>
        
      
        
        
        
    </tr>
    
   
    
    </tbody>
    </table>
      
       <center> <input type="submit" name="submit" value="Add Blog Post" class="btn-default"> </center>                 
                    
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