<!DOCTYPE html>
<html>
<head>
  <title>Blood Donation Registration</title>
  <link rel="stylesheet" href="style3.css">
</head>
<body>
  <h2>Blood Donation Registration Form</h2>
  <form action ="connect.php" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" placeholder="eg:Abcd Xyz" required><br><br>

    <label for="dob">Date of Birth:</label>
    <input type="date" id="dob" name="dob" required><br><br>

    <label for="last_donation">Date of Last Blood Donation:</label>
    <input type="date" id="last_donation" name="last_donation" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="eg:Abcde@gmail.com" required><br><br>

    <label for="phone">Phone Number:</label>
    <input type="tel" id="phone" name="phone" placeholder="eg:9876543210" required><br><br>

    <label for="address">Address:</label>
    <textarea id="address" name="address" required></textarea><br><br>

    <label for="blood_group">Blood Group:</label>
    <select id="blood_group" name="blood_group" required>
      <option value="" disabled selected>Select Blood Group</option>
      <option value="A+">A+</option>
      <option value="A-">A-</option>
      <option value="B+">B+</option>
      <option value="B-">B-</option>
      <option value="AB+">AB+</option>
      <option value="AB-">AB-</option>
      <option value="O+">O+</option>
      <option value="O-">O-</option>
    </select><br><br>

    <label for="feedback">Feedback:</label>
    <textarea id="feedback" name="feedback"></textarea><br><br>

    <input type="submit" value="Submit">
  </form>
</body>
</html>
