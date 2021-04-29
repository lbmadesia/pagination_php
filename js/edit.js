function studentedit(){
    $(".studentedit-icon").click(function(){
        $(".studentEdit").removeClass("d-none");
        $(".newStudent,.studentList").addClass("d-none");
        var id = $(this).data("id");
        $.ajax({
            type: "POST",
            url: "php/studentrow.php",
            cache: false,
            data : {
                id : id
            },
            success: function (res) {
                console.log(res);
                var res = JSON.parse(res);
                console.log(res);
                $("#editid").val(res.data.id);
                $("#editname").val(res.data.name);
                $("#editfather").val(res.data.father);
                $("#editdob").val(res.data.dob);
                $("#editaddress").val(res.data.address);
                $("#editemail").val(res.data.email);
                $("#editcity").val(res.data.city);
                $("#editstate").val(res.data.state);
                $("#editpin").val(res.data.pin);
                $("#editclass").val(res.data.class);
                $("#editmark").val(res.data.mark);
                $("#editphone").val(res.data.phone);
                    

            },
            error: function (xhr) {
                console.log(xhr);
            }
        });
    });
}


// start submit for edit code 
$(document).ready(function () {
    $("#studentEdit_form").submit(function (e) {
        e.preventDefault();
    $.ajax({
        type: "POST",
        url: "php/updatestudent.php",
        cache: false,
        contentType: false,
        processData: false,
        data: new FormData(this),
        beforeSend: function () {
            $("#studentEdit_btn").html("Please wait..");
            $("#studentEdit_btn").attr("disabled", "disabled");
        },
        success: function (res) {
            $("#studentEdit_btn").html("update");
            $("#studentEdit_btn").removeAttr("disabled");
            alert(res);
            $("#studentlist-leftli").click();
        },
        error: function (xhr) {
            alert("not updated something wrong");
            console.log(xhr)
        }
    });
});
});