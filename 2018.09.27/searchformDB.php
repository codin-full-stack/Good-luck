<?php
include 'header.php';
?>

<div class='paieska'>

    <form action="searchDB.php" method="POST">
            
        <label for="name">
            Iveskite el. pasta:
        </label>
        <input class="field" type="text" id="name" name="email" >        
        
        <br>
        
        <input type="submit" class="button" value="Find">
        <a href='index.php'>Back</a>
</div>


<?php
include 'footer.php';
?>