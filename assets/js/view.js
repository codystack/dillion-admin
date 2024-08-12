//ID Card View Trigger
$(document).ready(function(){
    $(document).on('click','.view_id_card',function(){
        var view_id_card_id=$(this).attr('id');
        $.ajax({
            url:"./view/view-id-card.php",
            type:"post",
            data:{view_id_card_id:view_id_card_id},
            success:function(data){
                $("#id_card_info").html(data);
                $("#viewIDCardModal").modal('show');
            }
        });
    });
});