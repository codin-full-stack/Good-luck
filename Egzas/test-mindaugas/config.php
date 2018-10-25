<?php
session_start();

/** Prisijungimas prie duomenu bazes */

$user = 'root';
$pass = '';
$db = 'mindtest';

$con = mysqli_connect('localhost', $user, $pass, $db);

if (!$con){
    echo 'error';
}
?>





