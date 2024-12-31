<!DOCTYPE html>
<html class="no-js" lang="en">
    
<!-- Mirrored from www.annimexweb.com/items/hema/product-layout1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Dec 2024 11:42:06 GMT -->
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="description">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Title Of Site -->
        <title>Product Details</title>

</head>

    <body class="template-product product-layout1">
        <!--Page Wrapper-->
        <div class="page-wrapper">
			
			<?php include 'Include/header.php';?> 
			
            <!-- Body Container -->
            <div id="page-content"> 
                <!--Page Header-->
                <div class="page-header text-center">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <!--Breadcrumbs-->
                                <div class="breadcrumbs"><a href="<?php base_url();?>" title="Back to the home page">Home</a><span class="main-title fw-bold"><i class="icon anm anm-angle-right-l"></i>Product Details</span></div>
                                <!--End Breadcrumbs-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Page Header-->

                <!--Main Content-->
                <div class="container mt-3">     
                    <!--Product Content-->
                    <div class="product-single">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 product-layout-img mb-4 mb-md-0">
                                <!-- Product Horizontal -->
                                <div class="product-details-img product-horizontal-style">
                                    
                                    <div class="zoompro-wrap" style="text-align: center; display: flex; justify-content: center; align-items: center; height: 100%;">
                                        <?php if (!empty($pDetails['image'])) { ?>
                                        <div class="zoompro-span" style="border: 2px solid #c1c1c1; padding: 5px;padding:40px;"><img id="zoompro" class="zoompro" src="<?=base_url();?>public/Admin/assets/images/Product_images/<?=$pDetails['image'];?>" data-zoom-image="<?=base_url();?>public/Admin/assets/images/Product_images/<?=$pDetails['image'];?>" alt="product" width="300" height="300" style="display: block; margin: auto;"/></div>
                                        <?php } ?>
                                    </div>
                                   
                                </div>
                                <!-- End Product Horizontal -->
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 product-layout-info">
                                <!-- Product Details -->
                                <div class="product-single-meta">
                                    <h2 class="product-main-title"><?=$pDetails['product_name'];?></h2>
                                    <!-- Product Info -->
                                    <div class="product-info">
                                        <p class="product-stock d-flex">Category :
                                            <span class="pro-stockLbl ps-0">
												<?php 
													$category_name=$pDetails['product_type'];
													$db = db_connect('default');
													$query = $db->query("SELECT * FROM `tbl_category` WHERE id='$category_name' ");
													$data = $query->getRowArray();
												?>
                                                <span class="d-flex-center stockLbl instock text-uppercase"><?=$data['category_name'];?></span>
                                            </span>
                                        </p>
                                    </div>
                                    <!-- End Product Info -->
                                    <hr>
                                   
                                </div>
                                <!-- End Product Details -->

                                <!-- Product Info -->
                                <div class="userViewMsg featureText" data-user="20" data-time="11000"> <?=$pDetails['description'];?></div> 
                                <!-- End Product Info -->

                            </div>
                        </div>
                    </div>
                    <!--Product Content-->
					
					<div class="view-collection text-center mt-4 mt-md-5">
						<a href="<?php base_url();?>ContactUs" class="btn btn-primary btn-lg rounded-pill">Add Enquiry</a>
					</div> 
                </div>
                <!--End Main Content-->

           </div>
            <!-- End Body Container -->
	
            <?php include 'Include/footer.php';?> 


          


