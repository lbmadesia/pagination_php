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
            beforeSend: function () {
                $(".studentList-tbody").html("Please wait..");
            },
            success: function (res) {
                $(".studentList-tbody").html("");
                var res = JSON.parse(res);
                console.log(res);
                    

            },
            error: function (xhr) {
                console.log(xhr);
            }
        });
    });
}