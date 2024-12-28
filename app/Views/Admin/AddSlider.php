<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>Cuknuk - Add Slider</title>
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
                        <?php if(!empty($SliderD)) { ?>
                        <h4 class="card-title">Update Slider</h4>
                        <?php } else {?>
                        <h4 class="card-title">Add Slider</h4>
                         <?php } ?>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            
                        <?php 
                        $alt_tag     = (!empty($SliderD['alt_tag']))           ? $SliderD['alt_tag'] : "";
                        $image       = (!empty($SliderD['image']))             ? $SliderD['image'] : "";
                        $index_no    = (!empty($SliderD['index_no']))          ? $SliderD['index_no'] : "";
                        ?>
                                            
                        <?php echo form_open_multipart('/SliderInserted', array('autocomplete' => 'off')); ?>
                        <?php 
                        if(!empty($SliderD)) { ?>
                        <input type="hidden" name="editId" value="<?=$SliderD['id'];?>" >   
                        <input type="hidden" name="editImage" value="<?=$image;?>" >   
                        <?php } ?>
                                            
                                <div class="row">
                                
                                <div class="<?php if(empty($image)){ ?>col-sm-6 mb-3 <?php } else { ?> col-sm-5 mb-3 <?php } ?>">
                                     <label class="me-sm-2">Slider Image <span class="Required">*</span></label>
                                    <input type="file" id="image" name="image" class="form-control input-default" accept=".jpg, .png" value="<?=$image;?>">
                                      <?php if (isset($validation)): ?>
                                      <div class="text-danger">
                                    <?= $validation->getError('image'); ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <?php if(!empty($image)){ ?>
                                <div class="col-sm-1 mb-3">
                                    <a href="<?=base_url();?>public/Admin/assets/images/Slider_image/<?=$image;?>" target="_blank">
                                        <img src="<?=base_url();?>public/Admin/assets/images/Slider_image/<?=$image;?>" style="width: 40px;margin-top: 33px;">
                                        </a>
                                </div>
                                <?php } ?>
                                
                                <div class="col-sm-6 mb-3">
                                     <label class="me-sm-2">Image Alt Tag <span class="Required">*</span></label>
                                    <input type="text" id="alt_tag" name="alt_tag" class="form-control input-default" placeholder="Enter Alt Tag Name " <?php if(!empty($SliderD)) { ?> value="<?=$alt_tag;?>" <?php } else {?> value="<?php echo set_value('alt_tag'); ?>" <?php } ?>>
                                    <?php if (isset($validation)): ?>
                                    <div class="text-danger">
                                    <?= $validation->getError('alt_tag'); ?>
                                    </div>
                                    <?php endif; ?>
                                    <?php if (session()->getFlashdata('validation')): ?>
                                        <div class="text-danger">
                                            <?= session()->getFlashdata('validation')->getError('alt_tag'); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <div class="col-sm-6 mb-3">
                                     <label class="me-sm-2">Index No <span class="Required">*</span></label>
                                    <input type="text" id="index_no" name="index_no" class="form-control input-default" placeholder="Enter Index No. " <?php if(!empty($SliderD)) { ?> value="<?=$index_no;?>" <?php } else {?> value="<?php echo set_value('index_no'); ?>" <?php } ?>>
                                    <?php if (isset($validation)): ?>
                                    <div class="text-danger">
                                    <?= $validation->getError('index_no'); ?>
                                    </div>
                                    <?php endif; ?>
                                    <?php if (session()->getFlashdata('validation')): ?>
                                        <div class="text-danger">
                                            <?= session()->getFlashdata('validation')->getError('index_no'); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                </div>
                                
                                <div class="col-sm-12">
                                <div class="col-sm-12 mb-3" style="text-align: right;">
                                    <?php if(!empty($SliderD)) { ?>
                                     <button type="submit" class="btn btn-primary" name="submit">Update</button>
                                     <a href="<?= base_url(); ?>ViewSlider" class="btn btn-danger">Cancel</a>
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

<?php if(!empty($_SESSION['slidMsg'])) { ?>
<script>

$(document).ready(function() {
var msg = '<?=$_SESSION['slidMsg'];?>';

 Swal.fire({
     title: msg, 
     icon: "success",   
    showCancelButton: false,   
    confirmButtonText: "Ok",
    }).then(function(){
    window.location.href = "<?=base_url();?>ViewSlider"; 
});
});
</script>
<?php } ?>
</body>
</html>
