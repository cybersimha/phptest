<?php
$conn = mysqli_init();
$connString = getenv('MYSQL_CONN_STRING');

echo $connString;

?>
