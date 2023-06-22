<!DOCTYPE html>
<html>
<head>
    <title>Blood Requests List</title>
    <link rel="stylesheet" href='select.css'>
</head>
<body>
    <div id="header">
    <img src="user-removebg-preview.png" alt="Customer photo">
        <h1>ACTIVE BLOOD REQUESTS</h1>
    </div>
    <div class="button-container">
    <a id="donor" href="selectdonor.php">Available Donors</a></div>
    <a id="back-button" href="index.php">Home</a>
    <table id="donor-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>
            <?php
            session_start();
            if(isset($_SESSION['Name'])){
                $loggedInUsername = $_SESSION['Name'];
                echo "<h2>$loggedInUsername</h2>";
            }
            $servername = "localhost";
            $username = "root";
            $password = "Pachu@2412";
            $database = "testdb";

            $conn = new mysqli($servername, $username, $password, $database);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM helpform";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr class='vol'>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["phone"] . "</td>";
                    echo "<td>" . $row["message"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No pending requests.</td></tr>";
            }
            $conn->close();
            ?>
        </tbody>
    </table>
</body>
</html>
