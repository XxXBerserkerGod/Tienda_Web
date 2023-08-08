<?php 
session_start();

unset($_SESSION['loged']);
unset($_SESSION['usuario']);
unset($_SESSION['tipo']);

header('location:../index.php');
?>