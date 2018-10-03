<?php 
include 'header.php';

// $sql = "select * from posts ORDER BY laikas desc";
// $result = $con->query($sql);
// 
// while ($post = $result->fetch_assoc()){
   
//     $userid = $post['user_id'];
//     $sqlUsers = "select * from users where id='$userid'";
//     $resultUsers = $con->query($sqlUsers);
//     $postUsers = $resultUsers->fetch_assoc();
//     // var_dump($postUsers);

//     var_dump($post['id']);
   
//     if(isset($_SESSION['id'])){     
//             echo "<div class='post-box'>";
//                 echo 'Autorius - ' . $postUsers['name'] . '&nbsp' . $postUsers['lastname'] . '<br>';
//                 echo '<strong>' . $post['title'] . '</strong>' . '<br>';
//                 /** IDETI NUOTRAUKAS */
//                 echo substr($post['content'], 0, 80 ) . '...' . '<br>' . '<br>';        
//                 if(strlen($post['content']) > 79){
//                     echo '<a href="post.php?id='.$post['id'].'">READ MORE</a> &nbsp&nbsp&nbsp';
//                 }     
//                 if($_SESSION['id'] == $userid){   
//                     echo '<a href="post_edit.php?id='.$post['id'].'">EDIT</a> &nbsp&nbsp&nbsp';
//                     echo '<a href="post_delete.php?id='.$post['id'].'">DELETE POST</a> &nbsp&nbsp&nbsp';
//                 }   
//                 echo '<a href="comment_new.php?id='.$post['id'].'">Komentuoti</a> &nbsp&nbsp&nbsp';
//                 echo '<a href="post.php?id='.$post['id'].'">Komentarai</a>';       
//             echo "</div>";   
//     } else {
//         echo "<div class='post-box'>";
//             echo 'Autorius - ' . $postUsers['name'] . '&nbsp' . $postUsers['lastname'] . '<br>';
//             echo '<strong>' . $post['title'] . '</strong>' . '<br>';
//             /** IDETI NUOTRAUKAS */
//             echo substr($post['content'], 0, 80 ) . '...' . '<br>' . '<br>';        
//             if(strlen($post['content']) > 79){
//                 echo '<a href="post.php?id='.$post['id'].'">READ MORE</a> &nbsp&nbsp&nbsp';
//             }        
//             echo '<a href="post.php?id='.$post['id'].'">Komentarai</a>';       
//         echo "</div>";
//     }
// }

?>


<div class="content">

    <div class="content-box">
        <div class="content-pic">
            <img src="monkey.jpg" alt="monkey">
            <div class="content-title">
            bla bla blabla bla blabla bla blabla bla blabla bla bla
            bla bla blabla bla blabla bla blabla bla blabla bla bla
            </div> 
        </div>
    </div>


    <div class="content-box">
        <div class="content-pic">
            <img src="monkey.jpg" alt="monkey">
                <div class="content-title">
                bla bla bla
                </div>
        </div>
    </div>

    <div class="content-box">
        <div class="content-pic">
            <img src="monkey.jpg" alt="monkey">
            <div class="content-title">
            bla bla bla
            </div>
        </div>
    </div>

    <div class="content-box">
        <div class="content-pic">
            <img src="monkey.jpg" alt="monkey">
            <div class="content-title">
            bla bla bla
            </div>
        </div>
    </div>

    <div class="content-box">
        <div class="content-pic">
            <img src="monkey.jpg" alt="monkey">
            <div class="content-title">
            bla bla bla
            </div>
        </div>
    </div>

</div>



<!-- <?php include 'footer.php' ?> -->
