<?php
include 'header.php';
include 'functions.php';
?>

<?php

if (isset($_SESSION['email'])) {
    showUserInfo($_SESSION);

} else {
    echo 'Pirma prisijunkite';
}
?>

<?php
include 'footer.php';
?>