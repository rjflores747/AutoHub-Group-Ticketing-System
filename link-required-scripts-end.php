<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?=APP_URL?>/app/plugins/jquery/jquery.min.js"></script>


<!-- Bootstrap -->
<script src="<?=APP_URL?>/app/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?=APP_URL?>/app/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=APP_URL?>/app/dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="<?=APP_URL?>/app/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="<?=APP_URL?>/app/plugins/raphael/raphael.min.js"></script>
<script src="<?=APP_URL?>/app/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="<?=APP_URL?>/app/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<!-- <script src="<?=APP_URL?>/app/plugins/chart.js/Chart.min.js"></script> -->


<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?=APP_URL?>/app/dist/js/pages/dashboard2.js"></script>


<!-- DataTables  & Plugins -->
<script src="<?=APP_URL?>/app/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=APP_URL?>/app/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?=APP_URL?>/app/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?=APP_URL?>/app/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?=APP_URL?>/app/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?=APP_URL?>/app/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?=APP_URL?>/app/plugins/jszip/jszip.min.js"></script>
<script src="<?=APP_URL?>/app/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?=APP_URL?>/app/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?=APP_URL?>/app/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?=APP_URL?>/app/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?=APP_URL?>/app/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>




<!-- Select2 -->
<script src="<?=APP_URL?>/app/plugins/select2/js/select2.full.min.js"></script>
<!-- SweetAlert2 -->
<script src="<?=APP_URL?>/app/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="<?=APP_URL?>/app/plugins/toastr/toastr.min.js"></script>

<!-- for rating star of user -->
    
<!-- <script>
	$(document).ready(function(){
      
      // Search
       $("#searchText").on("input", function(){
       	 var searchText = $(this).val();
         if(searchText == "") return;
         $.post('../app/ajax/search.php', 
         	     {
         	     	key: searchText
         	     },
         	   function(data, status){
                  $("#chatList").html(data);
         	   });
       });

       // Search using the button
       $("#serachBtn").on("click", function(){
       	 var searchText = $("#searchText").val();
         if(searchText == "") return;
         $.post('../app/ajax/search.php', 
         	     {
         	     	key: searchText
         	     },
         	   function(data, status){
                  $("#chatList").html(data);
         	   });
       });


      /** 
      auto update last seen 
      for logged in user
      **/
      let lastSeenUpdate = function(){
      	$.get("../app/ajax/update_last_seen.php");
      }
      lastSeenUpdate();
      /** 
      auto update last seen 
      every 10 sec
      **/
      setInterval(lastSeenUpdate, 10000);

    });
</script> -->
