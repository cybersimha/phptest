<?php
$conn = mysqli_init();
$connString = getenv('MYSQL_CONN_STRING');

echo $connString;

// Use $connString to connect to your MySQL database
$conn = new mysqli($connString);



if (mysqli_connect_errno()) {
    echo "*******Failed to connect to MySQL: " . mysqli_connect_error();
} else {
	echo "connection successful";
    // Code to interact with your database
}

?>
