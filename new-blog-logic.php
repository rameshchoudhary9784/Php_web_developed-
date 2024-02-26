<?php

    require 'db.php';

    $targetDir = "images/"; 

    if(isset($_POST['submit'])) {
        $title = $_POST['title'];
        $category = $_POST['category'];
        $body = $_POST['body'];
        
        $image = basename($_FILES["image"]["name"]); 
        $targetFilePath = $targetDir . $image;

        $sql = "INSERT INTO blog (title, category, image, body) VALUES('$title', '$category', '$image', '$body')";
        $run_sql = mysqli_query($conn, $sql);

        move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath);

        header('Location: new-blog.php');
    }
?>