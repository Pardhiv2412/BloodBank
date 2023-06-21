<!DOCTYPE html>
<html>
<head>
    <title>Blood Donor Details</title>
    <link rel="stylesheet" href='selectdonor.css'>
</head>
<body>
    <div id="header">
        <h1>AVAILABLE BLOOD DONORS</h1>
    </div>
    <div id="blood-group-filter">
        <form method="get">
            <label for="blood-group">Filter by Blood Group:</label>
            <select id="blood-group" name="bloodGroup">
                <option value="all" selected>All Blood Groups</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select>
            <input type="submit" value="Filter">
        </form>
    </div>
    <table id="donor-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Date of Birth</th>
                <th>Last Donation Date</th>
                <th>Address</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Blood Group</th>
            </tr>
        </thead>
        <tbody>
            <?php
                // Database connection
                $servername = "localhost";
                $username = "root";
                $password = "Pachu@2412";
                $database = "testdb";

                $conn = new mysqli($servername, $username, $password, $database);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Get the selected blood group filter
                $selectedBloodGroup = isset($_GET['bloodGroup']) ? $_GET['bloodGroup'] : 'all';
                $sql = "SELECT * FROM form";
                // Prepare SQL statement based on the selected blood group filter
                if ($selectedBloodGroup == 'all') {
                    $sql = "SELECT * FROM form";
                } else {
                    $sql = "SELECT * FROM form WHERE blood_grp = '$selectedBloodGroup'";
                }

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<tr>';
                        echo '<td>' . $row["firstname"] . '</td>';
                        echo '<td>' . $row["dob"] . '</td>';
                        echo '<td>' . $row["lst_date"] . '</td>';
                        echo '<td>' . $row["address"] . '</td>';
                        echo '<td>' . $row["email"] . '</td>';
                        echo '<td>' . $row["phone"] . '</td>';
                        echo '<td>' . $row["blood_grp"] . '</td>';
                        echo '</tr>';
                    }
                } else {
                    echo '<tr><td colspan="7">No donors found.</td></tr>';
                }

                $conn->close();
            ?>
        </tbody>
    </table>
</body>
</html>
