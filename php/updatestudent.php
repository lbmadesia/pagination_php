<?php
header('Access-Control-Allow-Origin: *');
require_once("database.php");

if($_SERVER['REQUEST_METHOD'] == "POST" || $_SERVER['REQUEST_METHOD'] == "post"){
    $id = $_POST["id"];
    $name = $_POST["name"];
    $father = $_POST["father"];
    $dob = $_POST["dob"];
    $email = $_POST["email"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $pin = $_POST["pin"];
    $address = $_POST["address"];
    $class = $_POST["class"];
    $mark = $_POST["mark"];
    $phone = $_POST["phone"];
   $sql = "UPDATE student SET name='$name',father='$father',dob='$dob',address='$address',city='$city',state='$state',pin='$pin',phone='$phone',email='$email',class='$class',mark='$mark' WHERE id = '$id'";
      $excute = $db->query($sql);
     if($excute){
            echo "successfully updated student details";
       }
       else{
           echo "student details not update,server down please try again later";
       }
} else {
    echo "bad method call";
}
$db->close();
