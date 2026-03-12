<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "userregistration";
$con = new mysqli($server, $user, $password, $db);
if($con){
    echo "Connection successfull";
}else{
    echo "No connection";
}
?>