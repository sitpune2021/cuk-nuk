<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>Cuknuk - Add Banner</title>
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
                        <h4 class="card-title">Update Banner</h4>
                        
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            
                        <?php 
                        $image       = (!empty($BannerD['image']))             ? $BannerD['image'] : "";
                        $index_no    = (!empty($BannerD['index_no']))          ? $BannerD['index_no'] : "";
                        ?>
                                            
                        <?php echo form_open_multipart('/UpdateBannerPro', array('autocomplete' => 'off')); ?>
                        <?php 
                        if(!empty($BannerD)) { ?>
                        <input type="hidden" name="editId" value="<?=$BannerD['id'];?>" >   
                        <input type="hidden" name="editImage" value="<?=$image;?>" >   
                        <?php } ?>
                                            
                                <div class="row">
                                
                                <div class="<?php if(empty($image)){ ?>col-sm-6 mb-3 <?php } else { ?> col-sm-5 mb-3 <?php } ?>">
                                     <label class="me-sm-2">Banner Image <span class="Required">*</span> <?php if($index_no=='1'){?>[645*645] <?php } else {?> [306*306] <?php } ?></label>
                                    <input type="file" id="image" name="image" class="form-control input-default" accept=".jpg, .png" value="<?=$image;?>">
                                      <?php if (isset($validation)): ?>
                                      <div class="text-danger">
                                    <?= $validation->getError('image'); ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <?php if(!empty($image)){ ?>
                                <div class="col-sm-1 mb-3">
                                    <a href="<?=base_url();?>public/Admin/assets/images/Banner_image/<?=$image;?>" target="_blank">
                                        <img src="<?=base_url();?>public/Admin/assets/images/Banner_image/<?=$image;?>" style="width: 40px;margin-top: 33px;">
                                        </a>
                                </div>
                                <?php } ?>

                                <div class="col-sm-6 mb-3">
                                     <label class="me-sm-2">Index No <span class="Required">*</span></label>
                                    <input type="text" id="index_no" name="index_no" class="form-control input-default" placeholder="Enter Index No. "  readonly <?php if(!empty($BannerD)) { ?> value="<?=$index_no;?>" <?php } else {?> value="<?php echo set_value('index_no'); ?>" <?php } ?>>
                                    <?php if (isset($validation)): ?>
                                    <div class="text-danger">
                                    <?= $validation->getError('index_no'); ?>
                                    </div>
                                    <?php endif; ?>
                                </div>

                                </div>
                                
                                <div class="col-sm-12">
                                <div class="col-sm-12 mb-3" style="text-align: right;">
                                    <button type="submit" class="btn btn-primary" name="submit">Update</button>
                                      <a href="<?= base_url(); ?>ViewBanner" class="btn btn-danger">Cancel</a>                   
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

<?php if(!empty($_SESSION['bannerMsg'])) { ?>
<script>

$(document).ready(function() {
var msg = '<?=$_SESSION['bannerMsg'];?>';

 Swal.fire({
     title: msg, 
     icon: "success",   
    showCancelButton: false,   
    confirmButtonText: "Ok",
    }).then(function(){
    window.location.href = "<?=base_url();?>ViewBanner"; 
});
});
</script>
<?php } ?>
</body>
</html>
