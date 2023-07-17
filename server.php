<?php
// Database connection details
$servername = "localhost";
$username = "Uday";
$password = "123456";
$dbname = "mana movies";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query the database and return data as JSON
$sql = "SELECT name FROM your_table_name";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    echo json_encode($data);
} else {
    echo "No data found.";
}

$conn->close();
?>
