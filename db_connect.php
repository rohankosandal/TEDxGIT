<?php
$connection = mysqli_connect("localhost", "root", "","tedxklsgit"); // Establishing Connection with Server


// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>
