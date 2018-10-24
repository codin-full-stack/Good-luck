<?php
include 'header.php';
include 'form4.php';
?>

<?php

$sql = "select * from users where id='".$_SESSION['id']."' ";    

$result = $con->query($sql);
$user = $result->fetch_assoc(); 

if ($user['password'] == md5($_POST['oldpass'])){
    if (md5($_POST['newpass1']) == md5($_POST['newpass2'])){
        $sql = "UPDATE users SET password = '" . md5($_POST['newpass1']) . "' where id = '" . $user['id'] . "'";
        $result = mysqli_query($con, $sql);
        echo 'Slaptazodis atnaujintas';
    } 
} 
?>