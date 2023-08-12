<?php
session_start();
if ($_SESSION['loged'] != 1) {
    header('location:../index.php');
}
