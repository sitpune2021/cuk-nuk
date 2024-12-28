
<!DOCTYPE html>
<html lang="en">
<head>
   <title>Cuknuk - View Enquiry</title>
</head>

<?php echo view ('Admin/includes/header'); ?>

<body class="fixed-left"><!-- Loader -->
    <!--<div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>--><!-- Begin page -->
    
<!-- Start right Content here -->
        <!--<div class="content-page">
            <div class="content">-->
            
                <!-- Top Bar End -->
                <div class="page-content-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <div class="btn-group float-right">
                                       
                                    </div>
                                    <h4 class="page-title">View Enquiry</h4>
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
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
													<th>Phone No.</th>
													<th>Subject</th>
                                                    <th>Message</th>
                                                    <th>Created Date</th>
                                                   

                                                </tr>
                                            </thead>
                                             <tbody>
                                                <?php $n = 1; ?>
                                                <?php foreach($contactD as $list){ ?>
                                                <tr>
                                                    <td><?= $n; ?></td>
                                                    <td><?=$list['name'];?></td>
                                                    <td><?=$list['email'];?></td>
													<td><?=$list['phone_no'];?></td>
                                                    <td><?=$list['subject'];?></td>
													<td><?=$list['enquiry'];?></td>
                                                    <td><?=date("d M Y",strtotime($list['created_at']));?></td>
                                                </tr>
                                                
                                                    <?php $n++; } ?>
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
       var tableName = 'payment_history';
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
                window.location.replace("<?=base_url();?>deleteRecord?ID="+delId+"&table="+tableName);
            }
            
         })
      }

</script>
    <?php echo view ('Admin/includes/footer'); ?>
    </body>
</html>