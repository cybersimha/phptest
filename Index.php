<?php
$conn = mysqli_init();
mysqli_ssl_set($conn, NULL, NULL, NULL, NULL, NULL); // Enable SSL
$conn = mysqli_real_connect($conn, "mydatabasetest.mysql.database.azure.com", "mysqldbadmin", "P@ssword1234", "mydatabase", 3306, MYSQLI_CLIENT_SSL);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
	echo "connection successful";
    // Code to interact with your database
}

?>
