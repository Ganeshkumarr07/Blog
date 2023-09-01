<!-- delete_post.php -->
<?php
$conn = new mysqli("localhost", "root", "", "simple_blog");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$post_id = $_GET['id'];

$query = "DELETE FROM posts WHERE id = $post_id";
$conn->query($query);

$conn->close();

// Redirect back to index.php after deleting
header("Location: index.php");
exit();
?>
