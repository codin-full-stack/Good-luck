<?php

/** duomenu paemimas is duomenu bazes pagal emaila */

include 'config.php';

$email = $_POST['find'];

$sql = "select * from users where email='$email' ";
var_dump($sql);

$result = $con->query($sql);
$user = $result->fetch_assoc();

var_dump($user);

foreach ($user as $key => $value) {
    echo $key . ': ' . $value . '<br>';
}
?>
<a href='testas.html'>Back</a>