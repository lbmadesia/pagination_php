$(document).ready(function () {
    $("#newStudent_form").submit(function (e) {
        e.preventDefault();
          var phone = $("#phone").val();
        if(phone.length == 10){
        $.ajax({
            type: "POST",
            url: "php/newStudent.php",
            cache: false,
            contentType: false,
            processData: false,
            data: new FormData(this),
            beforeSend : function(){
                $("#newStudent_btn").html("Please wait..");
                $("#newStudent_btn").attr("disabled","disabled");
            },
            success : function(res){
                $("#newStudent_btn").html("Submit");
                $("#newStudent_btn").removeAttr("disabled");
                alert(res)
            },
            error : function(xhr){
               alert(xhr);
            }
        });
    }
    else{
        $(".phone_small").html("phone number may only 10 character");
        setTimeout(() => {
        $(".phone_small").html("");
        }, 4000);
    }
    });
});