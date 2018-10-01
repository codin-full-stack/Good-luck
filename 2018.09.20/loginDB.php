<?php
include 'header.php';
include 'loginform.php';
include 'config.php';
?>

<?php

if (!empty($_POST)){
    $email = $_POST['email'];
    $sql = "select * from users where email='$email' ";

    var_dump($sql);

    $result = $con->query($sql);
    $user = $result->fetch_assoc();

    var_dump($user);

    $loginpass = md5($_POST['loginpass']);

    var_dump($loginpass);
    
    if ($loginpass == $user['password']){
        
        $_SESSION = [
            'email'   => $user['email']
        ];

        // header('refresh:1.5; location: userInfo.php');
    } else {
        echo 'Blogas slaptazodis';
    }
} else {
    echo 'Uzpildykite visus laukus';
}
?>

<?php
include 'footer.php';
?>