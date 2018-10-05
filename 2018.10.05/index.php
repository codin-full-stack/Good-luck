<?php 
include 'header.php';

$sql = "select * from posts ORDER BY laikas desc limit 6";
$result = $con->query($sql);
?>
<div class="content">
    <?php while ($post = $result->fetch_assoc()){ ?>
        <?php 
            $userid = $post['user_id'];
            $sqlUsers = "select * from users where id='$userid' limit 1";
            $resultUsers = $con->query($sqlUsers);
            $postUsers = $resultUsers->fetch_assoc();
        ?>
        <div class="content-box">
            <div class="content-pic" style="background-image: url(<?php $post['picture'];?>);">
                <a href="post.php?id=<?php echo $post['id']; ?>">
                    <img src="<?= $post['picture']?>" alt="monkey">
                </a>
            </div>
            <div class="content-title">
                <?php echo $post['title']; ?>
            </div>
            <?php if(isset($_SESSION['id'])){ ?>
                <?php
                    if($_SESSION['id'] == $userid){   
                        echo '<a href="post_edit.php?id='.$post['id'].'">EDIT</a> &nbsp&nbsp&nbsp';
                        echo '<a href="post_delete.php?id='.$post['id'].'">DELETE POST</a> &nbsp&nbsp&nbsp';
                    }   
                ?>
                <a href="comment_new.php?id='.$post['id'].'">Komentuoti</a> &nbsp&nbsp&nbsp
            <?php } ?>
        </div>
    <?php } ?>
</div>

<?php 
// include 'footer.php'
?>
