<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="../app/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap -->
<script src="../app/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="../app/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../app/dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="../app/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="../app/plugins/raphael/raphael.min.js"></script>
<script src="../app/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="../app/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<!-- <script src="../app/plugins/chart.js/Chart.min.js"></script> -->


<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../app/dist/js/pages/dashboard2.js"></script>


<!-- DataTables  & Plugins -->
<script src="../app/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../app/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../app/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../app/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../app/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../app/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../app/plugins/jszip/jszip.min.js"></script>
<script src="../app/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../app/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../app/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../app/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../app/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>


<!-- Select2 -->
<script src="../app/plugins/select2/js/select2.full.min.js"></script>
<!-- SweetAlert2 -->
<script src="../app/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="../app/plugins/toastr/toastr.min.js"></script>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<!-- for rating star of user -->
    
<script>
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
</script>
<!-- 
<script>
  $("#deletedata").on('click', function(){
 
    $.ajax({
        url: "function_delete_ticket_incident.php",
        type: "POST",
        data: {
          delete_id: $("#delete_id").val()
          // tkdepart_id: tkdepart_id
        },
        cache: false,
        success: function(result1){     
          // $('.swalDefaultInfo').click(function() {
          Toast.fire({
            icon: 'info',
            title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
          })
        // });
    
        }
        });
      });
</script> -->