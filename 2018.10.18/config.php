<?php
session_start();

/** Prisijungimas prie duomenu bazes */

$user = 'root';
$pass = '';
$db = 'mindaugas_m';

$con = mysqli_connect('localhost', $user, $pass, $db);

if (!$con){
    echo 'error';
}
?>