<?php
session_start();

if($_SESSION['id_usuario'] == '' || $_SESSION['id_usuario'] == 'Cliente' ){
    echo "<script>window.location='../index.php';</script>";
}
?>

