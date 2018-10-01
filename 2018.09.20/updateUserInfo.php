<?php
include 'header.php';
include 'config.php';
?>

<?php include 'form3.php'; ?>

<?php

/** issitraukti prisijungusio userio info ir panaudoti ID */

$name = $_POST['name'];
$lastname = $_POST['pavarde'];
$email = $_POST['email'];
$password = $_POST['pass1'];
$amzius = $_POST['amzius'];
$gender = $_POST['lytis'];
$city = $_POST['miestai'];


/** nustatyti kad esancias reiksmes keistu pagal prisijungusio userio ID */
$sql = "UPDATE user_info SET name = '$name', lastname = '$lastname', email = '$email', password = '$password', amzius = '$amzius', gender = '$gender', city = '$city' WHERE username = '$sessions'";
$result= mysql_query($sql);

?>

<?php
include 'footer.php';
?>