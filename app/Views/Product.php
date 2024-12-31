<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="description">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Title Of Site -->
        <title>Products</title>
	<style>
	.filter-section {
    padding: 20px; 
    border: 1px solid #ddd;
    background-color: #f3fbe1; 
    border-radius: 5px; 
    margin-bottom: 20px; 
	margin-top: 30px
}

.filter-section h4 {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 20px; 
    color: #333; 
}

.form-check {
    margin-bottom: 15px;
}

.form-check-input {
    margin-top: 3px; 
}

.form-check-label {
    font-size: 16px; 
    color: #000; 
}

.form-check-label {
    margin-left: 8px; 
}


	</style>
</head>

    <body class="sub-collection-page sub-collection-style2-page">
        <!--Page Wrapper-->
        <div class="page-wrapper">
        <?php include 'Include/header.php';?>

            <!-- Body Container -->
            <div id="page-content"> 

                <!--Main Content-->
                <div class="container">     
                    
					<div class="row">
					
						<div class="col-lg-3 col-md-4">
							<div class="filter-section">
								<h4>Filter by Category</h4>
								<form id="category-filter-form">
									<?php foreach($categories as $category) { ?>
										<div class="form-check">
											<input class="form-check-input category-checkbox" type="checkbox" name="category[]" id="<?=$category['id'];?>" value="<?=$category['id'];?>" onchange="getCategoryProducts(<?= $category['id'] ?>)" >
											<label class="form-check-label" for="<?=$category['id'];?>">
												<?=$category['category_name'];?>
											</label>
										</div>
									<?php } ?>
								</form>
							</div>
						</div>
					
					
					<div class="col-lg-9 col-md-8">
                    <!--Product Infinite-->
					
					<div id="showProduct"></div> 
					
                    <div class="sub-collectio-products section pb-0"  id="showProduct1">
                      
                        <!--Product Grid-->
                        <div class="grid-products grid-view-items">
                            <div class="row col-row product-options row-cols-lg-4 row-cols-md-3 row-cols-sm-3 row-cols-2 justify-content-center">
                                
                            <?php  $n=1;  foreach($ProductD as $row){ 

                                //print_r($row['id']);?>
                                <div class="item col-item">
                                    <div class="product-box">
                                        <div class="product-image">
                                            <?php if (!empty($row['image'])) {  ?>
                                            <a href="<?=base_url();?>productDetails?per=<?=$row['permalink'];?>" class="product-img rounded-0"><img class="rounded-0 blur-up lazyload  img-height" src="<?=base_url();?>public/Admin/assets/images/Product_images/<?=$row['image'];?>" alt="Product" title="Product"/></a>
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
					
					</div>
					</div>
                </div>
                <!--End Main Content-->
            </div>
            <!-- End Body Container -->
            <?php include 'Include/footer.php';?>

<script>

function getCategoryProducts(cat_id) {
    var selectedCategory= [];

    $("input[name='category[]']:checked").each(function() {
        selectedCategory.push($(this).val());
    });

    if (selectedCategory.length > 0) {
        $.ajax({
            url: '/getCategoryProduct',
            method: 'POST',
            data: {
                cat_id: selectedCategory
            },
            success: function(response) {
                 //alert(response);
                 $("#showProduct").html(response);
                 $("#showProduct").show();
                 $("#showProduct1").hide();
            }
        });

    } else {
        $("#showProduct").hide();
        $("#showProduct1").show();
    }
}


</script>