<?php
include 'header.php';
?>

<div class="profileInfo">
<?php
if (isset($_SESSION['id'])){
    $sql = "select * from users where id='".$_SESSION['id']."' ";
    
    // var_dump($sql);

    $result = $con->query($sql);
    $user = $result->fetch_assoc(); 

    // var_dump($user);

    if(!empty($user)){
        unset($user['password']);?>
        <img src="<?= $user['picture']?>"  height="250" width="332"> <br>
        <?php
        unset($user['picture']);

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
</div>

<?php
// include 'footer.php';
?>