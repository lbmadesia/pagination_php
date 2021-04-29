<?php
header('Access-Control-Allow-Origin: *');
require_once("database.php");
$alldata = array(); 
    $sql = "SELECT * FROM student";
    $res = $db->query($sql);
    if ($res->num_rows != 0) {
    while ($data = $res->fetch_assoc()) {
        array_push($alldata,$data);
    }
    http_response_code(200);
    echo json_encode(array("status" => "success","data"=> $alldata));
       //echo json_encode($alldata);
    }
    else{
    http_response_code(404);
    echo json_encode(array("status" => "No data in database"));
    }
        $db->close();
    ?>