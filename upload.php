<?php
include 'dbcon.php';
if (isset($_POST['submit'])) {

    $firstname=$_POST["firstname"];
    $lastname=$_POST["lastname"];
    $preferredfirstname=$_POST["preferredfirstname"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $file=$_FILES["file"];
    $file=$_FILES["files"];
    $linkedin=$_POST["linkedin"];
   
    print_r($file);

}else{
    echo "No button has been clicked";

}


   

