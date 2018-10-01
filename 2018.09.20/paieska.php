<?php
include 'header.php';
?>

<?php
// var_dump($_POST);
if(!empty($_POST)){
    include 'searchdata.php';
} else {
    include 'searchform.php';
}

?>


<?php include 'footer.php'; ?>