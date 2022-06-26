<?php 
require "../functions.php";

$id = $_GET["id"];

if (hapusCostumer($id) > 0) {
    echo "
        <script>
            document.location.href = 'data-costumer.php';
        </script>
    ";
} else {
    echo "
        <script>
            document.location.href = 'data-costumer.php';
        </script>
    ";
}

?>