<a href='index.php'><button type="submit">Back</button></a>
<br>
<?php

include 'functions.php'; /** Paimam funkcijas is functions.php failo */

$dir = "jsons"; /** Prilyginam $dir kintamaji 'jsons' folderiui */
$files = scanFiles($dir); /** Prilyginam $files(kintamaji) kuris naudoja funkcija 'scanFiles($dir)' */


allRegisteredUsers($dir, $files); /** Iškviečiam funkciją kuri atvaizduos visus registruotus vartotojus paimtus is jsons folderio($dir) naudojant $files*/

?>