<?php
    require 'db.php';
?>
<section class="categories">
    <h1 class="title" style="color: #000;">Our Categories</h1>
    <div class="container">
        <div class="grid">
            <?php
                $sql = "SELECT DISTINCT category FROM blog_post";
                $run_sql = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($run_sql)) {
                    ?>
                    <a href="category-blog.php?category=<?php echo $row['category'] ?>" class="category-button"><?php echo $row['category'] ?></a>
                    <?php
                }
            ?>
        </div>
    </div>
</section>