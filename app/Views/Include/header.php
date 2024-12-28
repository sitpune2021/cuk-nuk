   <?php
        $page = $_SERVER['REQUEST_URI'];
   ?>
   
   <!-- Favicon -->
    <link rel="shortcut icon" href="<?=base_url();?>public/assets/images/favicon.png" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="<?=base_url();?>public/assets/css/plugins.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="<?=base_url();?>public/assets/css/style-min.css">
    <link rel="stylesheet" href="<?=base_url();?>public/assets/css/responsive.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    
 <!--Top Header-->
<div class="top-header bg-white text-uppercase">
    <div class="container container-1330">
        <div class="row align-items-center">
            <div class="col-8 col-sm-6 col-md-4 col-lg-4 text-left">
                <div class="select-wrap language-picker float-start">
                    <ul class="list-inline social-icons d-inline-flex align-items-center justify-content-center justify-content-sm-start col-12 col-sm-6 col-lg-4">
                        <li class="list-inline-item"><a href="https://www.facebook.com/24cuknuk" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook"><i class="icon anm anm-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.linkedin.com/company/71607135/admin/feed/posts/" data-bs-toggle="tooltip" data-bs-placement="top" title="Linkedin"><i class="icon anm anm-linkedin-in"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.instagram.com/cuk_nuk/" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram"><i class="icon anm anm-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="https://wa.me/9823777232" data-bs-toggle="tooltip" data-bs-placement="top" title="Youtube"><i class="icon anm anm-whatsapp"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 text-center d-none d-md-block">
                <div class="promo-items promo-slider-1items">
                    <div class="item">INDIA'S NO 1 FROZEN FOOD MANUFACTURER</div>
                </div>
            </div>
            <div class="col-4 col-sm-6 col-md-4 col-lg-4 text-right d-flex align-items-center justify-content-end">
                <span class="phone-txt me-2 d-none d-sm-inline">
                    <i class="fas fa-phone"></i> <!-- FontAwesome phone icon for larger screens -->
                </span>
            
                <!-- Phone number for small screens with a different phone icon -->
                <a href="tel:9823777232" class="phone d-flex-center float-start text-nowrap">
                    <!-- Phone icon for small screens -->
                    <i class="fas fa-phone d-block d-sm-none"></i> 
                    <!-- Phone number text -->
                    <span class="phone-no d-inline d-sm-inline">(+91) 9823777232</span>
                </a>
            </div>
        </div>
    </div>
</div>
<!--End Top Header-->

<!--Header-->
<header class="header header-7"> 
    <!--Header inner-->
    <div class="header-main d-flex align-items-center">
        <div class="container container-1330">        
            <div class="row align-items-center">
                <div class="col-4 col-sm-4 col-md-5 col-lg-5 col-xl-6 align-self-center icons-col text-left d-xl-none">
                    <!--Mobile Toggle-->
                    <button type="button" class="iconset icon-link ps-0 menu-icon js-mobile-nav-toggle mobile-nav--open d-inline-flex flex-column d-lg-none">
                        <span class="iconCot"><i class="hdr-icon icon anm anm-times-l"></i><i class="hdr-icon icon anm anm-bars-r"></i></span>
                        <span class="text d-none">Menu</span>
                    </button>
                    <!--End Mobile Toggle-->
                </div>
            </div>                                                
        </div>
    </div>
    <!--End Header inner-->
    <!--Navigation Desktop-->
    <div class="main-menu-outer d-none d-lg-block header-fixed">
        <div class="container container-1330">
            <div class="menu-outer rounded-4">
                <div class="row g-0"> 
                <button type="button" class="iconset icon-link ps-0 menu-icon js-mobile-nav-toggle mobile-nav--open d-inline-flex flex-column d-lg-none">
                        <span class="iconCot"><i class="hdr-icon icon anm anm-times-l"></i><i class="hdr-icon icon anm anm-bars-r"></i></span>
                        <span class="text d-none">Menu</span>
                    </button> 
                    <div class="col-1 col-sm-1 col-md-1 col-lg-3 align-self-center mx-2">  
                        <a class="logoImg" href="<?= base_url();?>"><img class="mx-auto mx-xl-0" src="<?=base_url();?>public/assets/images/logo.png" alt="Cuknuk" title="Cuknuk" width="149" height="39" /></a>
                    </div>
                    <div class="col-1 col-sm-1 col-md-1 col-lg-7 align-self-center d-menu-col hdr-menu-left menu-position-left">
                        <nav class="navigation ps-lg-3" id="AccessibleNav">
                            <ul id="siteNav" class="site-nav medium right">
                                <li class="lvl1 parent dropdown <?php if($page=='/'){echo 'menu-active';} ?>"><a href="<?= base_url();?>">Home </a></li>
                                <li class="lvl1 parent dropdown <?php if($page=='/AboutUs'){echo 'menu-active';} ?>"><a href="<?=base_url();?>AboutUs">About </a></li>
                                <li class="lvl1 parent dropdown <?php if(($page=='/Product') || strpos($page, '/ViewCategories') === 0){echo 'menu-active';} ?>">
                                    <a href="<?=base_url();?>Product">Product </a>
                                </li>
                                <li class="lvl1 parent dropdown <?php if($page=='/ContactUs'){echo 'menu-active';} ?>"><a href="<?=base_url();?>ContactUs">Contact </a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Navigation Desktop-->
</header>
<!--End Header-->

<!--Mobile Menu-->
<div class="mobile-nav-wrapper mobileMenu-bg-black" role="navigation">
    <div class="closemobileMenu">Close Menu <i class="icon anm anm-times-l"></i></div>
    <ul id="MobileNav" class="mobile-nav">
       
        <li class="lvl1 parent dropdown"><a href="<?= base_url();?>">Home </li>
        <li class="lvl1 parent dropdown"><a href="<?=base_url();?>AboutUs">About </li>
        <li class="lvl1 parent dropdown"><a href="<?=base_url();?>Product">Product </li>
        <li class="lvl1 parent dropdown"><a href="<?=base_url();?>ContactUs">Contact </li>
        
        <li class="mobile-menu-bottom">
            <div class="mobile-follow mt-2">  
                <h5 class="title">Follow Us</h5>
                <ul class="list-inline social-icons d-inline-flex mt-1">
                    <li class="list-inline-item"><a href="https://www.facebook.com/24cuknuk" title="Facebook"><i class="icon anm anm-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="https://www.linkedin.com/company/71607135/admin/feed/posts/" title="Linkedin"><i class="icon anm anm-linkedin-in"></i></a></li>
                    <li class="list-inline-item"><a href="https://www.instagram.com/cuk_nuk/" title="Instagram"><i class="icon anm anm-instagram"></i></a></li>
                </ul>
            </div>
        </li>
    </ul>
</div>
<!--End Mobile Menu-->