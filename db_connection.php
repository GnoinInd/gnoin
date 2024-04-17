<?php
$host = "localhost";
$username = "gnoin";
$password = "Gnoin2023";
$database = "gnoin";
$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
