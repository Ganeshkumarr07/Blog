<!-- index.php -->
<?php
require_once('Navbar.php');
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Blogs</h1>
    <a href="create_post.php" class='search-button' style='background-color: black; color: white; padding: 5px 10px; border-radius: 3px; text-decoration: none;'>Create New Post</a>

    
    <div class="post-container">
        <?php
        $conn = new mysqli("localhost", "root", "", "simple_blog");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $query = "SELECT id, title, content, image, author, created_at FROM posts";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='post'>";
                if (!empty($row['image'])) {
                    echo "<img src='images/{$row['image']}' alt='Post Image'>";
                }
                echo "<h2><a href='post.php?id={$row['id']}'>{$row['title']}</a></h2>";
                echo "<p>{$row['content']}</p>";
                echo "<p>By {$row['author']}</p>";
                echo "<p>Posted on: {$row['created_at']}</p>";
                echo "<a href='edit_post.php?id={$row['id']}' class='edit-button' style='background-color: green; color: white; padding: 5px 10px; border-radius: 3px; text-decoration: none;'>Edit</a>";
                echo "<a href='delete_post.php?id={$row['id']}' class='delete-button' style='background-color: red; color: white; padding: 5px 10px; border-radius: 3px; text-decoration: none;'>Delete</a>";                
                echo "</div>";
            }
        } else {
            echo "No posts found.";
        }

        $conn->close();
        ?>
    </div>
</body>
</html>