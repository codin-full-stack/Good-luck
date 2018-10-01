<?php
include 'header.php';


var_dump($_GET);
var_dump($_GET['id']);

if (!empty($_GET && !empty($_GET['id']))){

    $postID = $_GET['id'];
    $sql = "select * from posts where id='$postID' ";

    var_dump($sql);

    $result = $con->query($sql);

    
    while ($post = $result->fetch_assoc()){

        echo "<div class='post-box'>";
            echo 'Autorius-' . $post['user_id'] . '<br>';
            echo '<strong>' . $post['title'] . '</strong>' . '<br>';
            echo $post['content'] . '<br>' . '<br>';
            echo '<a href="post_edit.php?id='.$post['id'].'">EDIT</a> &nbsp&nbsp&nbsp';
            echo '<a href="post_delete.php?id='.$post['id'].'">DELETE POST</a>';          
        echo "</div>";
    }    
}
?>

<input type="button" value="Back" onclick="location.href='feed.php'" />
