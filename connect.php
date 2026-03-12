<?php
<<<<<<< HEAD
$Enteryourname  =  filter_input(INPUT_POST, 'Enter your name', FILTER_SANITIZE_STRING);
$Enteryourname  =  filter_input(INPUT_POST, 'Enter email address', FILTER_SANITIZE_STRING);
$Enteryourname  =  filter_input(INPUT_POST, 'Enter your subject', FILTER_SANITIZE_STRING);
$Enteryourname  =  filter_input(INPUT_POST, 'Message', FILTER_SANITIZE_STRING);
=======
$name  =  filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email  =  filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$subject  =  filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
$message  =  filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
>>>>>>> 972df6364ff324d682acb88c343d13e01acea240

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
<<<<<<< HEAD
$dbname = "vant";
=======
$dbname = "vantech1";
>>>>>>> 972df6364ff324d682acb88c343d13e01acea240
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
if ($conn->connect_error) {
    die('Connect Error ('. $conn->connect_errno .') '.$conn->connect_error);
} else {
<<<<<<< HEAD
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
=======
    $stmt = $conn->prepare("INSERT INTO user (name, email, subject, message) VALUES (?, ?, ?, ?)");
    if ($stmt === false) {
        die('Prepare failed: ' . $conn->error);
    }
    $stmt->bind_param("ssss", $name, $email, $subject, $message);
if ($stmt->execute()) {
    echo "Message sent successfully";
} else {
    echo "Error: " . $stmt->error;
}
  $stmt->close();
  $conn->close();
    }
?>
>>>>>>> 972df6364ff324d682acb88c343d13e01acea240
