<?php
include 'header.php';
// echo 'DAR NEVEIKIA';
?>


<div class='paieska'>

    <form action="searchPosts.php" method="GET">
            
        <label for="name">
            Ieskomas straipsnis:
        </label>
        <input class="field" type="text" id="name" name="keyword" >        
        
        <br>
        
        <input type="submit" class="button" value="Find">
        <a href='index.php'>Back</a>
</div>


<?php
include 'footer.php';
?>