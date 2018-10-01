<?php
include 'header.php';



$sql = "select * from posts";
$result = $con->query($sql);



while ($post = $result->fetch_assoc()){
   
    $userid = $post['user_id'];
    $sql2 = "select * from users where id='$userid'";
    $result2 = $con->query($sql2);
    $post1 = $result2->fetch_assoc();
    // var_dump($post1);

    var_dump($post['id']);

    echo "<div class='post-box'>";
        echo 'Autorius - ' . $post1['name'] . '&nbsp' . $post1['lastname'] . '<br>';
        echo '<strong>' . $post['title'] . '</strong>' . '<br>';
        echo substr($post['content'], 0, 80 ) . '...' . '<br>' . '<br>';        
        if(strlen($post['content']) > 79){
            echo '<a href="post.php?id='.$post['id'].'">READ MORE</a> &nbsp&nbsp&nbsp';
        }        
        echo '<a href="post_edit.php?id='.$post['id'].'">EDIT</a> &nbsp&nbsp&nbsp';
        echo '<a href="post_delete.php?id='.$post['id'].'">DELETE POST</a>';          
    echo "</div>";
}

?>

<input type="button" value="Back" onclick="location.href='index.php'" />

<?php
include 'footer.php';
?>