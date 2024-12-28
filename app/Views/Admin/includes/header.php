      <link rel="shortcut icon" href="<?=base_url();?>public/Admin/assets/images/favicon.ico">
      <!-- jvectormap -->
      <link href="<?=base_url();?>public/Admin/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">
      <link href="<?=base_url();?>public/Admin/assets/plugins/fullcalendar/vanillaCalendar.css" rel="stylesheet" type="text/css">
      <link href="<?=base_url();?>public/Admin/assets/plugins/morris/morris.css" rel="stylesheet">
      <link href="<?=base_url();?>public/Admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
      <link href="<?=base_url();?>public/Admin/assets/css/icons.css" rel="stylesheet" type="text/css">
      <link href="<?=base_url();?>public/Admin/assets/css/style.css" rel="stylesheet" type="text/css">
      
       <!-- DataTables -->
      <link href="<?=base_url();?>public/Admin/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
      <link href="<?=base_url();?>public/Admin/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
      <!-- Responsive datatable examples -->
      <link href="<?=base_url();?>public/Admin/assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">
      <link href="<?=base_url();?>public/Admin/assets/plugins/summernote/summernote-bs4.css" rel="stylesheet">
      
      
      
   </head>
   <body class="fixed-left">
      <!-- Loader -->
      <div id="preloader">
         <div id="status">
            <div class="spinner"></div>
         </div>
      </div>
      <!-- Begin page -->
      <div id="wrapper">
         <!-- ========== Left Sidebar Start ========== -->
         <div class="left side-menu">
            <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect"><i class="ion-close"></i></button><!-- LOGO -->
            <div class="topbar-left">
               <div class="text-center">
                  <a href="<?=base_url();?>AdminDashboard" class="logo" style="font-size: 20px;color: #fff;text-transform: uppercase;">
                     <img src="<?=base_url();?>public/assets/images/logo.png" height="60" width="120" alt="logo">
                  </a>
               </div>
            </div>
            <div class="sidebar-inner niceScrollleft">
               <div id="sidebar-menu">
                  <ul>
                     <li class="menu-title">Main</li>
                     <li><a href="<?=base_url();?>AdminDashboard" class="waves-effect"><i class="mdi mdi-airplay"></i> <span>Dashboard </span></a></li>
                     
                      <li class="menu-title">Slider</li>
                     <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-view-carousel"></i><span> Slider </span><span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="list-unstyled">
                           <li><a href="<?=base_url();?>AddSlider">Add Slider</a></li>
                           <li><a href="<?=base_url();?>ViewSlider">View Slider</a></li>
                           
                        </ul>
                     </li>

                     <li class="menu-title">Banner</li>
                     <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-view-carousel"></i><span> Banner </span><span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="list-unstyled">
                        <li><a href="<?=base_url();?>ViewBanner">View Banner</a></li>
                           <!-- <li><a href="<?=base_url();?>UpdateBanner">Update Banner</a></li> -->
                        </ul>
                     </li>
                     
                     <li class="menu-title">Product Category</li>
                     <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-folder"></i><span>Category </span><span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="list-unstyled">
                           <li><a href="<?=base_url();?>AddCategory">Add Category</a></li>
                           <li><a href="<?=base_url();?>ViewCategory">View Category</a></li>
                        </ul>
                     </li>
                     
                      <li class="menu-title">Products</li>
                     <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-package"></i><span> Products </span><span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="list-unstyled">
                           <li><a href="<?=base_url();?>AddProducts">Add Products</a></li>
                           <li><a href="<?=base_url();?>ViewProducts">View Products</a></li>
                        </ul>
                     </li>
                      <li class="menu-title">Enquiry</li>
                     <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-email"></i><span>Enquiry</span><span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="list-unstyled">
                           <li><a href="<?=base_url();?>ViewContactDetails">Enquiry Details</a></li>
                           
                        </ul>
                     </li>
                     
                  </ul>
               </div>
               <div class="clearfix"></div>
            </div>
            
         </div>
         <div class="content-page">
             <div class="content">
               <div class="topbar">
                  <nav class="navbar-custom">
                     <ul class="list-inline float-right mb-0">
                      
                        <!--<li class="list-inline-item dropdown notification-list">
                           <a href="<?= base_url();?>Logout"  class="nav-link dropdown-toggle arrow-none waves-effect"><i class="fas fa-sign-out-alt text-light">Logout</i></a>
                           <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                               
                           </div>
                        </li> -->
						
						<li class="list-inline-item dropdown notification-list">
						<!-- User Icon with Dropdown -->
						   <a href="#" class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" aria-expanded="false">
							  <!--<i class="fas fa-user text-light" style=""></i> -->
							  <img src="<?php base_url();?>public/Admin/assets/images/user-icon-logo.png" height="40" width="40"></img>
							  <!-- User Icon -->
						   </a>
						   <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg" style="width:200px;">
							  <!-- Dropdown Content -->
							  <div class="dropdown-item text-center">
								<?php 
									$id=$_SESSION['id']; 
									$db = db_connect('default');
									$query = $db->query("SELECT * FROM `tbl_login_master` WHERE id='$id'");
									$data = $query->getRowArray();
								?>
								<strong>Welcome, <?php echo $data['username']; ?></strong> 
							  </div>
							  <div class="dropdown-divider"></div>
							  <a href="<?= base_url(); ?>Logout" class="dropdown-item text-center">
								 <i class="fas fa-sign-out-alt"></i> Logout
							  </a>
						   </div>
						</li>


                        <li class="list-inline-item dropdown notification-list">
                           <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                               </a>
                           <div class="dropdown-menu dropdown-menu-right profile-dropdown">
                       
                              <div class="dropdown-item noti-title">
                                 <h5>Welcome</h5>
                              </div>
                              
                        </li>
                     </ul>
                     <ul class="list-inline menu-left mb-0">
                        <li class="float-left"><button class="button-menu-mobile open-left waves-light waves-effect"><i class="mdi mdi-menu"></i></button></li>
                     </ul>
                     
                     <div class="clearfix"></div>
                  </nav>
               </div>
               <!-- Top Bar End -->