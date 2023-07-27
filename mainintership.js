$(document).ready(function(){
    $("#searchats").keyup(function(){
        let seachText = $(this).val();
        if(seachText != ""){
            $.ajax({
                url: "actionats.php",
                method: "post",
                data:{
                    query: seachText
                },
                success : function(response){
                   $("#show-listats").html(response); 
                }
            })
        } else{
            $("#show-listats").html("");
        }
    })
    
    $(document).on('click', 'a', function(){
        $("#searchats").val($(this)).text()
        $("#show-lisatst").html("");
    })
})