<?php
header('Access-Control-Allow-Origin: *');
require_once("database.php");

if($_SERVER['REQUEST_METHOD'] == "POST" || $_SERVER['REQUEST_METHOD'] == "post"){
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
    $sql = "SELECT * FROM student WHERE phone = '$phone'";
    $res = $db->query($sql);
    if ($res->num_rows == 0) {
     $sqll = "INSERT INTO student(name, father, dob, address, city, state, pin, phone, email, class, mark)VALUES ('$name', '$father', '$dob', '$address','$city', '$state', '$pin', '$phone','$email','$class','$mark')";
       $excute = $db->query($sqll);
     if($excute){
            echo "successfully student submited";
       }
       else{
           echo "student not create,server down please try again later";
       }
}
else{
        echo "user is aleary exist";
}
} else {
    echo "bad method call";
}
$db->close();

?>