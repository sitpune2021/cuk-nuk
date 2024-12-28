<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="description">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Title Of Site -->
        <title>Contact Us </title>
    </head>

    <body class="contact-page contact-style1-page">

	<?php include 'Include/header.php';?>

        <!--Page Wrapper-->
        <div class="page-wrapper">
       
            <!-- Body Container -->
            <div id="page-content"> 
                <!--Page Header-->
                <!--<div class="page-header text-center">-->
                <!--    <div class="container">-->
                <!--        <div class="row">-->
                <!--            <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">-->
                <!--                <div class="page-title"><h1>Contact Us </h1></div>-->
                                <!--Breadcrumbs-->
                <!--                <div class="breadcrumbs"><a href="index.html" title="Back to the home page">Home</a><span class="title"><i class="icon anm anm-angle-right-l"></i>Pages</span><span class="main-title fw-bold"><i class="icon anm anm-angle-right-l"></i>Contact Us</span></div>-->
                                <!--End Breadcrumbs-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--End Page Header-->

                <!--Main Content-->
                <div class="container contact-style1" style="margin-top:40px;">
                    <!-- Contact Form - Details -->
                    <div class="contact-form-details section pt-0">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                <!-- Contact Form -->
                                <div class="formFeilds contact-form form-vertical mb-4 mb-md-0">
                                    <div class="section-header">
                                        <h2>Let's Get in touch!</h2>
                                        <p>You can contact us any way that is convenient for you.</p>
										<p>You can also use a quick contact form below. We would be happy to answer your questions.</p>
                                    </div>
                                    
                                        <?php if (session()->has('enquiryMsg')): ?>
                                            <div class="alert alert-success col-md-6 mx-auto text-center" style="padding: 0.5rem 0.5rem;">
                                                <?= session()->get('enquiryMsg'); ?>
                                            </div>
                                            <?php session()->remove('enquiryMsg'); ?>
                                        <?php endif; ?>
                                    <?php echo form_open_multipart('/ContactProcess', array('autocomplete' => 'off')); ?>
                                    
                                        <div class="form-row">
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                <div class="form-group">
                                                    <input type="text" id="name" name="name" class="form-control" placeholder="Name"  value="<?php echo set_value('name'); ?>"/>
                                                    <?php if (isset($validation)): ?>
                                                    <div style="color:red;">
                                                    <?= $validation->getError('name'); ?>
                                                    </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">                               
                                                <div class="form-group">
                                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email"  value="<?php echo set_value('email'); ?>"/>
                                                    <?php if (isset($validation)): ?>
                                                    <div style="color:red;">
                                                    <?= $validation->getError('email'); ?>
                                                    </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
										<div class="form-row">
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                <div class="form-group">
                                                    <input class="form-control" type="tel" id="phone_no" name="phone_no" pattern="[0-9\-]*" placeholder="Phone Number"  value="<?php echo set_value('phone_no'); ?>" maxlength="10"/>
													<?php if (isset($validation)): ?>
                                                    <div style="color:red;">
                                                    <?= $validation->getError('phone_no'); ?>
                                                    </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
											<div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                <div class="form-group">
                                                    <input class="form-control" type="text" id="subject" name="subject" placeholder="Subject"  value="<?php echo set_value('subject'); ?>" maxlength="10"/>
													<?php if (isset($validation)): ?>
                                                    <div style="color:red;">
                                                    <?= $validation->getError('subject'); ?>
                                                    </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="form-group">
                                                    <textarea id="enquiry" name="enquiry" class="form-control" rows="5" placeholder="Message"><?php echo set_value('enquiry'); ?></textarea>
                                                    <?php if (isset($validation)): ?>
                                                    <div style="color:red;">
                                                    <?= $validation->getError('enquiry'); ?>
                                                    </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>  
                                        </div>
                                        <div class="form-row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="form-group mailsendbtn mb-0 w-100">	
                                                    <input class="btn btn-lg" type="submit" name="submit" value="Send Message" />
                                                    <div class="loading"><img class="img-fluid" src="<?=base_url();?>public/assets/images/icons/ajax-loader.gif" alt="loading" width="16" height="16"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="response-msg"></div>
                                </div>
                                <!-- End Contact Form -->
                            </div>
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                <!-- Contact Details -->
                                <div class="contact-details bg-block">
                                    <h3 class="mb-3 fs-5">Store information</h3>
                                    <ul class="list-unstyled">
                                        <li class="mb-2 address">
                                            <strong class="d-block mb-2">Address :</strong>
                                            <p><i class="icon anm anm-map-marker-al me-2 d-none"></i> Sr.No.78, Pandhari Industrial Estate, Shivane, Pune, Maharashtra India - 411023</p>
                                        </li>
                                        <li class="mb-2 phone"><strong>Phone :</strong><i class="icon anm anm-phone me-2 d-none"></i> <a href="tel:9823777232">(+91) 9823777232</a></li>
                                        <li class="mb-0 email"><strong>Email :</strong><i class="icon anm anm-envelope-l me-2 d-none"></i> <a href="mailto:sales@cuknuk.in">sales@cuknuk.in</a></li>
                                    </ul>
                                    <hr>
                                    <div class="open-hours">
                                        <strong class="d-block mb-2">Opening Hours</strong>
                                        <p class="lh-lg">
                                            Mon - Sat : 9:30 AM - 6:30 PM<br>
                                            Sunday: 11:00 AM - 5:00 PM
                                        </p>
                                    </div>
                                    <hr>
                                    <div class="follow-us">
                                        <label class="d-block mb-3"><strong>Stay Connected</strong></label>
                                        <ul class="list-inline social-icons">
                                            <li class="list-inline-item"><a href="https://www.facebook.com/24cuknuk" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook"><i class="icon anm anm-facebook-f"></i></a></li>
                                            <li class="list-inline-item"><a href="https://www.linkedin.com/company/71607135/admin/feed/posts/" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram"><i class="icon anm anm-linkedin-in"></i></a></li>
                                            <li class="list-inline-item"><a href="https://www.instagram.com/cuk_nuk/" data-bs-toggle="tooltip" data-bs-placement="top" title="Google plus"><i class="icon anm anm-instagram"></i></a></li>
                                            <li class="list-inline-item"><a href="https://wa.me/9823777232" data-bs-toggle="tooltip" data-bs-placement="top" title="Whatsapp"><i class="icon anm anm-whatsapp"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Contact Details -->
                            </div>
                        </div>
                    </div>
                    <!-- End Contact Form - Details -->

                    <!-- Contact Map -->
                    <div class="contact-maps section p-0">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="map-section ratio ratio-16x9">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15137.381993748179!2d73.7795319273241!3d18.468002974637557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc295287a9ac087%3A0xd29c12a0d01f6d54!2sShivkamal%20Industrial%20Estate!5e0!3m2!1sen!2sin!4v1734607523670!5m2!1sen!2sin" height="650"></iframe>
				
                                    <!-- <iframe class="rounded-5" src="https://www.google.com/maps/embed?pb=" allowfullscreen="" height="650"></iframe>   -->
                                    <!-- <div class="map-section-overlay-wrapper">
                                        <div class="map-section-overlay rounded-0">
                                            <h3>Our store</h3>
                                            <div class="content mb-3">
                                                <p class="mb-2">123, The Company Name Inc,<br>Toronto, Canada</p>
                                                <p>Mon - Fri, 10am - 9pm<br>Saturday, 11am - 9pm<br>Sunday, 11am - 5pm</p>
                                            </div>
                                            <p><a href="https://www.google.com/maps?daddr=80+Spadina+Ave,+Toronto" class="btn btn-secondary btn-sm">Get directions</a></p>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Contact Map -->
                </div>
                <!--End Main Content-->
            </div>
            <!-- End Body Container -->
		
			</div>

            <?php include 'Include/footer.php';?>