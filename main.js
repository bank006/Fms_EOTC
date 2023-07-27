$(document).ready(function(){
    $("#search").keyup(function(){
        let seachText = $(this).val();
        if(seachText != ""){
            $.ajax({
                url: "action.php",
                method: "post",
                data:{
                    query: seachText
                },
                success : function(response){
                   $("#show-list").html(response); 
                }
            })
        } else {
            $("#show-list").html("");
        }
    })
    
    $(document).on("click", "a", function () {
        $("#search").val($(this).text());
      })
})