
<!DOCTYPE html>
<html lang="en">
<head>
   <title>Cuknuk- View Category</title>
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
                                    <h4 class="page-title">View Category</h4>
                                </div>
                            </div>
                            
                            <!--<div class="mb-3">-->
                            <!--<a href="<?=base_url();?>AddProducts" class="btn btn-success waves-effect waves-light float-right"><i class="mdi mdi-plus me-2"></i> Add Product</a>-->
                            <!--</div>-->
                        
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
                                                    <th width="10%">Sr.No.</th>
                                                    <th>Category Name</th>
                                                    <th>Image</th>
                                                    <th>Active</th>
                                                    <th>Created Date</th>
                                                    <th width="12%">Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $n=1; foreach($CategoryD as $list){ ?>
                                                <tr>
                                                   <td width="10%"><?=$n;?></td>
                                                   <td><?=$list['category_name'];?></td>
                                                   <td>
                                                       <a href="<?=base_url();?>public/Admin/assets/images/Category_images/<?=$list['image'];?>" target="_blank">
                                                        <?php if (!empty($list['image'])) { ?>
                                                        <img src="<?=base_url();?>public/Admin/assets/images/Category_images/<?=$list['image'];?>" style="width: 40px;">
                                                        <?php } ?>
                                                        </a>
                                                   </td>
                                                   
                                                   <td>
                                                        <?php if($list['is_active']==1){ ?>
                                                        <img onClick="changeActiveStatus(<?=$list['id'];?>,0);" src="<?=base_url();?>public/Admin/assets/images/on.png" style="width: 55px;cursor: pointer;">
                                                        <?php } else { ?>
                                                        
                                                        <img onClick="changeActiveStatus(<?=$list['id'];?>,1);" src="<?=base_url();?>public/Admin/assets/images/off.png" style="width: 55px;cursor: pointer;">
                                                        <?php } ?>
                                                    </td>
                                                    
                                                   <td><?=date("d M Y",strtotime($list['created_at']));?></td>
                                                   <td width="12%">
                                                        <div class="d-flex">
                                                        <a href="<?php echo base_url(); ?>UpdateCategory?ID=<?php echo base64_encode($list['id']); ?>" class="btn btn-primary shadow btn-sm sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                        &nbsp;&nbsp;<a onclick="deletePage(<?=$list['id'];?>);" class="btn btn-danger shadow btn-sm sharp"><i class="fa fa-trash" style="cursor: pointer;"></i></a>
                                                        </div>
                                                   </td>
                                                 </tr> 
                                             <?php  $n++; } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!--</div>--><!-- content -->

        <!--</div>--><!-- End Right content here -->
    </div>
    <!-- END wrapper --><!-- jQuery  -->
    
      <script>
    
   function deletePage(delId) {
       var tableName = 'tbl_category';
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
                window.location.replace("<?=base_url();?>deleteCategory?ID="+delId+"&table="+tableName);
            }
            
         })
      }

function changeActiveStatus(id,is_active)
{   
    $.ajax({
          url: "<?=base_url();?>changeActiveStatus",
          method: "POST",
          data:{id:id,is_active:is_active},
          success: function(responses) {
          location.reload();
           
          },
           error: function(error) {
            console.log("Error:", error);
            $("#result").html("Error loading data.");
            
          }
        });
}

</script>
    <?php echo view ('Admin/includes/footer'); ?>
    </body>
</html>