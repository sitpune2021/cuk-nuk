<!DOCTYPE html>
<html lang="en">
<head>
   <title>Cuknuk- View Slider</title>
</head>

<?php echo view ('Admin/includes/header'); ?>

<body class="fixed-left"><!-- Loader -->
   
                <!-- Top Bar End -->
                <div class="page-content-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <div class="btn-group float-right">
                                       
                                    </div>
                                    <h4 class="page-title">View Slider</h4>
                                </div>
                            </div>
                        
                            <div class="clearfix"></div>
                        </div><!-- end page title end breadcrumb -->
                        <!-- end row -->
                       <!--end row-->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                       <table id="datatable-buttons" class="table table-striped table-bordered w-100">
                                            <thead>
                                                <tr>
                                                    <th width="10%">Sr.No</th>
                                                  
                                                    <th>Image</th>
                                                    <th>Image Tag</th>
                                                    <th>Index No.</th>
                                                    <th>Created Date</th>
                                                    <th width="12%">Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $n = 1; ?>
                                                <?php foreach($sliderD as $list){ ?>
                                                <tr>
                                                    <td width="10%"><?= $n; ?></td>
                                                    
                                                    <td>
                                                      
                                                    <a href="<?=base_url();?>public/Admin/assets/images/Slider_image/<?=$list['image'];?>" target="_blank">
                                                       <?php if (!empty($list['image'])) { ?>
                                                       <img src="<?=base_url();?>public/Admin/assets/images/Slider_image/<?=$list['image'];?>" style="width: 40px;">
                                                       <?php } ?>
                                                    </a>
                                                        
                                                    </td>
                                                    <td><?=$list['alt_tag'];?></td>
                                                    <td><?=$list['index_no'];?></td>
                                                    <td><?=date("d M Y",strtotime($list['created_at']));?></td>
                                                    <td width="12%">
                                                        <div class="d-flex">
                                                            <a href="<?php echo base_url(); ?>UpdateSlider?ID=<?php echo base64_encode($list['id']); ?>" class="btn btn-primary shadow btn-sm sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                            &nbsp;&nbsp;<a onclick="deletePage(<?=$list['id'];?>);" class="btn btn-danger shadow btn-sm sharp"><i class="fa fa-trash" style="cursor: pointer;"></i></a>
                                                        </div>												
                                                    </td>
                                                    <?php $n++; } ?>
                                                </tr>
                                                
                                            </tbody>
                                            
                                        </table>
                                    </div>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- container -->
                </div><!-- Page content Wrapper -->
            <!--</div>--><!-- content -->

        <!--</div>--><!-- End Right content here -->
    </div>
    <!-- END wrapper --><!-- jQuery  -->
    
<script>
    
function deletePage(delId) {
       var tableName = 'tbl_slider';
        Swal.fire({
            title: "Are you sure?",
            text: "You want to delete this record?",
            icon: "warning",
            showCancelButton: !0,
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel!",
            confirmButtonClass: "btn btn-success mt-2",
            cancelButtonClass: "btn btn-danger ms-2 mt-2",
            buttonsStyling: !1
         }).then(function (t) {
           if (t.isConfirmed) {
                window.location.replace("<?=base_url();?>deleteSlider?ID="+delId+"&table="+tableName);
            }
            
         })
      }

</script>
    <?php echo view ('Admin/includes/footer'); ?>
    </body>
</html>