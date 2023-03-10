$(document).ready(function(){
$("$tkdepart").on('change',function(){
    var tkdepartId=$(this).val();
    $.ajax({
        method:"POST",
        url:"function_ticket_incident_ajax.php",
        data:{id:tkdepartId},
        dataType:"html",
        success:function(data){
            $("deptgroup").html(data);  
        }
    });
 });
});