<?php
include 'header.php';

if(isset($_GET['keyword'])){
    $keyword = $db->escape_string($_GET['keyword']);

    $query = $db->query("SELECT title FROM posts WHERE title like '%{$keyword}%'");
?>