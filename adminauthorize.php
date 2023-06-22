<?php
$name = $_REQUEST['email'];
$email = $_REQUEST['password'];
if ($username === "nikki" && $password === "nikkilev") {
    header("Location: success.php");
    exit();
  } else {
    $error = "Invalid username or password. Please try again.";
  }
?>
