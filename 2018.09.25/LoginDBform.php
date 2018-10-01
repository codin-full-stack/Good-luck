<?php
/** PRISIJUNGIMO FORMA SU SLAPTAZODZIU I DUOMENU BAZE*/
?>

<div class='login'>

<form action="loginDB.php" method="POST">
    
    <label for="name">
        El. pastas:
    </label>
    <input class="field" type="text" name="email" >        
    
    <br>
    
    <label for="pavarde">
        Slaptazodis:
    </label>
    <input class="field" type="password" id="pavarde" name="loginpass" >    

    <br>
            
    <input type="reset" value='Reset'>
    <input type="submit" class="button" value="Log in">
    <a href='index.php'>Back</a>
</div>