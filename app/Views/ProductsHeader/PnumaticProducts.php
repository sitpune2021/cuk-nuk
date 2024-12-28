<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pnumatic Products</title>
    <meta charset="utf-8">
    <meta name="keywords" content="html5 template, best html5 template, best html template, html5 basic template, multipurpose html5 template, multipurpose html template, creative html templates, creative html5 templates" />
    <meta name="description" content="SuperMarket is a powerful Multi-purpose HTML5 Template with clean and user friendly design. It is definite a great starter for any eCommerce web project." />
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
</head>
<?php echo view ('Include/header.php');?> 
<body class="res layout-subpage layout-1 banners-effect-5 product-details">
    <div id="wrapper" class="wrapper-fluid">
    <div class="main-container container">
        <ul class="breadcrumb">
            <li><a href="<?= base_url();?>"><i class="fa fa-home"></i></a></li>
            <li><a href="#">Products</a></li>
            <li><a href="<?= base_url();?>PnumaticProducts">Pnumatic Products</a></li>
        </ul>
        
        <div class="row">
            
            <?php foreach($ProductD as $list){ ?>
            <div class="img col-sm-3 col-md-3 col-lg-3 col-xl-3 m-5">
               <div class="image">
                    <img src="<?=base_url();?>public/Admin/assets/images/Product_images/<?=$list['image'];?>" class="img-1 img-responsive" alt="image1" >
               </div>
               <h4 class="text-center"><?=$list['product_name'];?></h4>
            </div>
            <?php } ?>
            
        </div> 
                
    </div>
</div>
    <?php echo view ('Include/footer.php');?> 

</body>
</html>