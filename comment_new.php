<?php
include 'header.php';

var_dump($_GET);
var_dump($_GET['id']);


if (isset($_SESSION['id'])){?>

    <form action="" method="POST">
 
    Jusu komentaras:
    
    <br>
    
    <textarea name="komentaras" cols=50 rows=7>
    
    </textarea>
    
    <br>
    
    <input type="submit" value="Komentuoti">
    
    </form>

 <?php

    if(!empty($_POST)){
        $user_id = $_SESSION['id'];
        
        $post_id = $_GET['id'];
        
        $comment = $_POST['komentaras'];
        
    
        $sql = "insert into comments (post_id, user_id, comment)
        values ('$post_id', '$user_id', '$comment')";
    
        // var_dump($sql);
    
        if(!mysqli_query($con, $sql)){
            echo 'not inserted';
        } else {
            echo 'Komentaras irasytas';
        }
    } 
?>

<?php
 } else {
     echo 'Norint rasyti komentara reikia prisijungti';
 }
 
 
 
 
 include 'footer.php';
 ?>