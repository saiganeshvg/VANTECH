<?php
$Enteryourname  =  filter_input(INPUT_POST, 'Enter your name', FILTER_SANITIZE_STRING);
$Enteryourname  =  filter_input(INPUT_POST, 'Enter email address', FILTER_SANITIZE_STRING);
$Enteryourname  =  filter_input(INPUT_POST, 'Enter your subject', FILTER_SANITIZE_STRING);
$Enteryourname  =  filter_input(INPUT_POST, 'Message', FILTER_SANITIZE_STRING);

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "vant";
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
if ($conn->connect_error) {
    die('Connect Error ('. $conn->connect_errno .') '.$conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO account (Enter your name, Enter email address, Enter your subject, Message) VALUES (?, ?, ?, ?)");
    if ($stmt === false) {
        die('Prepare failed: ' . $conn->error);
    }
    $stmt->bind_param("sss", $Enter your name, $Enter email address, $Enter your subject, $Message);
  if ($stmt->execute()) {
    echo "You sent message";
  } else {
    echo "Error; " . $stmt->error;
  }
  $stmt->close();
  $conn->close();
    }
?>