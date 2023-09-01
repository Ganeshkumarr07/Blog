<!-- post.php -->
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <a href="index.php">Back to Home</a>
    
    <?php
    $postId = $_GET['id'];

    $conn = new mysqli("localhost", "root", "", "simple_blog");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $query = "SELECT title, content, image, author, created_at FROM posts WHERE id = $postId";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<div class='post'>";
        echo "<h2>{$row['title']}</h2>";
        if (!empty($row['image'])) {
            echo "<img src='images/{$row['image']}' alt='Post Image'>";
        }
        echo "<p>{$row['content']}</p>";
        echo "<p>By {$row['author']}</p>";
        echo "<p>Posted on: {$row['created_at']}</p>";
        echo "</div>";
    } else {
        echo "<p>Post not found.</p>";
    }

    $conn->close();
    ?>
</body>
</html>
