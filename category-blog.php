<?php
    require 'db.php';
    include 'header.php';
?>

<section>
    <div class="container">
        <?php
            if(isset($_GET['category'])) {
                $sql = "SELECT * FROM blog_post WHERE category = '$_GET[category]'";
                $run_sql = mysqli_query($conn, $sql);
                ?>
                    <h1 class="category-title"><?php echo $_GET['category'] ?></h1>
                <?php
            }
        ?>
    </div>
</section>

<section class="category-blog blog">
    <div class="container">
        <div class="row">
            <?php
                    $sql = "SELECT * FROM blog_post WHERE category = '$_GET[category]'";
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
    include 'footer.php';  
?>