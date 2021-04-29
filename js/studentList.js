function studentList(){
    $.ajax({
        type: "POST",
        url: "php/studentList.php",
        cache: false,
        beforeSend: function () {
            $(".studentList-tbody").html("Please wait..");
        },
        success: function (res) {
            $(".studentList-tbody").html("");
            var data = JSON.parse(res);
            if(data.status == "success"){
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
          
            
        },
        error: function (xhr) {
            console.log(xhr);
        }
    });
}