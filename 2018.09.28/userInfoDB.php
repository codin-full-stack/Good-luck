<?php
include 'header.php';
?>

<?php

if (isset($_SESSION['id'])){
    $sql = "select * from users where id='".$_SESSION['id']."' ";
    
    // var_dump($sql);

    $result = $con->query($sql);
    $user = $result->fetch_assoc(); 

    // var_dump($user);

    if(!empty($user)){
        unset($user['password']);
        foreach ($user as $key => $value) {
            echo $key . ': ' . $value . '<br>';
        }    
    }
?>
    
<input type="button" value="Update Profile Info" onclick="location.href='updateUserInfo.php'" />
<input type="button" value="Change password" onclick="location.href='passChange.php'" />

<?php
} else {
    echo 'Norint perziureti informacija, butina prisijungti!';
}
?>


<?php
include 'footer.php';
?>