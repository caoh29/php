<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="navbar">
        <a href="./index.html" class="active">Susbcribe</a>
        <a href="./view.php">Guests List</a>
    </nav>

    <main class="content">
        <h2 class="title">Guests List</h2>

        <?php
            include 'connect.php';
            
            $sql = "SELECT * FROM guests;";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            echo "<table border='1'>
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Gender</th>
            </tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['age'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            } else {
            echo "0 results";
            }
            $conn->close();
        ?>
    </main>

    <footer>
        <p>&copy; 2024 Company. All rights reserved.</p>
    </footer>
</body>
</html>