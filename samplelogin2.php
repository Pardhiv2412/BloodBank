<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];
  // Database connection configuration
  $localhost = "localhost";
  $username_db = "root";
  $password_db = "Pachu@2412";
  $dbname = "testdb";
  $flag=0;

  // Create a database connection
  $conn = new mysqli($localhost, $username_db, $password_db, $dbname);

  // Check for connection errors
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Prepare and execute the query
  $sql="select * from admins where username='$username'";
  $result=$conn->query($sql);
  while($row=$result->fetch_assoc()) {
    if($row['password']==$password){
      $flag=1;
      break;
    }
  }
  if($flag==0){
    $error = "Invalid username or password. Please try again.";
  }
  else {
    header("Location: success.php");
      exit();
  }
  mysqli_close($conn);
}
  ?>

<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
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
