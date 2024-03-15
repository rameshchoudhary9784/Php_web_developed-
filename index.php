<?php

    include 'header.php';
    require 'db.php';

?>

<section class="blog main-page">
    <div class="container">
        <h1 class="title">Recent Blog</h1>
        <div class="row">
            <?php
            $sql = "SELECT * FROM blog_post
            ORDER BY id DESC
            LIMIT 6";
            // $sql = "SELECT * FROM blog_post";
            $run_sql = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($run_sql)) {
                ?>
                    <div class="card">
                            <div class="card-title"><?php echo $row['title'] ?></div>
                            <div class="card-image">
                                <img src="images/<?php echo $row['image'] ?>">
                            </div>
                            <div class="cart-category">
                                <a href="category-blog.php?category=<?php echo $row['category'] ?>" class="category-btn" name="category">
                                    <?php echo $row['category'] ?>
                                </a>
                            </div>
                            <div class="card-body">
                                    <?php echo $row['body'] ?>
                                </a>
                            </div>
                            <a href="single-blog.php?blog_id=<?php echo $row['id'] ?>" class="blog-btn">Read More</a>
                    </div>
                    <?php
                    }
                ?>
        </div>
    </div>
</section>


<?php
        include 'categories.php';
        include 'footer.php';
    ?>