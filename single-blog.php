<?php

    include 'header.php';
    require 'db.php';
?>

<section class="category-blog blog">
    <div class="container">
        <div class="row">
            <?php
                if(isset($_GET['blog_id'])) {
                    $sql = "SELECT * FROM blog_post WHERE id = '$_GET[blog_id]'";
                    $run_sql = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_array($run_sql)) {
                        ?>
                        <div class="post">
                            <h1><?php echo $row['title'] ?></h1>
                            <div class="img">
                                <img src="images/<?php echo $row['image'] ?>">
                            </div>
                            <p>
                                <?php echo $row['body'] ?>
                            </p>
                        </div>
                    <?php
                    }
                }
            ?>
        </div>
    </div>
</section>

<?php
    include 'footer.php';
?>