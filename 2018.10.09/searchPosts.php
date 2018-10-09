<?php
include 'header.php';
?>

<div class='paieska'>

    <form action="" method="GET">
            
        <label for="name">
            Ieskomas straipsnis:
        </label>
        <input class="field" type="text" id="name" name="keyword" >        
        
        <br>
        
        <input type="submit" class="button" value="Find">
        <a href='index.php'>Back</a>
</div>

<?php

if(isset($_GET['keyword'])){
    $keyword = $db->escape_string($_GET['keyword']);

    $query = $db->query("SELECT title FROM posts WHERE title like '%{$keyword}%'");

}

?>