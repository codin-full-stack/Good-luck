<?php
include 'header.php';
?>

<div class='passchange'>
    <form action="" method="POST">
        <label for="name">
            Senas slaptazodis:
        </label>
        <input class="field" type="password" name="oldpass" >        
        
        <br>
        
        <label for="pavarde">
            Naujas slaptazodis:
        </label>
        <input class="field" type="password" name="newpass1" >    

        <br>

        <label for="pavarde">
            Pakarotkite nauja slaptazodi:
        </label>
        <input class="field" type="password" name="newpass2" >    

        <br>

        <div class="buttons">
        <input type="reset" value='Reset'>
        <input type="submit" name="submit" value="Change">
        <a href='userInfoDB.php'>Back</a>
        </div>
        
    </form>
</div>

<?php

$sql = "select * from users where id='".$_SESSION['id']."' ";
    
$result = $con->query($sql);
$user = $result->fetch_assoc(); 

if (isset($_POST['submit'])){    
    if ($user['password'] == md5($_POST['oldpass'])){
        if (md5($_POST['newpass1']) == md5($_POST['newpass2'])){
            $sql = "UPDATE users SET password = '" . md5($_POST['newpass1']) . "' where id = '" . $user['id'] . "'";
            $result = mysqli_query($con, $sql);
            echo 'Slaptazodis atnaujintas';
        } else {
            echo 'Nauji slaptazodziai nesutampa';
        }
    } else {
        echo 'Blogas senas slaptazodis';
    }
}
?>