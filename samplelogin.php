<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];
  if ($username === "nikki" && $password === "nikkilev") {
    header("Location: success.php");
    exit();
  } else {
    $error = "Invalid username or password. Please try again.";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f8f8;
    }

    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 4px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      color: #333;
    }

    label {
      display: block;
      margin-bottom: 8px;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-bottom: 16px;
    }

    input[type="submit"] {
      display: block;
      width: 100%;
      background-color: #c9302c;
      color: #fff;
      padding: 10px 16px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #a12a26;
    }

    .error {
      color: #c9302c;
      margin-bottom: 10px;
    }
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