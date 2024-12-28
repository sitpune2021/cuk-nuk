<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
      <title>Cuknuk - Dashboard</title>
      <meta content="Admin Dashboard" name="description">
      <meta content="Mannatthemes" name="author">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      
      <?php include 'includes/header.php'; ?>
      
               <div class="page-content-wrapper">
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="page-title-box">
                              <div class="btn-group float-right">
                                 <ol class="breadcrumb hide-phone p-0 m-0">
                                    <li class="breadcrumb-item"><a href="#">Cuknuk</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                 </ol>
                              </div>
                              <h4 class="page-title">Dashboard</h4>
                           </div>
                        </div>
                        <div class="clearfix"></div>
                     </div>
                     <!-- end page title end breadcrumb -->
                     <div class="row">
                        <div class="col-xl-12">
                           <div class="row">
                               <div class="col-lg-3">
                                  <a href="<?= base_url(); ?>ViewSlider">
                                 <div class="card">
                                    <div class="card-body">
                                       <div class="d-flex flex-row">
                                          <div class="col-3 align-self-center">
                                             <div class="round"><i class="mdi mdi-view-carousel"></i></div>
                                          </div>
                                          <div class="col-9 text-right align-self-center">
                                             <div class="m-l-10">
                                                <h5 class="mt-0"><?php echo $SliderC;?></h5>
                                                <p class="mb-0 text-muted">Sliders</p>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="progress mt-3" style="height:3px;">
                                          <div class="progress-bar bg-warning" role="progressbar" style="width: 48%;" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                                       </div>
                                    </div>
                                    <!--end card-body-->
                                 </div>
                                 <!--end card-->
                                 </a>
                              </div>
                              <!--end col-->
                               <div class="col-lg-3">
                               <a href="<?= base_url(); ?>ViewCategory">
                                 <div class="card">
                                    <div class="card-body">
                                       <div class="d-flex flex-row">
                                          <div class="col-3 align-self-center">
                                             <div class="round"><i class="mdi mdi-folder"></i></div>
                                          </div>
                                          <div class="col-9 align-self-center text-right">
                                             <div class="m-l-10">
                                                <h5 class="mt-0"><?php echo $CategoryC;?></h5>
                                                <p class="mb-0 text-muted">Category</p>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="progress mt-3" style="height:3px;">
                                          <div class="progress-bar bg-success" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                       </div>
                                    </div>
                                    <!--end card-body-->
                                 </div>
                                 <!--end card-->
                              </a>
                              </div>
                              <!--end col-->
                              <div class="col-lg-3">
                               <a href="<?= base_url(); ?>ViewProducts">
                                 <div class="card">
                                    <div class="card-body">
                                       <div class="d-flex flex-row">
                                          <div class="col-3 align-self-center">
                                             <div class="round"><i class="mdi mdi-package"></i></div>
                                          </div>
                                          <div class="col-9 align-self-center text-right">
                                             <div class="m-l-10">
                                                <h5 class="mt-0"><?php echo $ProductC;?></h5>
                                                <p class="mb-0 text-muted">Products</p>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="progress mt-3" style="height:3px;">
                                          <div class="progress-bar bg-success" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                       </div>
                                    </div>
                                    <!--end card-body-->
                                 </div>
                                 <!--end card-->
                              </a>
                              </div>
                              <!--end col-->
                              
                              <div class="col-lg-3">
                                  <a href="<?= base_url(); ?>ViewContactDetails">
                                 <div class="card">
                                    <div class="card-body">
                                       <div class="search-type-arrow"></div>
                                       <div class="d-flex flex-row">
                                          <div class="col-3 align-self-center">
                                             <div class="round"><i class="mdi mdi-email"></i></div>
                                          </div>
                                          <div class="col-9 align-self-center text-right">
                                             <div class="m-l-10">
                                                <h5 class="mt-0"><?php echo $ContactC;?></h5>
                                                <p class="mb-0 text-muted">Enquiry</p>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="progress mt-3" style="height:3px;">
                                          <div class="progress-bar bg-danger" role="progressbar" style="width: 61%;" aria-valuenow="61" aria-valuemin="0" aria-valuemax="100"></div>
                                       </div>
                                    </div>
                                    <!--end card-body-->
                                 </div>
                                 </a>
                                 <!--end card-->
                              </div>
                              <!--end col-->
                           </div>
                           <!--end row-->
                           
                        </div>
                        <!--end col-->
                        
                     </div>
                     <!--end row-->
                     
                  </div>
                  <!-- container -->
               </div>
               <!-- Page content Wrapper -->
            </div>
           <?php include 'includes/footer.php'; ?>
   </body>
</html>