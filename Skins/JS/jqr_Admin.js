
    do_validate();

 
function do_validate()
{
    $("#content-teacher").css("display","block");
    $("#content_student").css("display","none");
    $("#content_Post").css("display","none");
    $("#content-class").css("display","none");
}


$("#qlgv").click(function(){
    $("#content-teacher").css("display","block");
    $("#content_student").css("display","none");
    $("#content_Post").css("display","none");
    $("#content-class").css("display","none");
});

$("#qlsv").click(function(){
    $("#content_student").css("display","block");
    $("#content-teacher").css("display","none");
    $("#content_Post").css("display","none");
    $("#content-class").css("display","none");
   
});
$("#qlpst").click(function(){
    $("#content_Post").css("display","block");
    $("#content-teacher").css("display","none");
    $("#content_student").css("display","none");
    $("#content_class").css("display","none");
});
$("#qlcls").click(function(){
    $("#content-class").css("display","block");
    $("#content_student").css("display","none");
    $("#content_Post").css("display","none");
    $("#content_teacher").css("display","none");
});

