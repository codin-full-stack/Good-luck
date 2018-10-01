<?php



/**_____________________________________________ */
/** Paieska su funkcija */

include 'functions.php';

$dir = 'jsons';

$filename = createJsonFileName($_POST);

searchUser($filename);

?>
<br>
<a href='paieska.php'>Back</a>