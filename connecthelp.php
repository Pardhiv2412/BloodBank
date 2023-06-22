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
	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$phno = $_REQUEST['phone'];
	$msg = $_REQUEST['message'];

$sql = "INSERT INTO helpform  VALUES ('$name','$email','$phno','$msg')";
if(mysqli_query($conn, $sql)){
            echo "<h3>Data stored in a database successfully.";
}
else{
    echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
}
mysqli_close($conn);
?>
</body>
</html>