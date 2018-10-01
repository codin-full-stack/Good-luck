<?php
include 'header.php';

if(isset($_GET['keyword'])){
   
    $keyword = $_GET['keyword'];

    $sql = "SELECT title FROM posts WHERE title like '%{$keyword}%'";
    var_dump($sql);
    $result = $con->query($sql);
    $postai = $result->fetch_assoc(); 
    var_dump($postai);

    $sqlid = "SELECT * FROM posts WHERE title like '%{$keyword}%'";
    $resultid = $con->query($sqlid);
    $postaiid = $resultid->fetch_assoc(); 
    var_dump($postaiid['id']);
    
    if(!empty($postai)){

        $postID = $postaiid['id'];
        $sqlPosts = "select * from posts where id='$postID' limit 1";
        // var_dump($sql);
        $resultPosts = $con->query($sqlPosts);
        $post = $resultPosts->fetch_assoc();
        
    
        $userId = $post['user_id'];
        $sqlUsers = "select * from users where id='$userId'";
        $resultUsers = $con->query($sqlUsers);
        $postUsers = $resultUsers->fetch_assoc();
    
        echo "<div class='post-box'>";
        echo 'Autorius - ' . $postUsers['name'] . '&nbsp' . $postUsers['lastname'] . '<br>' . '<br>';
        echo '<strong>' . $post['title'] . '</strong>' . '<br>' . '<br>';
        echo $post['content'] . '<br>' . '<br>';
        if(isset($_SESSION['id'])){
            if($_SESSION['id'] == $userId){
                echo '<a href="post_edit.php?id='.$post['id'].'">EDIT</a> &nbsp&nbsp&nbsp';
                echo '<a href="post_delete.php?id='.$post['id'].'">DELETE POST</a> &nbsp&nbsp&nbsp';
            }
            echo '<a href="comment_new.php?id='.$post['id'].'">Komentuoti</a>';
        }          
    echo "</div>";

    }
}
?>