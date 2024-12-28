 <!-- end wrapper --><!-- Footer -->
      <footer class="footer">
         <div class="container-fluid">
            <div class="row">
               <div class="col-12">© Copyright <?= date('Y');?> Cuknuk. Design & Developed by S IT.</div>
            </div>
         </div>
      </footer>
      <!-- End Footer --><!-- jQuery  -->
     <script src="<?=base_url();?>public/Admin/assets/js/jquery.min.js"></script>
     <script src="<?=base_url();?>public/Admin/assets/js/popper.min.js"></script>
     <script src="<?=base_url();?>public/Admin/assets/js/bootstrap.min.js"></script>
     <script src="<?=base_url();?>public/Admin/assets/js/modernizr.min.js"></script>
     <script src="<?=base_url();?>public/Admin/assets/js/waves.js"></script>
     <script src="<?=base_url();?>public/Admin/assets/js/jquery.slimscroll.js"></script>
     <script src="<?=base_url();?>public/Admin/assets/js/jquery.nicescroll.js"></script>
     <script src="<?=base_url();?>public/Admin/assets/js/jquery.scrollTo.min.js"></script>
     <script src="<?=base_url();?>public/Admin/assets/plugins/skycons/skycons.min.js"></script>
     <script src="<?=base_url();?>public/Admin/assets/plugins/raphael/raphael-min.js"></script>
     <script src="<?=base_url();?>public/Admin/assets/plugins/morris/morris.min.js"></script>
     <script src="<?=base_url();?>public/Admin/assets/pages/dashborad.js"></script>

      <script src="<?=base_url();?>public/Admin/assets/plugins/datatables/jquery.dataTables.min.js"></script>
     <script src="<?=base_url();?>public/Admin/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
     
     <script src="<?=base_url();?>public/Admin/assets/plugins/datatables/dataTables.buttons.min.js"></script>
     <script src="<?=base_url();?>public/Admin/assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
     <script src="<?=base_url();?>public/Admin/assets/plugins/datatables/jszip.min.js"></script>
     <script src="<?=base_url();?>public/Admin/assets/plugins/datatables/pdfmake.min.js"></script>
     <script src="<?=base_url();?>public/Admin/assets/plugins/datatables/vfs_fonts.js"></script>
     <script src="<?=base_url();?>public/Admin/assets/plugins/datatables/buttons.html5.min.js"></script>
     <script src="<?=base_url();?>public/Admin/assets/plugins/datatables/buttons.print.min.js"></script>
     <script src="<?=base_url();?>public/Admin/assets/plugins/datatables/buttons.colVis.min.js"></script>

      <script src="<?=base_url();?>public/Admin/assets/plugins/datatables/dataTables.responsive.min.js"></script>
     <script src="<?=base_url();?>public/Admin/assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
     <!-- Datatable init js --><script src="<?=base_url();?>public/Admin/assets/pages/datatables.init.js"></script>
     <script src="<?=base_url();?>public/Admin/assets/plugins/summernote/summernote-bs4.min.js"></script>
     <script src="<?=base_url();?>public/Admin/assets/pages/summernote.init.js"></script>
     <script src="<?=base_url();?>public/Admin/assets/js/app.js"></script>
     
     <script src="<?php echo base_url(); ?>/public/Frontend-Assets/js/google_jsapi.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
     <!--<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>-->


<script>
      /* BEGIN SVG WEATHER ICON */
         if (typeof Skycons !== 'undefined'){
         var icons = new Skycons(
            {"color": "#fff"},
            {"resizeClear": true}
            ),
                list  = [
                    "clear-day", "clear-night", "partly-cloudy-day",
                    "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                    "fog"
                ],
                i;
         
            for(i = list.length; i--; )
            icons.set(list[i], list[i]);
            icons.play();
         };
         
         // scroll
         
         $(document).ready(function() {
         
         $("#boxscroll").niceScroll({cursorborder:"",cursorcolor:"#cecece",boxzoom:true});
         $("#boxscroll2").niceScroll({cursorborder:"",cursorcolor:"#cecece",boxzoom:true}); 
         
         });
      </script>
       <script type="text/javascript">$(document).ready(function() {
         $('#datatable2').DataTable();  
         
         } );
      </script>