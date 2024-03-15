<?php

    require 'db.php';

    $targetDir = "images/";
    

    if(isset($_POST['submit'])) {
        $title = filter_input($_POST['title'], FILTER_SANITIZE_STRING);
        $category = filter_input($_POST['category'], FILTER_SANITIZE_STRING);
        $body = filter_input($_POST['body'], FILTER_SANITIZE_STRING);
        
        $image = basename($_FILES["image"]["name"]); 
        $targetFilePath = $tar1getDir . $image;

        $sql = "INSERT INTO `blog_post` (`id`, `title`, `category`, `image`, `body`) VALUES (NULL, '$title', '$category', '$image', '$body')";
        $run_sql = mysqli_query($conn, $sql);

        move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath);

        header('Location: new-blog.php');
    }
?>