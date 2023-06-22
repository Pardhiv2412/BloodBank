<?php
// Start the session to retrieve the logged-in user's information
session_start();

// Check if the user is logged in
if(isset($_SESSION['Name'])){
    $loggedInUsername = $_SESSION['Name'];
    // Retrieve the user's name from the database using the username if needed
    
    // Display the logged-in user's name
    echo "<h2>Welcome, $loggedInUsername!</h2>";
} else {
    // Redirect to the login page if the user is not logged in
    header("Location: login.html");
    exit();
}
?>