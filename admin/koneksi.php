<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_rental_mobil";
 
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
 
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
} else {
    // echo "Connection Succes!";
}
?>
