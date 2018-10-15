<?php
include 'header.php';

// var_dump($_GET);
// var_dump($_GET['id']);
?>

<div class="profileInfo">

    <?php
        $sql = "select * from users where id='".$_GET['id']."' ";
        
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

</div>
