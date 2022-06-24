<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_rental_mobil";
 
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
 
// Check connection
// if ($conn->connect_error) {
//  die("Connection failed: " . $conn->connect_error);
// } else {
//     echo "Connection Succes!";
// }
function query ($conn, $query) {
    // global $conn;  

    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
?>

