<?php
include 'header.php';

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
        
        $_SESSION['id'] = $user['id'];

        header('Location: userInfoDB.php');
        exit;
    } else {
        echo 'Blogas slaptazodis';
    }
}

include 'loginform.php';

include 'footer.php';
?>