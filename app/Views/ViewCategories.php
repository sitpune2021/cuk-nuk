<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="description">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Title Of Site -->
        <title>View Category</title>
</head>

    <body class="sub-collection-page sub-collection-style2-page">
        <!--Page Wrapper-->
        <div class="page-wrapper">
        <?php include 'Include/header.php';?>

            <!-- Body Container -->
            <div id="page-content"> 
                <!--Page Header-->
                <!--<div class="page-header text-center">-->
                <!--    <div class="container">-->
                <!--        <div class="row">-->
                <!--            <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">-->
                <!--                <div class="page-title"><h1><?php echo $CatName['category_name']; ?></h1></div>-->
                                <!--Breadcrumbs-->
                <!--                <div class="breadcrumbs"><a href="<?=base_url();?>" title="Back to the home page">Home</a><span class="title"><i class="icon anm anm-angle-right-l"></i>Category</span><span class="main-title"><i class="icon anm anm-angle-right-l"></i><?php echo $CatName['category_name']; ?></span></div>-->
                                <!--End Breadcrumbs-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--End Page Header-->

                <!--Main Content-->
                <div class="container">     
                    
                    <!--Product Infinite-->
                    <div class="sub-collectio-products section pb-0">
                      
                        <!--Product Grid-->
                        <div class="grid-products grid-view-items">
                            <div class="row col-row product-options row-cols-lg-5 row-cols-md-3 row-cols-sm-3 row-cols-2 justify-content-center">
                                
                            <?php  $n=1;  foreach($ProductD as $row){ 

                                //print_r($row['id']);?>
                                <div class="item col-item">
                                    <div class="product-box">
                                        <div class="product-image">
                                            <?php if (!empty($row['image'])) {  ?>
                                            <a href="<?=base_url();?>productDetails?per=<?=$row['permalink'];?>" class="product-img rounded-0"><img class="rounded-0 blur-up lazyload img-height" src="<?=base_url();?>public/Admin/assets/images/Product_images/<?=$row['image'];?>" alt="Product" title="Product" width="625" height="808" style="max-height:250px;min-height:250px;"/></a>
                                            <?php }  ?>
                                        </div>
                                        <div class="product-details text-center">
                                            <div class="product-name">
                                                <a href="<?=base_url();?>productDetails?per=<?=$row['permalink'];?>"><?=$row['product_name'];?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>  
                            </div>                        
                        </div>
                        <!--End Product Grid-->    
                        
                    </div>
                    <!--End Product Infinite-->
                    <!--End Sub Products--> 
                </div>
                <!--End Main Content-->
            </div>
            <!-- End Body Container -->
            <?php include 'Include/footer.php';?>