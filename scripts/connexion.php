<?php
session_start();

$_SESSION['username'] = $_POST['username'];
header('Location: '. $_SERVER['HTTP_REFERER'] .'');
exit;

//var_dump($_SERVER);