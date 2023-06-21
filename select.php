<!DOCTYPE html>
<html>
<head>
    <title>Table Details</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>

        <?php
        // Database connection settings
        $host = 'localhost';
        $username = 'root';
        $password = 'nikki@2422';
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
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['dob'] . "</td>";
            echo "<td>" . $row['last_don'] . "</td>";
            echo "<td>" . $row['phone'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "</tr>";
        }

        // Close connection
        $conn->close();
        ?>

    </table>
</body>
</html>