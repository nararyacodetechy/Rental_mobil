<?php 
require "../functions.php";

$id = $_GET["id"];

if (hapusOrder($id) > 0) { 
    echo "
        <script>
            document.location.href = 'data-order.php';
        </script>
    ";
} else {
    echo "
        <script>
            document.location.href = 'data-order.php';
        </script>
    ";
}

?>