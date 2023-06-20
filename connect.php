<!DOCTYPE html>
<html>
<body>
<?php

$conn = new mysqli('localhost'
,'root','Pachu@2412','testdb');
if($conn === false){
  die("ERROR: Could not connect. "
                . mysqli_connect_error());
}
	$firstname = $_REQUEST['name'];
	$dob = $_REQUEST['dob'];
	$lstdate = $_REQUEST['last_donation'];
	$address = $_REQUEST['address'];
	$email = $_REQUEST['email'];
	$phno = $_REQUEST['phone'];
	$bldgrp = $_REQUEST['blood_group'];

$sql = "INSERT INTO form  VALUES ('$firstname','$dob','$lstdate','$address','$email','$phno','$bldgrp')";
try{
        if(mysqli_query($conn, $sql)){
            echo "<h3>Data stored in a database successfully.";
        }
}
catch (mysqli_sql_exception $e) {
        $errorCode = $e->getCode();
        if ($errorCode === 1062){
                header("Location: error.php");
        }
        else{
                echo "Hush! Something went wrong!";
        }
}
         
mysqli_close($conn);
        
?>
</body>
</html>
