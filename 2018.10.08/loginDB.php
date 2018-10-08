<?php
include 'header.php';
?>

<body>
        
    <div class="form"> 
        <!-- VISA FORMA -->
        <div class="topbox">
            <div class="login">
                <a href="loginDB.php" class="button1">Log in</a>
            </div>

            <div class="register">
                <a href="registration.php" class="button2">Register</a>
            </div>                
        </div>

        
        <div class="infobox">
            <!-- langas su visais laukeliais ir mygtukais -->

            <div class="email">
                <!-- emailo blokas -->
                <form action="" method="POST">                    
                        <label for="email">
                            EMAIL
                        </label>
                        <br>
                        <input class="field" type="text" id="email" name="email" >                                
            </div>

            <div class="pass">
                <!-- slaptazodzio blokas -->
                    <label for="pass">
                        PASSWORD
                    </label>
                    <br>
                    <input class="field" type="password" id="loginpass" name="loginpass">
            </div>
            <div class="bottom">
                <!-- Apatiniai mygtukai -->
                <div class="forgot">
                    <a href="#">Forgot password?</a>
                </div>
                <div class="signin">
                <input type="submit" class="button3" name="button3" value="Log in">
                </div>
                </form>                
            </div>   
        </div>

    </div>
</body>

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
        
        $_SESSION['id'] = $user['id'];

        header('Location: userInfoDB.php');
        exit;
       
    } else {
        echo 'Blogas slaptazodis';
    }
}


// include 'footer.php';
?>