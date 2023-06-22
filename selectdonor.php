<!DOCTYPE html>
<html>
<head>
    <title>Blood Donor Details</title>
    <link rel="stylesheet" href='selectdonor.css'>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var bloodGroupDropdown = document.getElementById('blood-group');
            bloodGroupDropdown.addEventListener('change', function() {
                var selectedBloodGroup = bloodGroupDropdown.value;
                var tableRows = document.querySelectorAll('#donor-table tbody tr');

                for (var i = 0; i < tableRows.length; i++) {
                    var bloodGroupCell = tableRows[i].querySelector('td:nth-child(7)');
                    if (selectedBloodGroup === 'all' || bloodGroupCell.textContent === selectedBloodGroup) {
                        tableRows[i].style.display = '';
                    } else {
                        tableRows[i].style.display = 'none';
                    }
                }
            });
        });
    </script>
</head>
<body>
    <div id="header">
        <h1 >AVAILABLE BLOOD DONORS</h1>
    </div>
    <a id="back-button" href="index.php">Home</a>
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

            $sql = "SELECT * FROM form";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr class='vol'>";
                    echo "<td>" . $row["firstname"] . "</td>";
                    echo "<td>" . $row["dob"] . "</td>";
                    echo "<td>" . $row["lst_date"] . "</td>";
                    echo "<td>" . $row["address"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["phone"] . "</td>";
                    echo "<td>" . $row["blood_grp"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No donors found</td></tr>";
            }
            $conn->close();
            ?>
        </tbody>
    </table>
</body>
</html>
