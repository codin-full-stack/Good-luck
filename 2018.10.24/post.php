<?php
include 'header.php';


// var_dump($_GET);
// var_dump($_GET['id']);


if (!empty($_GET && !empty($_GET['id']))){
?>
<div class="content-post">
    <?php
        $postID = $_GET['id'];
        $sqlPosts = "select * from posts where id='$postID' limit 1";
        // var_dump($sql);
        $resultPosts = $con->query($sqlPosts);
        $post = $resultPosts->fetch_assoc();
        

        $userId = $post['user_id'];
        $sqlUsers = "select * from users where id='$userId'";
        $resultUsers = $con->query($sqlUsers);
        $postUsers = $resultUsers->fetch_assoc();
        // var_dump($post1);
    ?>
    <div class="content-post-box">
        <div class="content-post-pic">
            <img src="<?= $post['picture']?>" alt="monkey">
        </div>
        <div class="content-title-post">
            <?php echo '<strong>' . $post['title'] . '</strong>';?>
        </div><?php
        echo "<div class='post-box'>";
            echo 'Autorius - ' . $postUsers['name'] . '&nbsp' . $postUsers['lastname'] . '<br>' . '<br>';
            echo $post['content'] . '<br>' . '<br>';
            if(isset($_SESSION['id'])){
                echo '<a href="comment_new.php?id='.$post['id'].'">Komentuoti</a>';
            }          
        echo "</div>";


        /**__________ KOMENTARAI _____________ */
        
        $postID = $_GET['id'];
        $sqlComment = "select * from comments where post_id='$postID' ";
        $result = $con->query($sqlComment);        

        /** Komentaru atvaizdavimas */
        echo '<strong> Komentarai </strong>' . '<br>' . '<br>';
        while ($postComment = $result->fetch_assoc()){

            /** Komentuojancio userio info */
            $userioID = $postComment['user_id'];
            $sqlUser = "select * from users where id='$userioID'";
            $resultUser = $con->query($sqlUser);
            $userInfo = $resultUser->fetch_assoc();
                        
            echo "<div class='comment-box'>";
                echo '<strong>' . $userInfo['name'] . ' ' . $userInfo['lastname']  . ' Sako: ' . '</strong>' . '<br>';
                echo $postComment['comment'] . '<br>';
                if(isset($_SESSION['id'])){
                    if($_SESSION['id'] == $userioID){
                        echo '<a href="comment_edit.php?id='.$postComment['id'].'">EDIT Comment</a> &nbsp&nbsp&nbsp';
                        echo '<a href="comment_delete.php?id='.$postComment['id'].'">DELETE Comment</a> &nbsp&nbsp&nbsp';   
                    }
                }
            echo "</div>";
        }      
    }
    ?>

<input type="button" value="Back" onclick="location.href='index.php'" />
