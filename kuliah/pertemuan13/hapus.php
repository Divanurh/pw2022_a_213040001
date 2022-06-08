<?php 

require'functions.php';

if(hapus ($_GET["id"])) {
    echo "<script>
        alert('data berhasil dihapus') ;
        document.location.href='index.php';</script>";
}