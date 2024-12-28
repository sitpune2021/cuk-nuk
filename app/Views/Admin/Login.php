<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
      <title>Cuknuk - Login</title>
      <meta content="Admin Dashboard" name="description">
      <meta content="Mannatthemes" name="author">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <link rel="shortcut icon" href="<?=base_url();?>public/Admin/assets/images/favicon.ico">
      <link href="<?=base_url();?>public/Admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
      <link href="<?=base_url();?>public/Admin/assets/css/icons.css" rel="stylesheet" type="text/css">
      <link href="<?=base_url();?>public/Admin/assets/css/style.css" rel="stylesheet" type="text/css">
   </head>
   <body>
      <!-- Begin page -->
      <!--<div class="accountbg"></div>-->
      <div class="wrapper-page">
         <div class="card">
            <div class="card-body">
               <h3 class="text-center mt-0 m-b-15"><a href="/home/Login" class="logo logo-admin"><img src="<?=base_url();?>public/assets/images/logo.png" height="80" alt="logo"></a></h3>
               <div class="p-1 text-center">
               	<div style="font-size: 15px;color: #ff0000;margin-bottom: 10px;">
                            <?php error_reporting(0); echo $_SESSION['invalidLoginD'];?></div>
                       
                <div style="display:none;color: #0d720d;" id="otpSuccess">Your one time password(OTP) sent on your mobile.</div>
                  <?php echo form_open('/signIn', array('autocomplete' => 'off','class' => 'form-horizontal m-t-20')); ?>
                     <div class="form-group row">
                        <div class="col-12">
						 <input name="username" id="username"  class="form-control" placeholder="Username" type="text" value="<?php echo set_value('username') ?>">
                            <?php  if(isset($validation)) { ?>
                                <div class="text-danger" style="text-align: left;margin-left: 5px;color: #ec536c!important;">
                                <?= $validation->getError('username'); ?>
                                </div>
                            <?php } ?>  
						</div>
                     </div>
                     <div class="form-group row">
                        <div class="col-12">
						<input name="password"  id="password"  class="form-control " placeholder="Password" type="password" value="<?php echo set_value('password') ?>">
						 <i class="mdi mdi-eye" id="togglePassword" style="cursor: pointer;float: right;margin-top: -26px;font-size: 18px;margin-right: 9px;"></i>
                          <?php  if(isset($validation)) { ?>
                                <div class="text-danger" style="text-align: left;margin-left: 5px;color: #ec536c!important;">
                                <?= $validation->getError('password'); ?>
                                </div>
                          <?php } ?>   
						</div>
                     </div>
                     <div class="form-group row">
                        <div class="col-12">
                           <!--<div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" id="customCheck1"> <label class="custom-control-label" for="customCheck1">Remember me</label></div>-->
                        </div>
                     </div>
                     <div class="form-group text-center row m-t-20">
                        <div class="col-12"><button class="btn btn-danger btn-block waves-effect waves-light" type="submit">Log In</button></div>
                        
                        <a href="<?=base_url();?>" style="width: 100%;"><div class="col-12"><button class="btn btn-info btn-block waves-effect waves-light" type="button" style="margin-top: 10px;">Back to Home</button></div></a>
                     </div>
                     <div class="form-group m-t-10 mb-0 row">
                        <!--<div class="col-sm-7 m-t-20"><a href="/Forgotpassword" class="text-muted"><i class="mdi mdi-lock"></i> <small>Forgot your password</small></a></div>-->
                        
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- jQuery  --><script src="<?=base_url();?>public/Admin/assets/js/jquery.min.js"></script><script src="<?=base_url();?>public/Admin/assets/js/popper.min.js"></script><script src="<?=base_url();?>public/Admin/assets/js/bootstrap.min.js"></script><script src="<?=base_url();?>public/Admin/assets/js/modernizr.min.js"></script><script src="<?=base_url();?>public/Admin/assets/js/waves.js"></script><script src="<?=base_url();?>public/Admin/assets/js/jquery.slimscroll.js"></script><script src="<?=base_url();?>public/Admin/assets/js/jquery.nicescroll.js"></script><script src="<?=base_url();?>public/Admin/assets/js/jquery.scrollTo.min.js"></script><!-- App js --><script src="<?=base_url();?>public/Admin/assets/js/app.js"></script>
   </body>
   
   <script>
        const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#password');
 
  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});


    </script>

</html>