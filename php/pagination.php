<?php
header('Access-Control-Allow-Origin: *');
require_once("database.php");

if (isset($_POST['pageno'])) {
    $pageno = $_POST['pageno'];
    $pageno = intval($pageno);
} else {
    $pageno = 1;
}

$no_of_records_per_page = 10;
$offset = ($pageno - 1) * $no_of_records_per_page;

$total_pages_sql = "SELECT COUNT(*) AS total FROM student";
$result = $db->query($total_pages_sql);
$total_rows = $result->fetch_assoc();
$total_rows = $total_rows["total"];
$total_pages = intval($total_rows / $no_of_records_per_page);


$sql = "SELECT * FROM student LIMIT $offset, $no_of_records_per_page";
$alldata = array();
$res = $db->query($sql);
if ($res->num_rows != 0) {
    while ($data = $res->fetch_assoc()) {
        array_push($alldata, $data);
    }
    http_response_code(200);
    echo json_encode(array("status" => "success","total"=> $total_pages,"data" => $alldata));
   
} else {
    http_response_code(404);
    echo json_encode(array("status" => "No data in database"));
}
$db->close();
?>