<?php
include 'header.php';



$sql = "select * from posts";
$result = $con->query($sql);



while ($post = $result->fetch_assoc()){
   
    $userid = $post['user_id'];
    $sqlUsers = "select * from users where id='$userid'";
    $resultUsers = $con->query($sqlUsers);
    $postUsers = $resultUsers->fetch_assoc();
    // var_dump($postUsers);

    var_dump($post['id']);

    if(isset($_SESSION['id'])){        
            echo "<div class='post-box'>";
                echo 'Autorius - ' . $postUsers['name'] . '&nbsp' . $postUsers['lastname'] . '<br>';
                echo '<strong>' . $post['title'] . '</strong>' . '<br>';
                echo substr($post['content'], 0, 80 ) . '...' . '<br>' . '<br>';        
                if(strlen($post['content']) > 79){
                    echo '<a href="post.php?id='.$post['id'].'">READ MORE</a> &nbsp&nbsp&nbsp';
                }     
                if($_SESSION['id'] == $userid){   
                    echo '<a href="post_edit.php?id='.$post['id'].'">EDIT</a> &nbsp&nbsp&nbsp';
                    echo '<a href="post_delete.php?id='.$post['id'].'">DELETE POST</a> &nbsp&nbsp&nbsp';
                }   
                echo '<a href="comment_new.php?id='.$post['id'].'">Komentuoti</a> &nbsp&nbsp&nbsp';
                echo '<a href="post.php?id='.$post['id'].'">Komentarai</a>';       
            echo "</div>";        
    } else {
        echo "<div class='post-box'>";
            echo 'Autorius - ' . $postUsers['name'] . '&nbsp' . $postUsers['lastname'] . '<br>';
            echo '<strong>' . $post['title'] . '</strong>' . '<br>';
            echo substr($post['content'], 0, 80 ) . '...' . '<br>' . '<br>';        
            if(strlen($post['content']) > 79){
                echo '<a href="post.php?id='.$post['id'].'">READ MORE</a> &nbsp&nbsp&nbsp';
            }        
            echo '<a href="post.php?id='.$post['id'].'">Komentarai</a>';       
        echo "</div>";
    }
}

?>

<input type="button" value="Back" onclick="location.href='index.php'" />

<?php
include 'footer.php';
?>