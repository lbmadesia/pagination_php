function pagination(){
    $(".pag_item").click(function(){
        var num = Number($(this).data("number"));
        var max = Number($(this).data("max"));
        if (num < max){
            $("#pag_next").attr("disabled","disabled");
        }
        else{
            $("#pag_next").removeAttr("disabled");
        }
        if(num < 1){
            $("#pag_prev").attr("disabled", "disabled");
        }
        else{
            $("#pag_prev").removeAttr("disabled");
        }
        $("#pag_next").attr("data-number", num + 1);
        $("#pag_prev").attr("data-number", num-1);
        if(num != 0){
            $.ajax({
                type: "POST",
                url: "php/pagination.php",
                cache: false,
                data : {
                    pageno   : num
                },
                beforeSend: function () {
                    $(".studentList-tbody").html("Please wait..");
                },
                success: function (res) {
                    $(".studentList-tbody").html("");
                    var data = JSON.parse(res);
                  
                    if (data.status == "success") {
                       
                        for (var i = 0; i < data.data.length; ++i) {
                            $(".studentList-tbody").append(` <tr>
                                <td>`+ (i + 1) + `</td>
                                <td >`+ data.data[i].name + `</td>
                                <td>`+ data.data[i].email + `</td>
                                <td>`+ data.data[i].class + `</td>
                                <td>`+ data.data[i].mark + `%</td>
                                <td ><div class="studentedit-icon text-primary" data-id="`+ data.data[i].id + `"><i class="fa fa-pencil-square-o"  aria-hidden="true"></i> Edit</div></td>
                            </tr>`);
                        }
                        studentedit();
                    } else {
                        console.log(res);
                    }
                },
                error: function (xhr) {
                    console.log(xhr);
                }
            });
        }
        });
  }