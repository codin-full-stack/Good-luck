<?php
include 'header.php';

var_dump($_GET);
var_dump($_GET['id']);



if (!empty($_GET && !empty($_GET['id']))){

    $postID = $_GET['id'];
    $sql = "select * from posts where id='$postID' ";

    var_dump($sql);

    $result = $con->query($sql);
    $post = $result->fetch_assoc();

    var_dump($post);
        /** parasyti patikrinima ar tikrai nori istrinti posta */
    exit;
    if($post['user_id'] == $_SESSION['id']){
        $sql = "DELETE FROM posts WHERE id='$postID'";
        var_dump($sql);
        $post = mysqli_query($con, $sql);
        echo 'Postas istrintas';
        
    } else {
        echo 'Jus negalite trinti sio posto';
    }    
}












include 'footer.php';
?>