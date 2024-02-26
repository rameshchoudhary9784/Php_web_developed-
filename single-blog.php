<?php

    include 'header.php';
    require 'db.php';
?>

<section class="category-blog blog">
    <div class="container">
        <div class="row">
            <?php
                if(isset($_GET['blog_id'])) {
                    $sql = "SELECT * FROM blog WHERE id = '$_GET[blog_id]'";
                    echo $sql;
                    $run_sql = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_array($run_sql)) {
                        ?>
                        <div class="post">
                            <?php echo $row['id'] ?>
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