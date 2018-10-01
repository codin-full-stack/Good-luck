<?php session_start(); ?>
<link rel="stylesheet" type="text/css" href="styless.css">

<div class='login'>

    <form action="" method="POST">
                
        <label for="name">
            Jūsų vardas:
        </label>
        <input class="field" type="text" id="name" name="name" >        
        
        <br>
        
        <label for="pavarde">
            Jūsų slaptazodis:
        </label>
        <input class="field" type="password" id="pavarde" name="pass" >
        
        <br>

        <input type="submit" class="button" value="Submit" > 
        <a href='index.php'>Back</a> 

</div>

<?php

if(!empty($_POST)){
    $_SESSION = [
        'vardas'   => $_POST['name'],
        'password' => $_POST['pass'],
    ];
    var_dump($_SESSION);
}





?>