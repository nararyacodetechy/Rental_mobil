<?php 
require "../functions.php";

$id = $_GET["id"];

if (hapusCostumer($id) > 0) {
    echo "
        <script>
            alert('Data Berhasil Dihapus!');
            document.location.href = 'data-costumer.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Data Gagal Dihapus!');
            document.location.href = 'data-costumer.php';
        </script>
    ";
}

?>