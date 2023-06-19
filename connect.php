<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$gender = $_POST['gender'];
$email= $_POST['email'];
$password= $_POST['password'];
$conn = new mysqli('localhost','root','','blood');
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(firstName,lastName,gender,email,password)values(?,?,?,?,?)");
    $stmt->bind_param("sssss",$firstName,$lastName,$gender,$email,$password);
    $stmt->execute();
    echo"Regitered Sucessfully...";
    $stmt->close();
    $conn->close();
}
?>