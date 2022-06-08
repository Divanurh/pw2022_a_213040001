<?php 

require'function.php';

if(delete($_GET["id"])) {
    echo "<script>
        alert('data berhasil dihapus') ;
        document.location.href='students.php';</script>";
}