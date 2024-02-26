<?php

    include 'header.php';
    require 'db.php';

?>

<section class="blog">
    <div class="container">
        <h1 class="title">Popular Blog</h1>
        <div class="row">
            <?php
                    $sql = "SELECT * FROM blog";
                    $run_sql = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_array($run_sql)) {
                        ?>
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title"><?php echo $row['title'] ?></div>
                                <a name="blog_category" href="single-blog.php?id=<?php echo $row['id'] ?>" class="card-image">
                                     <img src="images/<?php echo $row['image'] ?>">
                                </a>
                                <div class="cart-category">
                                    <a href="category-blog.php?category=<?php echo $row['category'] ?>" class="category-btn" name="category">
                                        <?php echo $row['category'] ?>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <a name="blog_id" href="single-blog.php?category=<? echo $row['category'] ?>&id=<? echo $row['id'] ?>"> 
                                        <?php echo $row['body'] ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                ?>
        </div>
    </div>
</section>

<?php
        include 'footer.php';
    ?>