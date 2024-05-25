<?php
$servername = "localhost";
$username = "mydbuser1"; // Use your username if created
$password = "P@ssword1234"; // Replace with your password
$dbname = "mydatabase";

//
$connString = getenv('MYSQL_CONN_STRING');

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
$conn = new mysqli($connString);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define the SQL query to select a record (modify to select specific columns)
$sql = "SELECT * FROM users LIMIT 1"; // LIMIT 1 fetches only the first record

$result = $conn->query($sql);

// Check if any results were found
if ($result->num_rows > 0) {
    // Fetch the first row (as an associative array)
    $row = $result->fetch_assoc();

    // Display the retrieved data (modify to display specific columns)
    echo "<h3>Record from database:</h3>";
    echo "<p>Name: " . $row["name"] . "</p>";
    echo "<p>Email: " . $row["email"] . "</p>";
} else {
    echo "No records found in the database.";
}

$conn->close();
?>
