<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>Cuknuk - Add Category</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="DexignLab" />
	<meta name="robots" content="" />
	<meta name="description" content=""/>
	<meta property="og:title" content="" />
	<meta property="og:description" content="" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
	
<?php echo view ('Admin/includes/header'); ?>
<div class="content-body">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <?php if(!empty($CategoryD)) { ?>
                        <h4 class="card-title">Update Category</h4>
                        <?php } else {?>
                        <h4 class="card-title">Add Category</h4>
                         <?php } ?>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            
                        <?php 
                             $category_name        = (!empty($CategoryD['category_name']))  ?  $CategoryD['category_name'] : "";
                             $image                = (!empty($CategoryD['image']))          ?  $CategoryD['image'] : "";
                        ?>
                                            
                        <?php echo form_open_multipart('/CategoryInserted', array('autocomplete' => 'off')); ?>
                        <?php 
                        if(!empty($CategoryD)) { ?>
                        <input type="hidden" name="editId" value="<?=$CategoryD['id'];?>" >
                        <input type="hidden" name="editImage" value="<?=$image;?>" > 
                        <?php } ?>
                                            
                                <div class="row">
                                
                                <div class="col-sm-6 mb-3">
                                     <label class="me-sm-2">Category Name<span class="Required">*</span></label>
                                    <input type="text" id="category_name" name="category_name" class="form-control input-default" placeholder="Enter Category Name" <?php if(!empty($CategoryD)) { ?> value="<?=$category_name;?>" <?php } else {?> value="<?php echo set_value('category_name'); ?>" <?php } ?>>
                                    <?php if (isset($validation)): ?>
                                    <div class="text-danger">
                                    <?= $validation->getError('category_name'); ?>
                                    </div>
                                    <?php endif; ?>
                                    <?php if (session()->getFlashdata('validation')): ?>
                                        <div class="text-danger">
                                            <?= session()->getFlashdata('validation')->getError('category_name'); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                
                                
                                 <div class="col-sm-5 mb-3">
                                     <label class="me-sm-2">Image<span class="Required">*</span></label>
                                    <input type="file" id="image" name="image" class="form-control input-default" placeholder="Please Select Image" <?php if(!empty($CategoryD)) { ?> value="<?=$image;?>" <?php } else {?> value="<?php echo set_value('image'); ?>" <?php } ?>>
                                    <?php if (isset($validation)): ?>
                                    <div class="text-danger">
                                    <?= $validation->getError('image'); ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <?php if(!empty($image)){ ?>
                                <div class="col-sm-1 mb-3">
                                    <a href="<?=base_url();?>public/assets/images/<?=$image;?>" target="_blank">
                                        <img src="<?=base_url();?>public/Admin/assets/images/Category_images/<?=$image;?>" style="width: 40px;margin-top: 33px;">
                                        </a>
                                </div>
                                <?php } ?>
                                
                                </div>
                              
                                
                                <div class="col-sm-12">
                                <div class="col-sm-12 mb-3" style="text-align: right;">
                                    <?php if(!empty($CategoryD)) { ?>
                                     <button type="submit" class="btn btn-primary" name="submit">Update</button>
                                      <a href="<?= base_url(); ?>ViewCategory" class="btn btn-danger">Cancel</a>
                                     <?php } else {?>
                                     
                                     <button type="submit" class="btn btn-primary" name="submit">Add</button>
                                     <button type="reset" class="btn btn-danger">Reset</button>
                                     <?php } ?>
                                     
                                </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
    </div>
</div>


<?php echo view ('Admin/includes/footer'); ?>

<?php if(!empty($_SESSION['categoryMsg'])) { ?>
<script>

$(document).ready(function() {
var msg = '<?=$_SESSION['categoryMsg'];?>';

 Swal.fire({
     title: msg, 
     icon: "success",   
    showCancelButton: false,   
    confirmButtonText: "Ok",
    }).then(function(){
    window.location.href = "<?=base_url();?>ViewCategory"; 
});
});
</script>

<?php } ?>
</body>
</html>