<?php
    include("includes/header.php");
?>

<div class="content">
    <div id="blogs">
        Here are the latest blogs that I have published!
        <div id="blogslist">
            <?php
                // this is where I will list the blogs
                $sql = "SELECT url, title, content FROM blogslist";
                $blogs = mysqli_query($conn, $sql);

                if(mysqli_num_rows($blogs) > 0) {
                    while($blog = mysqli_fetch_assoc($blogs)) {
                        $url = $blog["url"];
                        $title = $blog["title"];
                        $content = mb_strimwidth($blog["content"], 0, 200, "...");
                        echo "<div id='blog'>";
                            echo "<a href='blog.php?p=$url'><h3>$title</h3></a>";
                            echo "<p>$content</p>";
                        echo "</div>";
                    }
                } else {
                    echo "<h4>Sorry! No blogs were published yet!</h4>";
                }
            ?>
        </div>
    </div>
</div>

<?php
    include("includes/footer.php");
?>