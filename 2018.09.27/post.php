<?php
include 'header.php';


var_dump($_GET);
var_dump($_GET['id']);


if (!empty($_GET && !empty($_GET['id']))){

    $postID = $_GET['id'];
    $sqlPosts = "select * from posts where id='$postID' ";
    // var_dump($sql);
    $resultPosts = $con->query($sqlPosts);
    
    while ($post = $resultPosts->fetch_assoc()){
        
        $userId = $post['user_id'];
        $sqlUsers = "select * from users where id='$userId'";
        $resultUsers = $con->query($sqlUsers);
        $postUsers = $resultUsers->fetch_assoc();
        // var_dump($post1);

        /** Posto atvaizdavimas */
        echo "<div class='post-box'>";
            echo 'Autorius - ' . $postUsers['name'] . '&nbsp' . $postUsers['lastname'] . '<br>' . '<br>';
            echo '<strong>' . $post['title'] . '</strong>' . '<br>' . '<br>';
            echo $post['content'] . '<br>' . '<br>';
            echo '<a href="post_edit.php?id='.$post['id'].'">EDIT</a> &nbsp&nbsp&nbsp';
            echo '<a href="post_delete.php?id='.$post['id'].'">DELETE POST</a> &nbsp&nbsp&nbsp';
            echo '<a href="comment_new.php?id='.$post['id'].'">Komentuoti</a>';       
          
        echo "</div>";


        /**__________ KOMENTARAI _____________ */
        
        $postID = $_GET['id'];
        $sqlComment = "select * from comments where post_id='$postID' ";
        $result = $con->query($sqlComment);        

        /** Komentaru atvaizdavimas */
        echo '<strong> Komentarai </strong>';
        while ($postComment = $result->fetch_assoc()){

            /** Komentuojancio userio info */
            $userioID = $postComment['user_id'];
            $sqlUser = "select * from users where id='$userioID'";
            $resultUser = $con->query($sqlUser);
            $userInfo = $resultUser->fetch_assoc();
                      
            echo "<div class='comment-box'>";
                echo $userInfo['name'] . ' ' . $userInfo['lastname']  . ' Sako: ' . '<br>';
                echo $postComment['comment'] . '<br>';
                if($_SESSION['id'] == $userioID){
                    echo '<a href="comment_edit.php?id='.$post['id'].'">EDIT Comment</a> &nbsp&nbsp&nbsp';
                    echo '<a href="comment_delete.php?id='.$post['id'].'">DELETE Comment</a> &nbsp&nbsp&nbsp';   
                }
            echo "</div>";
        }    
    }    
}
?>

<input type="button" value="Back" onclick="location.href='feed.php'" />
