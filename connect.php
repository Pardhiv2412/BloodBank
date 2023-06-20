<!DOCTYPE html>
<html>
<body>
<?php
//Database connection here
$conn = new mysqli('localhost'
,'root','Pachu@2412','testdb');
if($conn === false){
  die("ERROR: Could not connect. "
                . mysqli_connect_error());
}
        //$username = $_REQUEST['userid'];
	$firstname = $_REQUEST['name'];
	$dob = $_REQUEST['dob'];
	$lstdate = $_REQUEST['last_donation'];
	$address = $_REQUEST['address'];
	$email = $_REQUEST['email'];
	$phno = $_REQUEST['phone'];
	$bldgrp = $_REQUEST['blood_group'];

$sql = "INSERT INTO form  VALUES ('$firstname','$dob','$lstdate','$address','$email','$phno','$bldgrp')";
if(mysqli_query($conn, $sql)){
            echo "<h3>Data stored in a database successfully.";
        }
 else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
?>
</body>
</html>