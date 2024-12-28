<style>
    /* Main container for modal */
    #cookieConsent {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 9999;
        animation: slideIn 0.5s ease-out;
    }

    /* Slide-in animation */
    @keyframes slideIn {
        from {
            transform: translateX(100%);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }

    /* Cookie Modal Box */
    .cookie-modal {
        background: #ffffff;
        color: #333;
        padding: 20px 25px;
        border-radius: 15px;
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        max-width: 300px;
        width: 100%;
        font-family: 'Arial', sans-serif;
        text-align: left;
        border: 1px solid #e0e0e0;
    }

    /* Header Section */
    .cookie-header h4 {
        margin: 0 0 10px;
        font-size: 18px;
        font-weight: bold;
        color: #007bff;
        text-align: center;
    }

    /* Body Text */
    .cookie-modal p {
        margin: 0 0 15px;
        font-size: 14px;
        line-height: 1.6;
        color: #666;
    }

    /* Accept Button */
    .cookie-modal .btn {
        display: block;
        background: #007bff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        font-size: 14px;
        border-radius: 25px;
        cursor: pointer;
        margin: 0 auto;
        transition: all 0.3s ease;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .cookie-modal .btn:hover {
        background: #0056b3;
        transform: scale(1.05);
    }

    /* Link Styling */
    .cookie-modal a {
        color: #00aaff;
        text-decoration: none;
    }

    .cookie-modal a:hover {
        text-decoration: underline;
    }
</style>





<!--Footer-->
<div class="footer footer-7 ftr-bg-black">
                <div class="footer-top clearfix">
                    <div class="container container-1330">
                        
                        <!-- <div class="col-1 col-sm-1 col-md-1 col-lg-3">   -->
                            <!-- <a class="" href="<?= base_url();?>index.php"><img class="mx-auto mx-xl-0" src="<?=base_url();?>public/assets/images/logo.png" alt="Hema Multipurpose Html Template" title="Hema Multipurpose Html Template" width="120" height="30" style="margin-top:0px;margin-bottom:20px;"/></a> -->
                        <!-- </div> -->
                        <div class="row">
							
                            <div class="col-12 col-sm-12 col-md-6 col-lg-4 footer-instagram order-2 order-lg-0 mt-4 mt-lg-0">
								 <a class="logoImg" href="<?= base_url();?>"><img class="mx-auto mx-xl-0" src="<?=base_url();?>public/assets/images/logo.png" alt="Cuknuk" title="Cuknuk" width="100" height="30" /></a>
                                <div class="mt-2">
                                    We provide the finest quality of products to our consumers and incorporate the best and reliable frozen technology to enrich the food industry. We look forward to continue to enhance the freshness and nutrients in our every offering.
                                </div>
                                <!--End Instagram grid--> 
                            </div>
                            <div class="col-12 col-sm-12 col-md-4 col-lg-2">
                                <h4 class="h4">Information</h4>
                                <ul style="list-style-type: disc;">
                                    <li><a href="<?= base_url(); ?>AboutUs">About Us</a></li>
                                    <li><a href="<?= base_url(); ?>ContactUs">Contact Us</a></li> 
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-4 col-lg-2 footer-links">
                                <h4 class="h4">Legal</h4>
                                <ul style="list-style-type: disc;">                                  
                                    <li><a href="<?= base_url(); ?>QualityPolicy">Privacy policy</a></li>
                                    <li><a href="<?= base_url(); ?>TermsConditions">Terms &amp; condition</a></li>
                                </ul>
                            </div>
                            
                            <div class="col-12 col-sm-12 col-md-6 col-lg-4 footer-contact order-1 order-lg-0 mt-1 mt-md-4 mt-lg-0">
                                <h4 class="h4">Contact Info</h4>
                                <p class="phone d-flex align-items-center"><i class="icon anm anm-phone-l" style="font-weight: bold;"></i> <b class="me-2 fw-400">Toll Free</b> <a href="tel:9823777232">(+91) 9823777232</a></p>
                                <p class="email d-flex align-items-center"><i class="icon anm anm-envelope-l" style="font-weight: bold;"></i> <a href="mailto:sales@cuknuk.in">sales@cuknuk.in</a></p>
                                <p class="address d-flex"><i class="icon anm anm-map-marker-al pt-1" style="font-weight: bold;"></i>  Sr.No.78, Pandhari Industrial Estate, Shivane, Pune, Maharashtra India - 411023</p>
                            </div>
                        </div>               
                    </div>
                </div>
                <div class="footer-bottom clearfix">
                    <div class="container container-1330">
                        <div class="row">
                            <ul class="list-inline social-icons d-inline-flex align-items-center justify-content-center justify-content-sm-start col-12 col-sm-4 col-lg-4">
                                <li class="list-inline-item"><a href="https://www.facebook.com/24cuknuk" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook"><i class="icon anm anm-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="https://www.linkedin.com/company/71607135/admin/feed/posts/" data-bs-toggle="tooltip" data-bs-placement="top" title="Linkedin"><i class="icon anm anm-linkedin-in"></i></a></li>
                                <li class="list-inline-item"><a href="https://www.instagram.com/cuk_nuk/" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram"><i class="icon anm anm-instagram" style="font-weight: bold;"></i></a></li>
                                <li class="list-inline-item"><a href="https://wa.me/9823777232" data-bs-toggle="tooltip" data-bs-placement="top" title="Youtube"><i class="icon anm anm-whatsapp" style="font-weight: bold;"></i></a></li>
                            </ul>
                            <div class="copytext col-12 col-md-12 col-lg-6 order-2 order-lg-0 mt-3 mt-lg-0">&copy; 2024 CukNuk. All Rights Reserved.Design & Developed by SIT Solutions Pvt. Ltd</div>
                             
                        </div>
                    </div>
                </div>
            </div>
            <!--End Footer-->

            <!--Scoll Top-->
            <div id="site-scroll" class="rounded-circle"><i class="icon anm anm-angle-up-r"></i></div>
            <!--End Scoll Top-->

            <!--MiniCart Drawer-->
            <div id="minicart-drawer" class="minicart-right-drawer offcanvas offcanvas-end" tabindex="-1">
                <!--MiniCart Empty-->
                <div id="cartEmpty" class="cartEmpty d-flex-justify-center flex-column text-center p-3 text-muted d-none">
                    <div class="minicart-header d-flex-center justify-content-between w-100">
                        <h4 class="fs-6 body-font">Your cart (0 Items)</h4>
                        <button class="close-cart border-0" data-bs-dismiss="offcanvas" aria-label="Close"><i class="icon anm anm-times-r" data-bs-toggle="tooltip" data-bs-placement="left" title="Close"></i></button>
                    </div>
                    <div class="cartEmpty-content mt-4">
                        <i class="icon anm anm-basket-l fs-1 text-muted"></i> 
                        <p class="my-3">No Products in the Cart</p>
                        <a href="index.html" class="btn btn-primary cart-btn">Continue shopping</a>
                    </div>
                </div>
                <!--End MiniCart Empty-->

                <!--MiniCart Content-->
                <div id="cart-drawer" class="block block-cart">
                    <div class="minicart-header">
                        <button class="close-cart border-0" data-bs-dismiss="offcanvas" aria-label="Close"><i class="icon anm anm-times-r" data-bs-toggle="tooltip" data-bs-placement="left" title="Close"></i></button>
                        <h4 class="fs-6 body-font">Your cart (2 Items)</h4>
                    </div>
                    <div class="minicart-content">
                        <ul class="m-0 clearfix">
                            <li class="item d-flex justify-content-center align-items-center">
                                <a class="product-image rounded-4" href="product-layout1.html">
                                    <img class="rounded-4 blur-up lazyload" data-src="<?=base_url();?>public/assets/images/products/cart-vegetables-product-img1.jpg" src="<?=base_url();?>public/assets/images/products/cart-vegetables-product-img1.jpg" alt="product" title="Product" width="120" height="170" />
                                </a>
                                <div class="product-details">
                                    <a class="product-title" href="product-layout1.html">Kashmiri Apple</a>
                                    <div class="variant-cart my-2">Black / XL</div>
                                    <div class="priceRow">
                                        <div class="product-price">
                                            <span class="price">$54.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="qtyDetail text-center">
                                    <div class="qtyField">
                                        <a class="qtyBtn minus" href="#;"><i class="icon anm anm-minus-r"></i></a>
                                        <input type="text" name="quantity" value="1" class="qty rounded-pill">
                                        <a class="qtyBtn plus" href="#;"><i class="icon anm anm-plus-r"></i></a>
                                    </div>
                                    <a href="#" class="edit-i remove"><i class="icon anm anm-pencil-ar" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i></a>
                                    <a href="#" class="remove"><i class="icon anm anm-times-r" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"></i></a>
                                </div>
                            </li>
                            <li class="item d-flex justify-content-center align-items-center">
                                <a class="product-image rounded-4" href="product-layout1.html">
                                    <img class="rounded-4 blur-up lazyload" data-src="<?=base_url();?>public/assets/images/products/cart-vegetables-product-img2.jpg" src="<?=base_url();?>public/assets/images/products/cart-vegetables-product-img2.jpg" alt="product" title="Product" width="120" height="170" />
                                </a>
                                <div class="product-details">
                                    <a class="product-title" href="product-layout1.html">Organic Potatos</a>
                                    <div class="variant-cart my-2">Yellow / M</div>
                                    <div class="priceRow">
                                        <div class="product-price">
                                            <span class="price old-price">$114.00</span><span class="price">$99.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="qtyDetail text-center">
                                    <div class="qtyField">
                                        <a class="qtyBtn minus" href="#;"><i class="icon anm anm-minus-r"></i></a>
                                        <input type="text" name="quantity" value="1" class="qty rounded-pill">
                                        <a class="qtyBtn plus" href="#;"><i class="icon anm anm-plus-r"></i></a>
                                    </div>
                                    <a href="#" class="edit-i remove"><i class="icon anm anm-pencil-ar" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i></a>
                                    <a href="#" class="remove"><i class="icon anm anm-times-r" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="minicart-bottom">
                        <div class="shipinfo">
                            <div class="progress mb-2"><div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div></div>
                            <div class="freeShipMsg"><i class="icon anm anm-truck-l fs-6 me-2 align-middle"></i>Only <span class="money" data-currency-usd="$199.00" data-currency="USD">$199.00</span> away from <b>Free Shipping</b></div>
                            <div class="freeShipMsg d-none"><i class="icon anm anm-truck-l fs-6 me-2 align-middle"></i>Congrats! You are eligible for <b>Free Shipping</b></div>
                        </div>
                        <div class="subtotal clearfix my-3">
                            <div class="totalInfo clearfix mb-1 d-none"><span>Shipping:</span><span class="item product-price">$10.00</span></div>
                            <div class="totalInfo clearfix mb-1 d-none"><span>Tax:</span><span class="item product-price">$0.00</span></div>
                            <div class="totalInfo clearfix"><span>Total:</span><span class="item product-price">$163.00</span></div>

                        </div>
                        <div class="agree-check customCheckbox">
                            <input id="prTearm" name="tearm" type="checkbox" value="tearm" required />
                            <label for="prTearm"> I agree with the </label><a href="#" class="ms-1 text-link">Terms &amp; conditions</a>
                        </div>
                        <div class="minicart-action d-flex mt-3">
                            <a href="checkout-style1.html" class="proceed-to-checkout btn btn-outline-secondary rounded-pill w-50 me-1">Check Out</a>
                            <a href="cart-style1.html" class="cart-btn btn btn-outline-primary rounded-pill w-50 ms-1">View Cart</a>
                        </div>
                    </div>
                </div>
                <!--MiniCart Content-->
            </div>
            <!--End MiniCart Drawer-->

            <!-- Product Quickshop Modal-->
            <div class="quickshop-modal modal fade" id="quickshop_modal" tabindex="-1" aria-hidden="true">           
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <form method="post" action="#" id="product-form-quickshop" class="product-form align-items-center">
                                <!-- Product Info -->
                                <div class="row g-0 item mb-3">
                                    <a class="col-4 product-image" href="product-layout1.html"><img class="rounded-4 blur-up lazyload" data-src="<?=base_url();?>public/assets/images/products/vegetables-product3.jpg" src="<?=base_url();?>public/assets/images/products/vegetables-product3.jpg" alt="Product" title="Product" width="400" height="400" /></a>
                                    <div class="col-8 product-details">
                                        <div class="product-variant ps-3">
                                            <div class="variant-cart mb-1">Organic food</div>
                                            <a class="product-title" href="product-layout1.html">Vegan Fresh Tomato</a>
                                            <div class="priceRow mt-2 mb-3">
                                                <div class="product-price m-0"><span class="old-price">$114.00</span><span class="price">$99.00</span></div>
                                            </div>
                                            <div class="qtyField">
                                                <a class="qtyBtn minus" href="#;"><i class="icon anm anm-minus-r"></i></a>
                                                <input type="text" name="quantity" value="1" class="qty rounded-pill">
                                                <a class="qtyBtn plus" href="#;"><i class="icon anm anm-plus-r"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product Info -->
                                <!-- Swatches Color -->
                                <div class="variants-clr swatches-image clearfix mb-3 swatch-0 option1" data-option-index="0">
                                    <label class="label d-flex justify-content-center">Color:<span class="slVariant ms-1 fw-bold">Black</span></label>
                                    <ul class="swatches d-flex-justify-center pt-1 clearfix">
                                        <li class="swatch large rounded available active"><img src="<?=base_url();?>public/assets/images/products/swatches/blue-red.jpg" alt="image" width="70" height="70" data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" /></li>
                                        <li class="swatch large rounded available"><img src="<?=base_url();?>public/assets/images/products/swatches/blue-red.jpg" alt="image" width="70" height="70" data-bs-toggle="tooltip" data-bs-placement="top" title="Black" /></li>
                                        <li class="swatch large rounded available"><img src="<?=base_url();?>public/assets/images/products/swatches/blue-red.jpg" alt="image" width="70" height="70" data-bs-toggle="tooltip" data-bs-placement="top" title="Pink" /></li>
                                        <li class="swatch large rounded available green"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Green"></span></li>
                                        <li class="swatch large rounded soldout yellow"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Yellow"></span></li>
                                    </ul>
                                </div>
                                <!-- End Swatches Color -->
                                <!-- Swatches Size -->
                                <div class="variants-size swatches-size clearfix mb-4 swatch-1 option2" data-option-index="1">
                                    <label class="label d-flex justify-content-center">Size:<span class="slVariant ms-1 fw-bold">S</span></label>
                                    <ul class="size-swatches d-flex-justify-center pt-1 clearfix">
                                        <li class="swatch large rounded soldout"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="XS">XS</span></li>
                                        <li class="swatch large rounded available active"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="S">S</span></li>
                                        <li class="swatch large rounded available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="M">M</span></li>
                                        <li class="swatch large rounded available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="L">L</span></li>
                                        <li class="swatch large rounded available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="XL">XL</span></li>
                                    </ul>
                                </div>
                                <!-- End Swatches Size -->
                                <!-- Product Action -->
                                <div class="product-form-submit d-flex-justify-center">
                                    <button type="submit" name="add" class="btn btn-primary rounded-pill product-cart-submit me-2"><span>Add to cart</span></button>
                                    <button type="submit" name="sold" class="btn btn-secondary rounded-pill product-sold-out d-none" disabled="disabled">Sold out</button>
                                    <button type="submit" name="buy" class="btn btn-secondary rounded-pill proceed-to-checkout">Buy it now</button>
                                </div>
                                <!-- End Product Action -->
                                <div class="text-center mt-3"><a class="text-link" href="product-layout1.html">View More Details</a></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Product Quickshop Modal -->

            <!-- Product Addtocart Modal-->
            <div class="addtocart-modal modal fade" id="addtocart_modal" tabindex="-1" aria-hidden="true">           
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <form method="post" action="#" id="product-form-addtocart" class="product-form align-items-center">
                                <h3 class="title mb-3 text-success text-center">Added to cart Successfully!</h3>
                                <div class="row d-flex-center text-center">
                                    <div class="col-md-6">
                                        <!-- Product Image -->
                                        <a class="product-image" href="product-layout1.html"><img class="rounded-4 blur-up lazyload" data-src="<?=base_url();?>public/assets/images/products/vegetables-product4.jpg" src="<?=base_url();?>public/assets/images/products/vegetables-product4.jpg" alt="Product" title="Product" width="400" height="400" /></a>
                                        <!-- End Product Image -->
                                    </div>
                                    <div class="col-md-6 mt-3 mt-md-0">
                                        <!-- Product Info -->
                                        <div class="product-details">
                                            <div class="variant-cart mb-1">Organic food</div>
                                            <a class="product-title" href="product-layout1.html">Fresh Pomegranate</a>
                                            <p class="product-clr my-2 text-muted">Black / XL</p>
                                        </div>
                                        <div class="addcart-total rounded-5">
                                            <p class="product-items mb-2">There are <strong>1</strong> items in your cart</p>
                                            <p class="d-flex-justify-center">Total: <span class="price text-primary">$198.00</span></p>
                                        </div>
                                        <!-- End Product Info -->
                                        <!-- Product Action -->
                                        <div class="product-form-submit d-flex-justify-center">
                                            <a href="#" class="btn btn-outline-primary rounded-pill product-continue w-100">Continue Shopping</a>
                                            <a href="cart-style1.html" class="btn btn-secondary rounded-pill product-viewcart w-100 my-2 my-md-3">View Cart</a>
                                            <a href="checkout-style1.html" class="btn btn-primary rounded-pill product-checkout w-100">Proceed to checkout</a>
                                        </div>
                                        <!-- End Product Action -->
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Product Addtocart Modal -->

            <!-- Product Quickview Modal-->
            <div class="quickview-modal modal fade" id="quickview_modal" tabindex="-1" aria-hidden="true">           
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 mb-3 mb-md-0">
                                    <!-- Model Thumbnail -->
                                    <div id="quickView" class="carousel slide">
                                        <!-- Image Slide carousel items -->
                                        <div class="carousel-inner">
                                            <div class="item carousel-item active" data-bs-slide-number="0">
                                                <img class="rounded-4 blur-up lazyload" data-src="<?=base_url();?>public/assets/images/products/vegetables-product1.jpg" src="<?=base_url();?>public/assets/images/products/vegetables-product1.jpg" alt="product" title="Product" width="400" height="400" />
                                            </div>
                                            <div class="item carousel-item" data-bs-slide-number="1">
                                                <img class="rounded-4 blur-up lazyload" data-src="<?=base_url();?>public/assets/images/products/vegetables-product2.jpg" src="<?=base_url();?>public/assets/images/products/vegetables-product2.jpg" alt="product" title="Product" width="400" height="400" />
                                            </div>
                                            <div class="item carousel-item" data-bs-slide-number="2">
                                                <img class="rounded-4 blur-up lazyload" data-src="<?=base_url();?>public/assets/images/products/vegetables-product3.jpg" src="<?=base_url();?>public/assets/images/products/vegetables-product3.jpg" alt="product" title="Product" width="400" height="400" />
                                            </div>
                                            <div class="item carousel-item" data-bs-slide-number="3">
                                                <img class="rounded-4 blur-up lazyload" data-src="<?=base_url();?>public/assets/images/products/vegetables-product4.jpg" src="<?=base_url();?>public/assets/images/products/vegetables-product4.jpg" alt="product" title="Product" width="400" height="400" />
                                            </div>
                                            <div class="item carousel-item" data-bs-slide-number="4">
                                                <img class="rounded-4 blur-up lazyload" data-src="<?=base_url();?>public/assets/images/products/vegetables-product5.jpg" src="<?=base_url();?>public/assets/images/products/vegetables-product5.jpg" alt="product" title="Product" width="400" height="400" />
                                            </div>
                                            <div class="item carousel-item" data-bs-slide-number="5">
                                                <img class="rounded-4 blur-up lazyload" data-src="<?=base_url();?>public/assets/images/products/vegetables-product6.jpg" src="<?=base_url();?>public/assets/images/products/vegetables-product6.jpg" alt="product" title="Product" width="400" height="400" />
                                            </div>
                                        </div>
                                        <!-- End Image Slide carousel items -->
                                        <!-- Thumbnail image -->
                                        <div class="model-thumbnail-img">
                                            <!-- Thumbnail slide -->
                                            <div class="carousel-indicators list-inline">
                                                <div class="list-inline-item active" id="carousel-selector-0" data-bs-slide-to="0" data-bs-target="#quickView">
                                                    <img class="rounded-4 blur-up lazyload" data-src="<?=base_url();?>public/assets/images/products/vegetables-product1.jpg" src="<?=base_url();?>public/assets/images/products/vegetables-product1.jpg" alt="product" title="Product" width="400" height="400" />
                                                </div>
                                                <div class="list-inline-item" id="carousel-selector-1" data-bs-slide-to="1" data-bs-target="#quickView">
                                                    <img class="rounded-4 blur-up lazyload" data-src="<?=base_url();?>public/assets/images/products/vegetables-product2.jpg" src="<?=base_url();?>public/assets/images/products/vegetables-product2.jpg" alt="product" title="Product" width="400" height="400" />
                                                </div>
                                                <div class="list-inline-item" id="carousel-selector-2" data-bs-slide-to="2" data-bs-target="#quickView">
                                                    <img class="rounded-4 blur-up lazyload" data-src="<?=base_url();?>public/assets/images/products/vegetables-product3.jpg" src="<?=base_url();?>public/assets/images/products/vegetables-product3.jpg" alt="product" title="Product" width="400" height="400" />
                                                </div>
                                                <div class="list-inline-item" id="carousel-selector-3" data-bs-slide-to="3" data-bs-target="#quickView">
                                                    <img class="rounded-4 blur-up lazyload" data-src="<?=base_url();?>public/assets/images/products/vegetables-product4.jpg" src="<?=base_url();?>public/assets/images/products/vegetables-product4.jpg" alt="product" title="Product" width="400" height="400" />
                                                </div>
                                                <div class="list-inline-item" id="carousel-selector-4" data-bs-slide-to="4" data-bs-target="#quickView">
                                                    <img class="rounded-4 blur-up lazyload" data-src="<?=base_url();?>public/assets/images/products/vegetables-product5.jpg" src="<?=base_url();?>public/assets/images/products/vegetables-product5.jpg" alt="product" title="Product" width="400" height="400" />
                                                </div>
                                                <div class="list-inline-item" id="carousel-selector-5" data-bs-slide-to="5" data-bs-target="#quickView">
                                                    <img class="rounded-4 blur-up lazyload" data-src="<?=base_url();?>public/assets/images/products/vegetables-product6.jpg" src="<?=base_url();?>public/assets/images/products/vegetables-product6.jpg" alt="product" title="Product" width="400" height="400" />
                                                </div>
                                            </div>
                                            <!-- End Thumbnail slide -->
                                            <!-- Carousel arrow button -->
                                            <a class="carousel-control-prev carousel-arrow rounded-1" href="#quickView" data-bs-target="#quickView" data-bs-slide="prev"><i class="icon anm anm-angle-left-r"></i></a>
                                            <a class="carousel-control-next carousel-arrow rounded-1" href="#quickView" data-bs-target="#quickView" data-bs-slide="next"><i class="icon anm anm-angle-right-r"></i></a>
                                            <!-- End Carousel arrow button -->
                                        </div>
                                        <!-- End Thumbnail image -->
                                    </div>
                                    <!-- End Model Thumbnail -->
                                    <div class="text-center mt-3"><a href="product-layout1.html" class="text-link">View More Details</a></div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="product-subtitle">Organic food</div>
                                    <div class="product-arrow d-flex justify-content-between">
                                        <h2 class="product-title">Product Quick View Popup</h2>
                                        <div class="arrows d-flex">
                                            <a class="pro-next" href="product-layout2.html" title="Previous"><i class="icon anm anm-angle-left-l"></i></a>
                                            <a class="pro-prev" href="product-layout3.html" title="Next"><i class="icon anm anm-angle-right-l"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-review d-flex mt-0 mb-2">
                                        <div class="rating"><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i></div>
                                        <div class="reviews ms-2"><a href="#">6 Reviews</a></div>
                                    </div>
                                    <div class="product-info">
                                        <p class="product-vendor">Vendor:<span class="text"><a href="#">Organic food</a></span></p>  
                                        <p class="product-type">Product Type:<span class="text">Food</span></p> 
                                        <p class="product-sku">SKU:<span class="text">RF104</span></p>
                                    </div>
                                    <div class="pro-stockLbl my-2">
                                        <span class="d-flex-center stockLbl instock d-none"><i class="icon anm anm-check-cil text-primary"></i><span> In stock</span></span>
                                        <span class="d-flex-center stockLbl preorder d-none"><i class="icon anm anm-clock-r text-primary"></i><span> Pre-order Now</span></span>
                                        <span class="d-flex-center stockLbl outstock d-none"><i class="icon anm anm-times-cil text-primary"></i> <span>Sold out</span></span>
                                        <span class="d-flex-center stockLbl lowstock" data-qty="15"><i class="icon anm anm-exclamation-cir text-primary"></i><span> Order now, Only <span class="items text-primary">10</span> left!</span></span>
                                    </div>
                                    <div class="product-price d-flex-center my-3">
                                        <span class="price old-price">$135.00</span><span class="price">$99.00</span>

                                    </div>
                                    <div class="sort-description">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</div>
                                    <form method="post" action="#" id="product_form--option" class="product-form">
                                        <div class="product-options d-flex-wrap">
                                            <div class="product-item swatches-image w-100 mb-3 swatch-0 option1" data-option-index="0">
                                                <label class="label d-flex align-items-center">Color:<span class="slVariant ms-1 fw-bold">Blue</span></label>
                                                <ul class="variants-clr swatches d-flex-center pt-1 clearfix">
                                                    <li class="swatch large rounded available active"><img src="<?=base_url();?>public/assets/images/products/swatches/blue-red.jpg" alt="image" width="70" height="70" data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" /></li>
                                                    <li class="swatch large rounded available"><img src="<?=base_url();?>public/assets/images/products/swatches/blue-red.jpg" alt="image" width="70" height="70" data-bs-toggle="tooltip" data-bs-placement="top" title="Black" /></li>
                                                    <li class="swatch large rounded available"><img src="<?=base_url();?>public/assets/images/products/swatches/blue-red.jpg" alt="image" width="70" height="70" data-bs-toggle="tooltip" data-bs-placement="top" title="Pink" /></li>
                                                    <li class="swatch large rounded available green"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Green"></span></li>
                                                    <li class="swatch large rounded soldout yellow"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Yellow"></span></li>
                                                </ul>
                                            </div>
                                            <div class="product-item swatches-size w-100 mb-3 swatch-1 option2" data-option-index="1">
                                                <label class="label d-flex align-items-center">Size:<span class="slVariant ms-1 fw-bold">S</span></label>
                                                <ul class="variants-size size-swatches d-flex-center pt-1 clearfix">
                                                    <li class="swatch large rounded soldout"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="XS">XS</span></li>
                                                    <li class="swatch large rounded available active"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="S">S</span></li>
                                                    <li class="swatch large rounded available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="M">M</span></li>
                                                    <li class="swatch large rounded available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="L">L</span></li>
                                                    <li class="swatch large rounded available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="XL">XL</span></li>
                                                </ul>
                                            </div>
                                            <div class="product-action d-flex-wrap w-100 pt-1 mb-3 clearfix">
                                                <div class="quantity">
                                                    <div class="qtyField rounded">
                                                        <a class="qtyBtn minus" href="#;"><i class="icon anm anm-minus-r" aria-hidden="true"></i></a>
                                                        <input type="text" name="quantity" value="1" class="product-form__input qty rounded-pill">
                                                        <a class="qtyBtn plus" href="#;"><i class="icon anm anm-plus-l" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>                                
                                                <div class="addtocart ms-3 fl-1">
                                                    <button type="submit" name="add" class="btn btn-primary rounded-pill product-cart-submit w-100"><i class="icon anm anm-basket-l me-2"></i><span>Add to cart</span></button>
                                                    <button type="submit" name="sold" class="btn btn-secondary rounded-pill product-sold-out w-100 d-none" disabled="disabled"><span>Sold out</span></button>
                                                    <button type="submit" name="buy" class="btn btn-secondary rounded-pill proceed-to-checkout w-100 d-none"><span>Buy it now</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="wishlist-btn d-flex-center">
                                        <a class="add-wishlist d-flex-center me-3" href="wishlist-style1.html" title="Add to Wishlist"><i class="icon anm anm-heart-l me-1"></i> <span>Add to Wishlist</span></a>
                                        <a class="add-compare d-flex-center" href="compare-style1.html" title="Add to Compare"><i class="icon anm anm-random-r me-2"></i> <span>Add to Compare</span></a>
                                    </div>
                                    <!-- Social Sharing -->
                                    <div class="social-sharing share-icon d-flex-center mx-0 mt-3">
                                        <span class="sharing-lbl">Share :</span>
                                        <a href="#" class="d-flex-center btn btn-link btn--share share-facebook" data-bs-toggle="tooltip" data-bs-placement="top" title="Share on Facebook"><i class="icon anm anm-facebook-f"></i><span class="share-title d-none">Facebook</span></a>
                                        <a href="#" class="d-flex-center btn btn-link btn--share share-twitter" data-bs-toggle="tooltip" data-bs-placement="top" title="Tweet on Twitter"><i class="icon anm anm-twitter"></i><span class="share-title d-none">Tweet</span></a>
                                        <a href="#" class="d-flex-center btn btn-link btn--share share-pinterest" data-bs-toggle="tooltip" data-bs-placement="top" title="Pin on Pinterest"><i class="icon anm anm-pinterest-p"></i> <span class="share-title d-none">Pin it</span></a>
                                        <a href="#" class="d-flex-center btn btn-link btn--share share-linkedin" data-bs-toggle="tooltip" data-bs-placement="top" title="Share on Instagram"><i class="icon anm anm-linkedin-in"></i><span class="share-title d-none">Instagram</span></a>
                                        <a href="#" class="d-flex-center btn btn-link btn--share share-whatsapp" data-bs-toggle="tooltip" data-bs-placement="top" title="Share on WhatsApp"><i class="icon anm anm-envelope-l"></i><span class="share-title d-none">WhatsApp</span></a>
                                        <a href="#" class="d-flex-center btn btn-link btn--share share-email" data-bs-toggle="tooltip" data-bs-placement="top" title="Share by Email"><i class="icon anm anm-whatsapp"></i><span class="share-title d-none">Email</span></a>
                                    </div>
                                    <!-- End Social Sharing -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Product Quickview Modal-->
            
            <!-- Cookie Consent Floating Modal -->
			<!-- Cookie Consent Floating Modal -->
			<div id="cookieConsent" style="display: none;">
				<div class="cookie-modal">
					<div class="cookie-header">
						<h4>🍪 We Value Your Privacy</h4>
					</div>
					<p>
						This website uses cookies to ensure you get the best experience on our website. 
						<a href="<?= base_url(); ?>QualityPolicy" style="color: #00aaff; text-decoration: underline;">Learn More</a>
					</p>
					<button id="acceptCookies" class="btn">Accept</button>
				</div>
			</div>


			<!-- Including Jquery/Javascript -->
            <!-- Plugins JS -->
            <script src="<?=base_url();?>public/assets/js/plugins.js"></script>
            <!-- Main JS -->
            <script src="<?=base_url();?>public/assets/js/main.js"></script>
            <!--Newsletter Modal Cookies-->
            <script>
                $(window).ready(function() {
                    setTimeout(function() {
                        $('#newsletter_modal').modal("show");
                    }, 7000);
                });
            </script>
            <!--End Newsletter Modal Cookies-->

        </div>
        <!--End Page Wrapper-->
    </body>
</html>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const cookieConsent = document.getElementById('cookieConsent');
        const acceptCookies = document.getElementById('acceptCookies');

        // Check if cookies have already been accepted
        if (!localStorage.getItem('cookieAccepted')) {
            cookieConsent.style.display = 'block'; // Show the popup
        }

        // Accept button functionality
        acceptCookies.addEventListener('click', function () {
            localStorage.setItem('cookieAccepted', 'true'); // Store acceptance in localStorage
            cookieConsent.style.display = 'none'; // Hide the popup
        });
    });
</script>
