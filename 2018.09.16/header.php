<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="styless.css">

<?php 
    if(isset($_SESSION['vardas'])){
    echo 'Logged in as: ' . $_SESSION['vardas'] . '<br>';
    }
?>

<?php
    include 'menu.php'
?>

<meta charset="utf-8" />
    
    <title>Mindaugas</title>

    <link rel="stylesheet" type="text/css" href="styless.css">

</head>

<body>