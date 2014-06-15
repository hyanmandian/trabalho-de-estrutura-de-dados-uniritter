$(document).ready(function(){
    $("input[type='radio']").click(function(){
        if($(this).val() == 1){
            $(".pesquisa").fadeIn()
        }else{
            $(".pesquisa").fadeOut(function(){
                window.location = "cadastrar.php";
            });
        }
    })
});