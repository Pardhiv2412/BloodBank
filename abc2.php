<?php
// Assuming you have a database connection, modify the following variables accordingly
$servername = "localhost";
$username = "root";
$password = "Pachu@2412";
$dbname = "testdb";

// Retrieve the username and password from the login form
if(isset($_POST['username']) && isset($_POST['password'])){
    $loginUsername = $_POST['username'];
    $loginPassword = $_POST['password'];
    
    // Create a database connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Perform the query to check if the username and password match
    $query = "SELECT * FROM admins WHERE username = '$loginUsername' AND password = '$loginPassword'";
    $result = $conn->query($query);
    
    if ($result->num_rows == 1) {
        // Login successful
        $row = $result->fetch_assoc();
        $loggedInUsername = $row['Name'];
        
        // Start a session to store the logged-in user's information
        session_start();
        $_SESSION['Name'] = $loggedInUsername;
        
        // Redirect to the page displaying the name of the logged-in user
        header("Location: abc.php");
        exit();
    } else {
        // Login failed
        echo "Invalid username or password.";
    }
    
    // Close the database connection
    $conn->close();
}
?>