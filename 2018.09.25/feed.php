<?php
include 'header.php';
?>

<?php

$sql = "select * from posts";
$result = $con->query($sql);

/** Visu postu atvaizdavimas */
while ($post = $result->fetch_assoc()){
    echo "<div class='post-box'>";
        echo $post['title'] . '<br>' . '<br>';
        echo $post['content'] . '<br>' . '<br>';
    echo "</div>";
}

?>

<input type="button" value="Back" onclick="location.href='index.php'" />

<?php
include 'footer.php';
?>