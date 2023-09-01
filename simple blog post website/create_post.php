<!-- create_post.php -->
<?php
require_once('Navbar.php');
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="stylepost.css">
</head>
<body>
    <h1>Create New Post</h1>
    
    <form action="" method="post" enctype="multipart/form-data">
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title"><br>
        <label for="content">Content:</label><br>
        <textarea id="content" name="content"></textarea><br>
        <label for="image">Image:</label><br>
        <input type="file" id="image" name="image"><br>
        <label for="author">Author name:</label><br>
        <input type="text" id="author" name="author"><br>
        <input type="submit" value="Create Post" name="submit">
        <button type="reset">Cancel</button>
    </form>
    
    <?php
    if (isset($_POST['submit'])) {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $image = $_FILES['image']['name'];
        $author = $_POST['author'];

        $conn = new mysqli("localhost", "root", "", "simple_blog");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $query = "INSERT INTO posts (title, content, image, author) VALUES ('$title', '$content', '$image', '$author')";

        if ($conn->query($query) === TRUE) {
            // Upload image
            $targetDirectory = "images/";
            $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);
            move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);
            
            echo "<p>Post created successfully!</p>";
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }

        $conn->close();
    }
    ?>

</body>
</html>
