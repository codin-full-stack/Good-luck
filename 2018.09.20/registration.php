<head>
<link rel="stylesheet" type="text/css" href="styless.css">
</head>
<?php
    include 'menu.php';
    include 'config.php';
    // include 'header.php';
?>
<div class="registration">
    <?php include 'form2.php'; ?>
</div>

<?php  
/** REGISTRACIJA SU SLAPTAZODZIU DUOMENU BAZEJE */
if (!empty ($_POST)) {
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];

    
    if ($pass1 == $pass2){

        unset($_POST['pass2']);
        
        $_POST['pass1'] = md5($_POST['pass1']);

        $name = $_POST['name'];
        $lastname = $_POST['pavarde'];
        $email = $_POST['email'];
        $password = $_POST['pass1'];
        $amzius = $_POST['amzius'];
        $gender = $_POST['lytis'];
        $city = $_POST['miestai'];


        $sql = "insert into users (name, lastname, email, password, amzius, city, gender )
        values ('$name', '$lastname', '$email', '$password', '$amzius', '$city', '$gender' )";

        var_dump($sql);

        if(!mysqli_query($con, $sql)){
            echo 'not inserted';
        } else {
            echo 'inserted';
        }

    } else {
        echo '<br>' . 'Slaptazodziai nesupamta';
    }
}
?>


<?php include 'footer.php'; ?>