<?php
header('Access-Control-Allow-Origin: *');
require_once("database.php");
if ($_SERVER['REQUEST_METHOD'] == "POST" || $_SERVER['REQUEST_METHOD'] == "post") {

$id = $_POST["id"]; 
    $sql = "SELECT * FROM student WHERE id = '$id'";
    $res = $db->query($sql);
    if ($res->num_rows != 0) {
    $data = $res->fetch_assoc();  
    http_response_code(200);
    echo json_encode(array("status" => "success","data"=> $data));
    }
    else{
    http_response_code(404);
    echo json_encode(array("status" => "No data in database"));
    }
}
        $db->close();
?>