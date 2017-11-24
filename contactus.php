<?php
require 'connect.php';
$conn    = Connect();
$name    = $conn->real_escape_string($_POST['user']);
$email   = $conn->real_escape_string($_POST['email']);
$subj    = $conn->real_escape_string($_POST['subject']);
$message = $conn->real_escape_string($_POST['message']);
$query   = "INSERT into contactform (user,email,subject,message) VALUES('" . $name . "','" . $email . "','" . $subj . "','" . $message . "')";
$success = $conn->query($query);

if (!$success) {
   die("Couldn't enter data: ".$conn->error);

}

echo "Thank You For Contacting Us <br>";

$conn->close();

?>
