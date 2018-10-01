<?php

$_POST['password'] = md5($_POST['password']);

$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$amzius = $_POST['amzius'];
$gender = $_POST['gender'];
$city = $_POST['city'];


$sql = "insert into users (name, lastname, email, password, amzius, gender, city)
values ('$name', '$lastname', '$email', '$password', '$amzius', '$gender', '$city')";

if(!mysqli_query($con, $sql)){
    echo 'not inserted';
} else {
    echo 'inserted';
}

header('refresh:2; account.php');

?>
