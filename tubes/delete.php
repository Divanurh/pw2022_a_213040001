<?php 
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require'function.php';

if(delete($_GET["id"])) {
    echo "<script>
        alert('data berhasil dihapus') ;
        document.location.href='students.php';</script>";
}