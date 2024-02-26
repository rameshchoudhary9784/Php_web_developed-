<?php
    require 'db.php';
    include 'header.php';  
?>

<section>
    <div class="container">
        <?php
            if(isset($_GET['category'])) {
                $sql = "SELECT * FROM blog WHERE category = '$_GET[category]'";
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
        <h1 class="title">Popular Blog</h1>
        <div class="row">
            <?php
                    $sql = "SELECT * FROM blog WHERE category = '$_GET[category]'";
                    $run_sql = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_array($run_sql)) {
                        ?>
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title"><?php echo $row['title'] ?></div>
                                <div class="card-image">
                                     <img src="images/<?php echo $row['image'] ?>">
                                </div>
                                <div class="cart-category">
                                    <a href="category-blog.php?category=<?php echo $row['category'] ?>" class="category-btn">
                                        <?php echo $row['category'] ?>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <p> 
                                        <?php echo $row['body'] ?>
                                    </p>
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