<?php
require_once('Navbar.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli("localhost", "root", "", "simple_blog");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $post_id = $_POST['post_id'];
    $new_title = $_POST['new_title'];
    $new_content = $_POST['new_content'];

    // Check if a new image is uploaded
    if ($_FILES['new_image']['name']) {
        $new_image = $_FILES['new_image']['name'];
        $targetDirectory = "images/";
        $targetFile = $targetDirectory . basename($_FILES["new_image"]["name"]);
        move_uploaded_file($_FILES["new_image"]["tmp_name"], $targetFile);

        // Update the image filename in the database
        $query = "UPDATE posts SET title = '$new_title', content = '$new_content', image = '$new_image' WHERE id = $post_id";
    } else {
        // Keep the existing image filename in the database
        $query = "UPDATE posts SET title = '$new_title', content = '$new_content' WHERE id = $post_id";
    }

    $conn->query($query);

    $conn->close();

    // Redirect back to index.php after editing
    header("Location: index.php");
    exit();
}

// Fetch post details
$conn = new mysqli("localhost", "root", "", "simple_blog");
$post_id = $_GET['id'];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT title, content, image FROM posts WHERE id = $post_id";
$result = $conn->query($query);
$row = $result->fetch_assoc();

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Post</title>
    <link rel="stylesheet" type="text/css" href="stylepost.css">
</head>
<body>
    <h1>Edit Post</h1>
    
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
        
        <label for="new_title">New Title:</label><br>
        <input type="text" id="new_title" name="new_title" value="<?php echo $row['title']; ?>"><br>
        
        <label for="new_content">New Content:</label><br>
        <textarea id="new_content" name="new_content"><?php echo $row['content']; ?></textarea><br>
        
        <label for="new_image">New Image:</label><br>
        <input type="file" id="new_image" name="new_image"><br>
        
        <input type="submit" value="Save Changes" name="submit">
        <a href="index.php"style='background-color: red; color: white; padding: 5px 10px; border-radius: 3px; text-decoration: none;'>Back to Home</a>
    </form>
</body>
</html>
