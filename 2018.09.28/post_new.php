<?php
include 'header.php';


if (isset($_SESSION['id'])){?>
   <form action="" method="POST">

Title: <input type='text' name='title'>

<br>

<textarea name="postas" cols=50 rows=7>

</textarea>

<br>

<input type="submit" value="Publish">

</form>



<?php

if(!empty($_POST)){
    $user_id = $_SESSION['id'];
    // var_dump($user_id);
    $title   = $_POST['title'];
    // var_dump($title);
    $content = $_POST['postas'];
    // var_dump($content);

    $sql = "insert into posts (user_id, title, content)
    values ('$user_id', '$title', '$content')";

    // var_dump($sql);

    if(!mysqli_query($con, $sql)){
        echo 'not inserted';
    } else {
        echo 'inserted';
    }
}

?>
<?php
} else {
    echo 'Norint rasyti posta reikia prisijungti';
}




include 'footer.php';
?>