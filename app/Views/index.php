<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="description">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Title Of Site -->
        <title>CUKNUK</title>
</head>

    <body class="template-index index-demo7">
    <div class="page-wrapper">

    <?php include 'Include/header.php';?>

            <!-- Body Container -->
            <div id="page-content" class="mb-0">
                <!--Home Slideshow-->
                <section class="slideshow slideshow-wrapper">
                    <div class="container container-1330">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-8"> 
                                
                                <div class="home-slideshow slideshow-medium slick-arrow-dots circle-arrow">
                               <?php foreach($sliderDIndex1 as $row){ ?>
                                    <div class="slide">
                                        <div class="slideshow-wrap bg-size rounded-4">
                                            <img class="bg-img rounded-4 blur-up lazyload" data-src="<?=base_url();?>public/Admin/assets/images/Slider_image/<?=$row['image'];?>" src="<?=base_url();?>public/Admin/assets/images/Slider_image/<?=$row['image'];?>" alt="slideshow" title="" width="1148" height="710" />                                   
                                            <div class="slideshow-content slideshow-overlay middle-center">
                                                <div class="slideshow-content-in">
                                                    <!-- <div class="wrap-caption animation style3">      
                                                        <p class="ss-small-title">Best Organic</p>
                                                        <h2 class="ss-mega-title">100% Organic Foods</h2>
                                                        <p class="ss-sub-title xs-hide">The more you love your health, more you eat organic. <br/>No medicine can heal you better than organic food does</p>
                                                        <div class="ss-btnWrap">
                                                            <a class="btn btn-primary rounded-pill" href="<?=base_url();?>product">Explore Now</a>
                                                        </div>
                                                    </div> -->
                                                </div>
                                            </div>                                    
                                        </div>
                                    </div>
                                <?php } ?>

                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mt-4 mt-lg-0">
                                <div class="collection-banner-grid">
                                    <div class="row sp-row">
                                        <?php foreach($sliderDIndex2 as $row){ ?>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-12 collection-banner-item">
                                            <div class="collection-item sp-col" >
                                                  <div class="img sliderbox">
                                                        <img class="rounded-4 w-100 blur-up lazyload" data-src="<?=base_url();?>public/Admin/assets/images/Slider_image/<?=$row['image'];?>" src="<?=base_url();?>public/Admin/assets/images/Slider_image/<?=$row['image'];?>" alt="collection" title="" width="454" height="268" />
                                                    </div>
                                                    <div class="details middle-left">
                                                        <div class="inner">
                                                            <!-- <span class="small-title mb-2 text-muted d-block alt-font">Vegetables</span>
                                                            <h3 class="title">Fresh & Clean</h3>
                                                            <span class="btn btn-outline-secondary rounded-pill mt-3 btn-small">Shop Now</span> -->
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                        <?php foreach($sliderDIndex3 as $row){ ?>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-12 collection-banner-item">
                                            <div class="collection-item sp-col" style="padding-top: 0.5rem;">
                                                    <div class="img sliderbox">
                                                        <img class="rounded-4 w-100 blur-up lazyload" data-src="<?=base_url();?>public/Admin/assets/images/Slider_image/<?=$row['image'];?>" src="<?=base_url();?>public/Admin/assets/images/Slider_image/<?=$row['image'];?>" alt="collection" title="" width="454" height="268" />
                                                    </div>
                                                    <div class="details middle-left">
                                                        <div class="inner">
                                                            <!-- <span class="small-title mb-2 alt-font text-muted d-block">Popular Foods</span>
                                                            <h3 class="title">Everyday Fresh &amp; <br/>Clean with Our <br/>Products</h3>
                                                            <span class="btn btn-outline-secondary rounded-pill mt-3 btn-small">Shop Now</span> -->
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--End Home Slideshow-->

                <!--Products Slider-->
                <section class="section product-slider pb-0">
                    <div class="container container-1330">
                        <div class="section-header">
                            <h2>Organic & Fresh Products</h2>
                        </div>

                        <div class="product-slider-5items gp15 arwOut5 hov-arrow circle-arrow grid-products pro-hover3">                                           
                        <?php foreach($productD as $row){ 
                            $category_name=$row['product_type'];
                            $db = db_connect('default');
                            $query = $db->query("SELECT * FROM `tbl_category` WHERE id='$category_name' ");
                            $data = $query->getRowArray();
                        ?>
                                   
                        <div class="item col-item">
                                
                            <div class="product-box">
                                    <!-- Start Product details -->
                                    <div class="product-image">
                                       <a href="<?=base_url();?>productDetails?per=<?=$row['permalink'];?>" class="product-img rounded-4">
                                        <?php if (!empty($row['image'])) { ?>
                                            <img class="primary rounded-4 blur-up lazyload img-height" data-src="<?=base_url();?>public/Admin/assets/images/Product_images/<?=$row['image'];?>" src="<?=base_url();?>public/assets/images/products/vegetables-product1.jpg" alt="Product" title="Product" width="400" height="400" />
                                            <img class="hover rounded-4 blur-up lazyload img-height" data-src="<?=base_url();?>public/Admin/assets/images/Product_images/<?=$row['image'];?>" src="<?=base_url();?>public/assets/images/products/vegetables-product1-1.jpg" alt="Product" title="Product" width="400" height="400" />
                                        <?php } ?>
                                        </a>
                                    </div>
                                    <div class="product-details text-left">
                                        <div class="product-vendor"><?=$data['category_name'];?></div>
                                        <div class="product-name-price">
                                            <div class="product-name">
                                                <a href="<?=base_url();?>productDetails?per=<?=$row['permalink'];?>"><?=$row['product_name'];?></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End product details -->
                                </div>
                            </div>    
                            
                                
                            <?php } ?>                                  
                        </div>  

                        <div class="view-collection text-center mt-4 mt-md-5 d-none">
                            <a href="shop-left-sidebar.html" class="btn btn-secondary btn-lg">View Collection</a>
                        </div>
                    </div>
                </section>
                <!--End Products Slider-->

                <!--Collection banner-->
                <section class="section collection-banners four-one-bnr pb-0">
                    <div class="container container-1330">                      
                        <div class="section-header d-none">
                            <h2>Explore All Department</h2>
                            <p>There are many variations passages Lorem Ipsum available majority</p>
                        </div>

                        <div class="collection-banner-grid onelarge-four-bnr">
                            <div class="row row-cols-lg-2 row-cols-md-2 row-cols-sm-1 row-cols-1">
                                <div class="collection-banner-item mb-3 mb-md-0">
                                    <div class="row sp-row row-cols-lg-1 row-cols-md-1 row-cols-sm-1 row-cols-1">
                                        <div class="collection-item sp-col large-bnr ctImg1">
                                               <div class="img">
                                                    <img class="rounded-4 w-100 blur-up lazyload" data-src="<?=base_url();?>public/Admin/assets/images/Banner_image/<?=$Banner1['image'];?>" src="<?=base_url();?>public/Admin/assets/images/Banner_image/<?=$Banner1['image'];?>" alt="collection" title="" width="646" height="643" />
                                                </div>
                                                <div class="details bottom-right text-left whiteText p-0">
                                                    <div class="inner">
                                                        <!-- <span class="small-title mb-1 d-block xs-hide alt-font">Tasty and fresh greens</span>
                                                        <h3 class="title text-capitalize text-white mb-2">Finest Quality</h3>
                                                        <span class="btn btn-primary btn-md rounded-pill mt-0 xs-hide">Order Now</span> -->
                                                    </div>
                                                </div>
                                         </div>
                                    </div>
                                </div>
                                <div class="collection-banner-item">
                                    <div class="row sp-row row-cols-lg-2 row-cols-md-2 row-cols-sm-2 row-cols-2">
                                        <div class="collection-item sp-col sale-banner ctImg2">
                                                <div class="img">
                                                    <img class="rounded-4 w-100 blur-up lazyload" data-src="<?=base_url();?>public/Admin/assets/images/Banner_image/<?=$Banner2['image'];?>" src="<?=base_url();?>public/Admin/assets/images/Banner_image/<?=$Banner2['image'];?>" alt="collection" title="" width="306" height="306" />
                                                </div>
                                                <div class="details middle-center text-center p-md-2 w-100">
                                                    <div class="inner">
                                                        <!-- <span class="small-title mb-2 mb-lg-3 d-block text-white alt-font fs-6 xs-hide">Don't Miss Our Deals</span>
                                                        <h3 class="title text-white">Grab The Best <br/>Offer of This Week</h3>
                                                        <span class="btn btn-primary btn-md rounded-pill mt-3 xs-hide">Shop Now</span> -->
                                                    </div>
                                                </div>
                                        </div>   
                                        <div class="collection-item sp-col ctImg3">
                                                <div class="img">
                                                    <img class="rounded-4 w-100 blur-up lazyload" data-src="<?=base_url();?>public/Admin/assets/images/Banner_image/<?=$Banner3['image'];?>" src="<?=base_url();?>public/Admin/assets/images/Banner_image/<?=$Banner3['image'];?>" alt="collection" title="" width="306" height="306" />
                                                </div>
                                        </div>
                                        <div class="collection-item sp-col ctImg4">
                                               <div class="img">
                                                    <img class="rounded-4 w-100 blur-up lazyload" data-src="<?=base_url();?>public/Admin/assets/images/Banner_image/<?=$Banner4['image'];?>" src="<?=base_url();?>public/Admin/assets/images/Banner_image/<?=$Banner4['image'];?>" alt="collection" title="" width="306" height="306" />
                                                </div>
                                        </div>
                                        <div class="collection-item sp-col ctImg5">
                                                <div class="img">
                                                    <img class="rounded-4 w-100 blur-up lazyload" data-src="<?=base_url();?>public/Admin/assets/images/Banner_image/<?=$Banner5['image'];?>" src="<?=base_url();?>public/Admin/assets/images/Banner_image/<?=$Banner5['image'];?>" alt="collection" title="" width="306" height="306" />
                                                </div>
                                        </div>
                                    </div>
                                </div>                               
                            </div>
                        </div>
                    </div>
                </section>
                <!--End Collection banner-->

                <!--Products With Tabs-->
                <section class="section product-slider tab-slider-product">
                    <div class="container container-1330">
                        <div class="section-header">
                            <h2>Our Best Products</h2>
                        </div>
                                            
                        <div class="tabs-listing">
                            <ul class="nav nav-tabs style1 justify-content-center" id="productTabs" role="tablist">
                                <?php 
                                    $counter=0;
                                    foreach($catD as $cat){
                                //    print_r($cat);die;
                                ?>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link text-uppercase <?php echo $counter === 0 ? 'active' : ''; ?> body-font" id="<?= preg_replace('/[^a-zA-Z0-9]/', '',$cat['category_name']); ?>-tab" data-bs-toggle="tab" data-bs-target="#<?= preg_replace('/[^a-zA-Z0-9]/', '',$cat['category_name']); ?>" type="button" role="tab" aria-controls="<?= preg_replace('/[^a-zA-Z0-9]/', '',$cat['category_name']); ?>" aria-selected="true"><?=$cat['category_name'];?></button>
                                </li>
                            <?php  $counter++; } ?>
                            </ul>

                            <div class="tab-content" id="productTabsContent">
                            <?php  $counter=0; foreach($catD as $cat){ 
                                $categoryId = $cat['id'];   
                                $db = db_connect('default');
                                $query = $db->query("SELECT * FROM `tbl_product` WHERE product_type=$categoryId LIMIT 4");
                                $data = $query->getResultArray();
                                
                                ?>
                                <div class="tab-pane show <?php echo $counter === 0 ? 'active' : ''; ?>" id="<?= preg_replace('/[^a-zA-Z0-9]/', '',$cat['category_name']); ?>" role="tabpanel" aria-labelledby="<?= preg_replace('/[^a-zA-Z0-9]/', '',$cat['category_name']); ?>-tab">
                                    <!--Product Grid-->
                                    <div class="grid-view-items">
                                        <div class="grid-products pro-hover3 row col-row row-cols-lg-5 row-cols-md-3 row-cols-sm-3 row-cols-2 justify-content-center">    
                                            
                                        <?php foreach($data as $data){ ?>
                                            <div class="item col-item">
                                                <div class="product-box">
                                                    <div class="product-image">
                                                        <a href="<?=base_url();?>productDetails?per=<?=$data['permalink'];?>" class="product-img rounded-4">
                                                           <img class="primary rounded-4 blur-up lazyload img-height" data-src="<?=base_url();?>public/Admin/assets/images/Product_images/<?=$data['image'];?>" src="<?=base_url();?>public/Admin/assets/images/Product_images/<?=$data['image'];?>" alt="Product" title="Product" width="400" height="400" />
                                                           <img class="hover rounded-4 blur-up lazyload img-height" data-src="<?=base_url();?>public/Admin/assets/images/Product_images/<?=$data['image'];?>" src="<?=base_url();?>public/Admin/assets/images/Product_images/<?=$data['image'];?>" alt="Product" title="Product" width="400" height="400" />
                                                        </a>
                                                    </div>
                                                     
                                                    <div class="product-details text-left">
                                                    <div class="product-vendor"><?php echo $cat['category_name']; ?></div>
                                                        <div class="product-name-price">
                                                            <div class="product-name">
                                                                <a href="<?=base_url();?>productDetails?per=<?=$data['permalink'];?>"><?php echo $data['product_name']; ?></a>
                                                            </div>
                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                            </div>  
                                            <?php } ?>                                          
                                        </div>  
                                        
                                        <?php if(!empty($data)){ ?>
                                        <div class="view-collection text-center mt-4 mt-md-5">
                                            <a href="<?php base_url(); ?>ViewCategories?ID=<?php echo base64_encode($data['product_type']); ?>" class="btn btn-primary btn-lg rounded-pill">View All</a>
                                        </div> 
                                        <?php } ?>
                                    </div>
                                    <!--End Product Grid-->
                                </div>

                            <?php $counter++; } ?>
                                        
                            </div>
                        </div>
                    </div>
                </section>
                <!--End Products With Tabs-->

                <!--Popular Categories-->
                <section class="section collection-slider pop_cate">
                    <div class="container container-1330">
                        <div class="section-header">
                            <h2>Popular Categories</h2>
                        </div>
                        
                        <div class="collection-slider-5items gp15 arwOut5 hov-arrow circle-arrow">

                        <?php foreach($categoryD as $row){ ?>
                            <div class="category-item zoomscal-hov rounded-4">
                                <a href="<?=base_url();?>ViewCategories?ID=<?php echo base64_encode($row['id']); ?>" class="category-link clr-none">
                                    <?php if (!empty($row['image'])) { ?>
                                        <div class="zoom-scal zoom-scal-nopb rounded-circle"><img class="rounded-circle blur-up lazyload" data-src="<?=base_url();?>public/Admin/assets/images/Category_images/<?=$row['image'];?>" src="<?=base_url();?>public/assets/images/collection/demo7-collection1.png" alt="collection" title="" width="211" height="211" style="max-height:200px;min-height:200px;"/></div>
                                    <?php } ?>
                                    <div class="details mt-3 pt-1 text-center">
                                        <h4 class="category-title mb-0 body-font" style="min-height:15px;max-height:15px;"><?=$row['category_name'];?></h4>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>

                        </div>
                    </div>
                </section>
                <!--End Popular Categories-->

                <!--List Products Section-->
                <!-- <div class="section mini-product">
                    <div class="container container-1330">
                        <div class="row">
                            <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                                <h4 class="column-ttl">Best Seller</h4>
                                <div class="mini-product-list">   
                                    <div class="mini-list-item d-flex align-items-center w-100 clearfix">
                                        <div class="mini-image"><a class="item-link" href="product-layout1.html"><img class="primary rounded-5 blur-up lazyload" data-src="<?=base_url();?>public/assets/images/products/vegetables-small-product1.jpg" src="<?=base_url();?>public/assets/images/products/vegetables-small-product1.jpg" alt="image" title="product" width="85" height="85" /></a></div>
                                        <div class="ms-3 details text-break">
                                            <div class="product-name"><a class="item-title" href="product-layout1.html">Kashmiri Apple</a></div>
                                            <div class="product-price"><span class="old-price">$114.00</span><span class="price">$99.00</span></div>
                                            <div class="product-review d-flex align-items-center justify-content-start">
                                                <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i>
                                                <span class="caption hidden ms-2">3 reviews</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mini-list-item d-flex align-items-center w-100 clearfix">
                                        <div class="mini-image"><a class="item-link" href="product-layout1.html"><img class="primary rounded-5 blur-up lazyload" data-src="<?=base_url();?>public/assets/images/products/vegetables-small-product2.jpg" src="<?=base_url();?>public/assets/images/products/vegetables-small-product2.jpg" alt="image" title="product" width="85" height="85" /></a></div>
                                        <div class="ms-3 details text-break">
                                            <div class="product-name"><a class="item-title" href="product-layout1.html">Organic Potatos</a></div>
                                            <div class="product-price"><span class="price">$128.00</span></div>
                                            <div class="product-review d-flex align-items-center justify-content-start">
                                                <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i>
                                                <span class="caption hidden ms-2">9 reviews</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mini-list-item d-flex align-items-center w-100 clearfix">
                                        <div class="mini-image"><a class="item-link" href="product-layout1.html"><img class="primary rounded-5 blur-up lazyload" data-src="<?=base_url();?>public/assets/images/products/vegetables-small-product3.jpg" src="<?=base_url();?>public/assets/images/products/vegetables-small-product3.jpg" alt="image" title="product" width="85" height="85" /></a></div>
                                        <div class="ms-3 details text-break">
                                            <div class="product-name"><a class="item-title" href="product-layout1.html">Fresh Tomato</a></div>
                                            <div class="product-price"><span class="price">$99.00</span></div>
                                            <div class="product-review d-flex align-items-center justify-content-start">
                                                <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i>
                                                <span class="caption hidden ms-2">30 reviews</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 col-md-4 col-lg-4 mt-4 mt-sm-0">
                                <h4 class="column-ttl">New Products</h4>
                                <div class="mini-product-list">   
                                    <div class="mini-list-item d-flex align-items-center w-100 clearfix">
                                        <div class="mini-image"><a class="item-link" href="product-layout1.html"><img class="primary rounded-5 blur-up lazyload" data-src="<?=base_url();?>public/assets/images/products/vegetables-small-product4.jpg" src="<?=base_url();?>public/assets/images/products/vegetables-small-product4.jpg" alt="image" title="product" width="85" height="85" /></a></div>
                                        <div class="ms-3 details text-break">
                                            <div class="product-name"><a class="item-title" href="product-layout1.html">Fresh Pomegranate</a></div>
                                            <div class="product-price"><span class="old-price">$114.00</span><span class="price">$99.00</span></div>
                                            <div class="product-review d-flex align-items-center justify-content-start">
                                                <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i>
                                                <span class="caption hidden ms-2">3 reviews</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mini-list-item d-flex align-items-center w-100 clearfix">
                                        <div class="mini-image"><a class="item-link" href="product-layout1.html"><img class="primary rounded-5 blur-up lazyload" data-src="<?=base_url();?>public/assets/images/products/vegetables-small-product5.jpg" src="<?=base_url();?>public/assets/images/products/vegetables-small-product5.jpg" alt="image" title="product" width="85" height="85" /></a></div>
                                        <div class="ms-3 details text-break">
                                            <div class="product-name"><a class="item-title" href="product-layout1.html">Fresh Avocado</a></div>
                                            <div class="product-price"><span class="price">$128.00</span></div>
                                            <div class="product-review d-flex align-items-center justify-content-start">
                                                <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i>
                                                <span class="caption hidden ms-2">9 reviews</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mini-list-item d-flex align-items-center w-100 clearfix">
                                        <div class="mini-image"><a class="item-link" href="product-layout1.html"><img class="primary rounded-5 blur-up lazyload" data-src="<?=base_url();?>public/assets/images/products/vegetables-small-product6.jpg" src="<?=base_url();?>public/assets/images/products/vegetables-small-product6.jpg" alt="image" title="product" width="85" height="85" /></a></div>
                                        <div class="ms-3 details text-break">
                                            <div class="product-name"><a class="item-title" href="product-layout1.html">Organic Grapes</a></div>
                                            <div class="product-price"><span class="price">$99.00</span></div>
                                            <div class="product-review d-flex align-items-center justify-content-start">
                                                <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i>
                                                <span class="caption hidden ms-2">30 reviews</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mt-4 mt-sm-5 mt-lg-0">
                                <div class="ctg-bnr-wrap position-relative h-100">
                                    <a href="shop-left-sidebar.html" class="ctg-image ratio ratio-1x1 h-100 rounded-4 d-block">
                                        <img class="rounded-4 blur-up lazyload" data-src="<?=base_url();?>public/assets/images/collection/demo7-side-bnr1.jpg" src="<?=base_url();?>public/assets/images/collection/demo7-side-bnr1.jpg" alt="collection" width="307" height="419" />
                                    </a>
                                    <div class="ctg-content d-flex-center flex-nowrap flex-column h-100">  
                                        <span class="ctg-small-title mb-1 fs-6 d-block alt-font">100 % Natural Organic</span>
                                        <h2 class="ctg-title m-0">Healthy Dried</h2>  
                                        <p class="ctg-des">Start at Just $39</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!--End List Products Section-->

            </div>
            <!-- End Body Container -->
            <?php include 'Include/footer.php';?> 