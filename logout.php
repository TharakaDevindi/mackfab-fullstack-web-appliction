<?php
include('C:\wamp64\www\MackFab_Industries\connection.php');
include('C:\wamp64\www\MackFab_Industries\functions.php');
session_start();
unset($_SESSION['USER_LOGIN']);
unset($_SESSION['USER_ID']);
unset($_SESSION['USER_NAME']);
header('location:index.php');
die();
?>