<?php

/** duomenu paemimas is duomenu bazes pagal emaila */

include 'config.php';
include 'header.php';

if (!empty($_POST['email'])){
    $email = $_POST['email'];
    $sql = "select * from users where email='$email' ";
    
    var_dump($sql);

    $result = $con->query($sql);
    $user = $result->fetch_assoc(); 

    var_dump($user);

    if(!empty($user)){
        foreach ($user as $key => $value) {
            echo $key . ': ' . $value . '<br>';
        }    
    } else {
        echo 'Toks el. pastas sistemoje neregistruotas';
    }
}
?>
<br>
<a href='searchformDB.php'>Back</a>