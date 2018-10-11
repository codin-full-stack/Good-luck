<?php
include 'header.php';
include 'loginform.php';
include 'functions.php';
?>


<?php
if (!empty($_POST)){
    logIn($_POST);
}
?>

<?php

include 'footer.php';

?>
