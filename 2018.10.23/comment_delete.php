<?php
include 'header.php';

var_dump($_GET);


if (!empty($_GET && !empty($_GET['id']))){

    $commentID = $_GET['id'];
    $sqlComment = "select * from comments where id='$commentID' limit 1";       
    
    $resultComment = $con->query($sqlComment);
    $postComment = $resultComment->fetch_assoc();
    var_dump($postComment); 

    if($postComment['user_id'] == $_SESSION['id']){

        $sqlComment = "DELETE FROM comments WHERE id='$commentID'";
        $postComment = mysqli_query($con, $sqlComment);
    
        echo 'Komentaras istrintas';
    
    }
}

?>

<input type="button" value="Back" onclick="location.href='feed.php'" />

<?php
include 'footer.php';
?>