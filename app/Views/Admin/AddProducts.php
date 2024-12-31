<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>Cuknuk- Add Products</title>
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
                        <?php if(!empty($ProductD)) { ?>
                        <h4 class="card-title">Update Product</h4>
                        <?php } else {?>
                        <h4 class="card-title">Add Product</h4>
                         <?php } ?>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            
                        <?php 
                        $producttype        = (!empty($ProductD['product_type']))          ? $ProductD['product_type'] : "";
                        $productname        = (!empty($ProductD['product_name']))          ? $ProductD['product_name'] : "";
                        $image              = (!empty($ProductD['image']))                 ? $ProductD['image'] : "";
                        $alttag             = (!empty($ProductD['alt_tag']))               ? $ProductD['alt_tag'] : "";
                        $description        = (!empty($ProductD['description']))           ? $ProductD['description'] : "";
                        ?>
                                            
                        <?php echo form_open_multipart('/ProductInserted', array('autocomplete' => 'off')); ?>
                        <?php 
                        if(!empty($ProductD)) { ?>
                        <input type="hidden" name="editId" value="<?=$ProductD['id'];?>" >   
                        <input type="hidden" name="editImage" value="<?=$image;?>" >   
                        <?php } ?>
                                            
                                <div class="row">
                                
                                <div class="col-sm-6 mb-3">
                                    <label class="me-sm-2">Product Type<span class="Required">*</span></label>
                                    <?php $prodname = set_value('product_type');  ?>
                                    <select class="form-control" id="product_type" name="product_type"> 
                                    <option value="">Select Category</option>
                                    <?php foreach($categoryList as $list){ ?>
                                    <option value="<?=$list['id'];?>" <?php if($producttype==$list['id']){ echo "selected"; } ?>  <?php if($prodname==$list['id']){ echo "selected"; } ?>><?=$list['category_name'];?></option>
                                    <?php } ?>
                                    </select>
                                    <?php if (isset($validation)): ?>
                                    <div class="text-danger">
                                    <?= $validation->getError('product_type'); ?>
                                    </div>
                                    <?php endif; ?>
                                    <?php if (session()->getFlashdata('validation')): ?>
                                        <div class="text-danger">
                                            <?= session()->getFlashdata('validation')->getError('product_type'); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                
                                <div class="col-sm-6 mb-3">
                                     <label class="me-sm-2">Product Name<span class="Required">*</span></label>
                                    <input type="text" id="product_name" name="product_name" class="form-control input-default" placeholder="Enter Product Name" <?php if(!empty($ProductD)) { ?> value="<?=$productname;?>" <?php } else {?> value="<?php echo set_value('product_name'); ?>" <?php } ?>>
                                    <?php if (isset($validation)): ?>
                                    <div class="text-danger">
                                    <?= $validation->getError('product_name'); ?>
                                    </div>
                                    <?php endif; ?>
                                    <?php if (session()->getFlashdata('validation')): ?>
                                        <div class="text-danger">
                                            <?= session()->getFlashdata('validation')->getError('product_name'); ?>
                                        </div>
                                    <?php endif; ?>
                                    
                                </div>
                                
                                
                              <div class="<?php if(empty($image)){ ?>col-sm-6 mb-3 <?php } else { ?> col-sm-5 mb-3 <?php } ?>">
                                     <label class="me-sm-2">Product Image <span class="Required">*</span> [207*163]</label>
                                    <input type="file" id="image" name="image" class="form-control input-default" accept=".jpg, .png" value="<?=$image;?>">
                                      <?php if (isset($validation)): ?>
                                      <div class="text-danger">
                                    <?= $validation->getError('image'); ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <?php if(!empty($image)){ ?>
                                <div class="col-sm-1 mb-3">
                                    <a href="<?=base_url();?>public/Admin/assets/images/Product_images/<?=$image;?>" target="_blank">
                                        <img src="<?=base_url();?>public/Admin/assets/images/Product_images/<?=$image;?>" style="width: 40px;margin-top: 33px;">
                                        </a>
                                </div>
                                <?php } ?>
                                
                                
                                <div class="col-sm-12 mb-3">
                                     <label class="me-sm-2">Description</label>
                                     <textarea class="summernote" id="description" name="description"> <?=$description;?> </textarea>
                                    <?php if (isset($validation)): ?>
                                    <div class="text-danger">
                                    <?= $validation->getError('description'); ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                
                                </div>
                                
                                <div class="col-sm-12">
                                <div class="col-sm-12 mb-3" style="text-align: right;">
                                    <?php if(!empty($ProductD)) { ?>
                                     <button type="submit" class="btn btn-primary" name="submit">Update</button>
                                      <a href="<?= base_url(); ?>ViewProducts" class="btn btn-danger">Cancel</a>
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

<?php if(!empty($_SESSION['productMsg'])) { ?>
<script>

$(document).ready(function() {
var msg = '<?=$_SESSION['productMsg'];?>';

 Swal.fire({
     title: msg, 
     icon: "success",   
    showCancelButton: false,   
    confirmButtonText: "Ok",
    }).then(function(){
    window.location.href = "<?=base_url();?>ViewProducts"; 
});
});
</script>

<?php } ?>
</body>
</html>