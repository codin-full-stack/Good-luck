<?php
include 'header.php';

var_dump($_GET);

if (!empty($_GET && !empty($_GET['id']))){

    $commentID = $_GET['id'];
    $sqlComment = "select * from comments where id='$commentID' ";   
    
    $resultComment = $con->query($sqlComment);
    $postComment = $resultComment->fetch_assoc();
   
    var_dump($postComment);
    
    if($postComment['user_id'] == $_SESSION['id']){

        ?>

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
            $sqlComment = "UPDATE comments SET comment = '". $_POST['komentaras']."' WHERE id='$commentID'";

            $postComment = mysqli_query($con, $sqlComment);

            echo 'Komentaras redaguotas';
        }
    } else {
        echo 'Jus negalite redaguoti sio komentaro';
    }    
}
?>

<input type="button" value="Back" onclick="location.href='feed.php'" />

<?php
include 'footer.php';
?>