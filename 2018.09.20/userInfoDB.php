<?php
include 'header.php';
?>

<?php

if (isset($_SESSION['email'])){
    $email = $_SESSION['email'];
    $sql = "select * from users where email='$email' ";
    
    // var_dump($sql);

    $result = $con->query($sql);
    $user = $result->fetch_assoc(); 

    // var_dump($user);

    if(!empty($user)){
        foreach ($user as $key => $value) {
            echo $key . ': ' . $value . '<br>';
        }    
    }
?>
    
<input type="button" value="Update Profile Info" onclick="location.href='updateUserInfo.php'" />

<?php
} else {
    echo 'Norint perziureti informacija, butina prisijungti!';
}
?>


<?php
include 'footer.php';
?>