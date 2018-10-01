<?php
include 'header.php';
?>


<?php

if (isset($_SESSION['id'])){
   include 'post.php';
} else {
    echo 'Norint rasyti posta reikia prisijungti';
}

?>

<?php
include 'footer.php';
?>