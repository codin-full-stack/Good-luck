<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="styless.css">

<?php 
    if(isset($_SESSION['email'])){
    echo 'Logged in with: ' . $_SESSION['email'] . '<br>';
    }
?>

<?php
    include 'menu.php';
    include 'config.php';
?>

<meta charset="utf-8" />
    
    <title>Mindaugas</title>

    <link rel="stylesheet" type="text/css" href="styless.css">

</head>

<body>