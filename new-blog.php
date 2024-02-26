<?php
    include 'header.php';
?>
  <section class="blog new-blog">
    <div class="container">
        <h1 class="title">New Blog</h1>
        <div class="card">
            <form action="new-blog-logic.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Blog Title</label>
                    <input type="text" name="title" placeholder="Blog Title" required>
                </div>
                
                <div class="form-group">
                    <label for="">Blog Category</label>
                    <select name="category" id="" required>
                        <option value="" selected disabled>Select Blog Category</option>
                        <option value="Arts">Arts</option>
                        <option value="Car">Car</option>
                        <option value="Science">Science</option>
                        <option value="Technology">Technology</option>
                        <option value="Sports">Sports</option>
                        <option value="Nature">Nature</option>
                        <option value="Others">Others</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Blog Image</label>
                    <input type="file" accept="image/*" name="image" required>
                </div>
                <div class="form-group">
                    <label for="">Blog body</label>
                    <textarea name="body" rows="5"  placeholder="Blog Body" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" name="submit">Add Blog</button>
                </div>
            </form>
        </div>
    </div>
  </section>  

  <?php
    include 'footer.php';
  ?>