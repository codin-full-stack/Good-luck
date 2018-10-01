<?php include 'config.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Mindaugas</title>
    <link rel="stylesheet" type="text/css" href="styless.css">
</head>
<body>
<?php 
    if(isset($_SESSION['id'])){
        echo 'Logged in with: ' . $_SESSION['id'] . '<br>';
    }

    include 'menu.php';
?>
