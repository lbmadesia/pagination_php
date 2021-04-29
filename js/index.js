$(document).ready(function () {
    $(".menu-item").click(function () {
        var item = $(this).data("item");
        if (item == "Student List"){
            $(".studentList").removeClass("d-none");
            $(".newStudent,.studentEdit").addClass("d-none");
            studentList();
        }
        else{
            $(".newStudent").removeClass("d-none");
            $(".studentList,.studentEdit").addClass("d-none");
        }
    });
    studentList();



    $("#newstudent-btn").click(function(){
        $("#newstudent-leftli").click();
    });
});