<?php
include 'header.php';


if (isset($_SESSION['id'])){?>

    <div class="post-new">
        <form action="" method="POST" enctype="multipart/form-data">

            Title: <br> <input type='text' name='title'>

            <br>
            Post content:<br>
            <textarea name="postas" cols=50 rows=7>

            </textarea>

            <br>

            <label>Straipsnio nuotrauka:
                <input type="file" name="image" id="image">
            </label>

            <input type="submit" value="Publish">

        </form>
    </div>


    <?php

    if(!empty($_POST)){

        $targetDir = "pictures/";
        $targetFile = $targetDir . basename($_FILES['image']['name']);
        $uploadOk = 1;
        // var_dump($targetFile);
        $imageFileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
        // var_dump($imageFileType);
        $check = getimagesize($_FILES['image']['tmp_name']);
        if($check !== false){
            // echo 'its image - ' . $check['mime'] . '.';
            $uploadOk = 1;
        } else {
            // echo 'its not image' . '<br>';
            $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            // echo "Sorry, your file was not uploaded.";
        } else {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
                // echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
            } else {
                // echo "Sorry, there was an error uploading your file.";
            }
        }  

        $user_id = $_SESSION['id'];
        // var_dump($user_id);
        $title   = $_POST['title'];
        // var_dump($title);
        $content = $_POST['postas'];
        // var_dump($content);

        $sql = "insert into posts (user_id, title, content, picture)
        values ('$user_id', '$title', '$content', '$targetFile')";

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