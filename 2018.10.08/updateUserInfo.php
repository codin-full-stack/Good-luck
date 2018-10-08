<?php
include 'header.php';
?>

<?php include 'form3.php'; ?>

<?php


$email = "select * from users where id= '" . $_SESSION['id'] . "' ";

// var_dump($email);

$result = $con->query($email);
$user = $result->fetch_assoc();

// var_dump($user);

/** VARDO KEITIMAS */
// if(!empty($_POST['name'])){
//     $sql = "UPDATE users SET name = '" . $_POST['name'] . "' where id = '" . $user['id'] . "'";
//     $result= mysqli_query($con, $sql);
// var_dump($sql);
//     echo 'Duomenys atnaujinti';
// } else {
//     echo "kazkas negerai";
// }

// gender = '" . $_POST['lytis'] . "'

/** VISU DUOMENU KEITIMAS */
if(!empty($_POST)){
    $sql = "UPDATE users SET name = '" . $_POST['name'] . "', lastname = '" . $_POST['pavarde'] . "', email = '" . $_POST['email'] . "', amzius = '" . $_POST['amzius'] . "', city = '" . $_POST['miestai'] . "' WHERE id = '" . $user['id'] . "'";
    var_dump($sql);
    $result = mysqli_query($con, $sql);
    echo 'Duomenys atnaujinti';
} else {
    echo "kazkas negerai";
}


?>

<?php
include 'footer.php';
?>