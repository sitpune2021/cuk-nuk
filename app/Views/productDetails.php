<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cuknuk- Product Details</title>
    <meta charset="utf-8">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
   

</head>
 
<?php include 'Include/header.php';?> 

<div id="page-content"> 

    <!--Page Header-->
    <!--<div class="page-header text-center">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">-->
    <!--                <div class="page-title"><h1>Product Details</h1></div>-->
                    <!--Breadcrumbs-->
    <!--                <div class="breadcrumbs"><a href="<?=base_url();?>" title="Back to the home page">Home</a><span class="title"><i class="icon anm anm-angle-right-l"></i>Shop</span><span class="main-title"><i class="icon anm anm-angle-right-l"></i>Product Details</span></div>-->
                    <!--End Breadcrumbs-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    
   <div id="wrapper" class="wrapper-fluid banners-effect-5" style="margin-top:50px;">
    
	<div class="main-container container">
		
        <div class="row">
            <div class="col-md-4">
                <div class="product img-height">
                    <?php if (!empty($pDetails['image'])) { ?>
                        <img src="<?=base_url();?>public/Admin/assets/images/Product_images/<?=$pDetails['image'];?>" style="height: 216px;width: 350px;">
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-8">
            <div class="productname ">
                   <h3><?=$pDetails['product_name'];?></h3> 
            </div>
                   <div><?=$pDetails['description'];?>
            </div>
            </div>
             
                   
                   
            </div>
        </div>
		
	</div>
	</div>
	
<?php echo view ('Include/footer.php');?> 
<script>
   $(document).ready(function() {
        $('.product').click(function() {
            var image = $(this).data('image');
            var description = $(this).data('description');
            $('#modal-product-image').attr('src', '<?= base_url(); ?>public/Admin/assets/images/Product_images/' + image);
            $('#modal-product-description').text(description);
        });
    });
</script>

</body>
</html>