function studentList(){
    $.ajax({
        type: "POST",
        url: "php/pagination.php",
        cache: false,
        beforeSend: function () {
            $(".studentList-tbody").html("Please wait..");
        },
        success: function (res) {
            $(".studentList-tbody").html("");
            var data = JSON.parse(res);
           // var data = res;
            var maxpage = Number(data.total);
            if(data.status == "success"){
                if (maxpage == 0){
                    $("#paginationDiv").html('');
                }
                else{
                    $("#paginationDiv").html(`<div  disabled="disabled" data-number="0" data-max="` + maxpage +`" class="pag_item" id="pag_prev">Prev</div>`);
                    for (var j = 1; j <= maxpage;++j){
                        $("#paginationDiv").append(` <div  data-number="` + j + `" data-max="`+maxpage+`" class="pag_item">` +(j)+`</div>`);
                    }
                    $("#paginationDiv").append(`<div  data-number="2" data-max="` + maxpage +`" class="pag_item" id="pag_next">Next</div>`);
                }
                for (var i = 0; i < data.data.length; ++i) {
                    $(".studentList-tbody").append(` <tr>
                                <td>`+(i+1)+`</td>
                                <td >`+ data.data[i].name+`</td>
                                <td>`+ data.data[i].email +`</td>
                                <td>`+ data.data[i].class +`</td>
                                <td>`+ data.data[i].mark +`%</td>
                                <td ><div class="studentedit-icon text-primary" data-id="`+ data.data[i].id +`"><i class="fa fa-pencil-square-o"  aria-hidden="true"></i> Edit</div></td>
                            </tr>`);
                }
                studentedit();
            }else{
                 console.log(res);
            }
            pagination();
            
        },
        error: function (xhr) {
            console.log(xhr);
        }
    });
}