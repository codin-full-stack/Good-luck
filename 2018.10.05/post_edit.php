<?php
include 'header.php';

var_dump($_GET);
var_dump($_GET['id']);

if (!empty($_GET && !empty($_GET['id']))){

    $postID = $_GET['id'];
    $sql = "select * from posts where id='$postID' ";

    var_dump($sql);

    $result = $con->query($sql);
    $post = $result->fetch_assoc();

    var_dump($post);

    if($post['user_id'] == $_SESSION['id']){
    
        ?>
        
        <form action="" method="POST">
    
        Title: <input type='text' name='utitle'>
    
        <br>
    
        <textarea name="upostas" cols=50 rows=7>
    
        </textarea>
    
        <br>
    
        <input type="submit" value="Publish">
    
        </form>
    
        <?php
            if(!empty($_POST)){
                $sql = "UPDATE posts SET title = '" . $_POST['utitle'] . "', content = '" . $_POST['upostas'] . "' where id='$postID'";
                var_dump($sql);
                $post = mysqli_query($con, $sql);
                echo 'Duomenys atnaujinti';
            } else{

            }
    } else {
        echo 'Jus negalite redaguoti sio posto';
    }    
}

include 'footer.php';
?>