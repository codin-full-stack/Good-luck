<?php
include 'header.php';


if (!empty($_GET && !empty($_GET['id']))){

    $postoID = $_GET['id'];
    $sqlComment = "select * from comments where post_id='$postoID' ";

    var_dump($sqlComment);
    
    
    $resultComment = $con->query($sqlComment);
    $postComment = $resultComment->fetch_assoc();

    var_dump($postComment);

    $commentId = $postComment['id'];
   
    if($postComment['user_id'] == $_SESSION['id']){

        $sqlComment = "DELETE FROM comments WHERE id='$commentId'";
        $postComment = mysqli_query($con, $sqlComment);

        echo 'Komentaras istrintas';
        
    } else {
        echo 'Jus negalite trinti sio komentaro';
    }    
}
?>

<input type="button" value="Back" onclick="location.href='feed.php'" />

<?php
include 'footer.php';
?>