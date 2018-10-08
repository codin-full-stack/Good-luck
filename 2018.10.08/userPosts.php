<?php
include 'header.php';
?>

<div class="userPosts">
    <?php
    if (isset($_SESSION['id'])){

        $sql = "select * from posts where user_id='".$_SESSION['id']."' ORDER BY laikas desc limit 6";
        $result = $con->query($sql);

        while ($posts = $result->fetch_assoc()){ ?>
            <?php 
                $userid = $posts['user_id'];
                $sqlUsers = "select * from users where id='$userid' limit 1";
                $resultUsers = $con->query($sqlUsers);
                $postUsers = $resultUsers->fetch_assoc();
            ?>
            
            <div class="user-post-box">
                <div class="user-post-pic">
                <img src="<?= $posts['picture']?>">
                </div>
                <a href="post.php?id=<?php echo $posts['id']; ?>">
                    <div class="user-content-title">
                        <?php echo $posts['title']; ?>
                    </div>
                </a>   
                             
                <div class="user-post-content">
                    <?php echo substr($posts['content'], 0, 220); ?>
                </div>
            </div>
        <?php
        }
    ?>
    
    <?php
    } else {
        echo 'Norint perziureti informacija, butina prisijungti!';
    }
    ?>
</div>

<?php
// include 'footer.php';
?>