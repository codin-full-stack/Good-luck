<?php session_start();
echo 'Logged in as: ' . $_SESSION['vardas'] . '<br>';
?>


<?php
// var_dump($_POST);

if(!empty($_POST)){
    include 'searchdata.php';
} else {
    include 'searchform.php';
}

?>