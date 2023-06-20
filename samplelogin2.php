<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve the form data
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Database connection configuration
  $servername = "localhost";
  $username_db = "root";
  $password_db = "Pachu@2412";
  $dbname = "testdb";

  // Create a database connection
  $conn = new mysqli($servername, $username_db, $password_db, $dbname);

  // Check for connection errors
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Prepare and execute the query
  $stmt = $conn->prepare("SELECT * FROM admins WHERE username = ?");
  $stmt->bind_param("s", $username);
  $stmt->execute();
  $result = $stmt->get_result();

  // Check if the username exists in the database
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Verify the password
    if (password_verify($password, $row["password"])) {
      // Redirect to a success page or perform other actions
      header("Location: success.php");
      exit();
    } else {
      $error = "Invalid password. Please try again.";
    }
  } else {
    $error = "Invalid username. Please try again.";
  }

  // Close the database connection
  $stmt->close();
  $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <style>
    /* Styles here */
  </style>
</head>
<body>
  <div class="container">
    <h2>Login</h2>
    <?php if (isset($error)): ?>
      <p class="error"><?php echo $error; ?></p>
    <?php endif; ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>
      
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
      
      <input type="submit" value="Login">
    </form>
  </div>
</body>
</html>
