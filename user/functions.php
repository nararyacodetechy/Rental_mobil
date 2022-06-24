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

function tambah ($data) {
    global $conn;

    $namaCostumer = htmlspecialchars($data["nama-costumer"]);
    $alamatCostumer = htmlspecialchars($data["alamat-costumer"]);
    $nomerTelepon = htmlspecialchars($data["nomer-telepon"]);
    $jenisKelamin = htmlspecialchars($data["jenis-kelamin"]);

    $insert = "INSERT INTO tb_costumer VALUES ('', '$namaCostumer', '$alamatCostumer', '$nomerTelepon', '$jenisKelamin')";
    
    mysqli_query($conn, $insert);

    return mysqli_affected_rows($conn);
}

?>

