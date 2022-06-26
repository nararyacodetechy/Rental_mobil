<?php 
require "../functions.php";

$id = $_GET["id"];

if (hapusMobil($id) > 0) {
    echo "
        <script>
            document.location.href = 'data-mobil.php';
        </script>
    ";
} else {
    echo "
        <script>
            document.location.href = 'data-mobil.php';
        </script>
    ";
}

?>