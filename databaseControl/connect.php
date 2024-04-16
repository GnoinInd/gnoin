<?php 
// $conn = mysqli_connect("localhost", "root", "", "gnoin");
$conn = mysqli_connect("localhost","gnoin","Gnoin2023","gnoin");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>



<!-- //server connection
$conn = mysqli_connect("localhost","root","","gnoin");
// $conn = mysqli_connect("localhost","gnoin","Gnoin2023","gnoin");


// Create connection
//$conn = mysqli_connect("localhost","root","","gnoin");

// Check the connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} -->
