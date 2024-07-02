<!DOCTYPE html>
<html>
<head>
    <title>Latest Button Clicked </title>
    <meta http-equiv="refresh" content="5"> <!-- Refresh the page every 5 seconds -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Latest Button Clicked</h1>
    <?php
    // Database credentials
    $servername = "localhost"; // Replace with your server name
    $username = "root"; // Replace with your MySQL username
    $password = ""; // Replace with your MySQL password
    $dbname = "Robot"; // Your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to get the latest row based on the id
    $sql = "SELECT buttonname FROM ButtonClicked ORDER BY id DESC LIMIT 1"; // Order by id to get the latest entry

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output the data of the last row
        while($row = $result->fetch_assoc()) {
            echo "<p>Button Name: " . $row["buttonname"]. "</p>"; // Displaying the button name
        }
    } else {
        echo "0 results";
    }

    $conn->close();
    ?>
</body>
</html>
