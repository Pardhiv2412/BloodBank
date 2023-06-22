<!DOCTYPE html>
<html>
<head>
    <title>Table Details</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Date of Birth</th>
            <th>Last Donation</th>
            <th>Address</th>
            <th>Email</th>
            <th>Phone No.</th>
            <th>Blood Group</th>
        </tr>

        <?php
        // Database connection settings
        $host = 'localhost';
        $username = 'root';
        $password = 'Pachu@2412';
        $database = 'testdb';

        // Create connection
        $conn = new mysqli($host, $username, $password, $database);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // SQL query to retrieve data from the table
        $sql = "SELECT * FROM form";
        $result = $conn->query($sql);

        // Loop through each row in the result set
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['firstname'] . "</td>";
            echo "<td>" . $row['dob'] . "</td>";
            echo "<td>" . $row['lst_date'] . "</td>";
            echo "<td>" . $row['address'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['phone'] . "</td>";
            echo "<td>" . $row['blood_grp'] . "</td>";
            echo "</tr>";
        }

        // Close connection
        $conn->close();
        ?>

    </table>
</body>
</html>