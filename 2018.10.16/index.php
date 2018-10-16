<?php 
include 'header.php';
?>

<!-- <script>
setTimeout(() => window(myFunction()), 1500);
</script> -->
<?php
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
        
        <div class="content-box" style="background-image: url('<?php echo "$post[picture]"; ?>');">
            <a href="post.php?id=<?php echo $post['id']; ?>">
            <div class="content-title">
                <?php echo $post['title']; ?>
            </div>
            </a>
        </div>
        
    <?php } ?>
</div>

<?php 
include 'footer.php'
?>
