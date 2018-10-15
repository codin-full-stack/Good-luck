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

                /** COMMENT COUNT */
                $sqlCom = "SELECT count(post_id) AS total FROM comments WHERE post_id='".$posts['id']."'";
                $resultCom = mysqli_query($con, $sqlCom);
                $values = $resultCom->fetch_assoc();
                $num_com = $values['total'];
                /**__________________ */
            ?>
            
            <div class="user-post-box">
                <div class="user-post-pic">
                <img src="<?= $posts['picture']?>">                
                </div>
            
                <div class="info-box">
                    
                <div class="user-content-title">
                    <?php echo 'ANTRASTE: ' . '<br>' . $posts['title']; ?>
                </div> 

                <div class="user-post-content">
                    <?php echo substr($posts['content'], 0, 220); ?>
                </div>
                
                </div>
                
                <div class="post-buttons">
                    <?php
                        echo '<a href="post_edit.php?id='.$posts['id'].'">EDIT POST</a> &nbsp&nbsp&nbsp  <br>';
                        echo '<a href="post_delete.php?id='.$posts['id'].'">DELETE POST</a> &nbsp&nbsp&nbsp  <br>';
                        if($num_com == 0){
                            echo $num_com . '&nbsp&nbsp&nbsp Komentaru';
                        } else {
                            if($num_com == 1){
                                echo $num_com . '&nbsp&nbsp&nbsp Komenataras';
                            } else {
                                if($num_com < 10){
                                    echo $num_com . '&nbsp&nbsp&nbsp Komentarai';
                                } else {
                                    echo $num_com . '&nbsp&nbsp&nbsp Komentaru';
                                }    
                            }    
                        }
                    ?>
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
include 'footer.php';
?>