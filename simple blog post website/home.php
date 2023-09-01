<?php
require_once('Navbar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Post Application</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: skyblue;
        }
        header {
            background-color: brown;
            color: white;
            padding: 40px 0;
            text-align: center;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 0 20px;
        }
        .feature {
            margin: 40px 0;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
        .feature h2 {
            color: #35424a;
            margin-bottom: 10px;
        }
        .feature p {
            color: #555;
        }
        footer {
            text-align: center;
            padding: 10px;
            background-color: Black;
            color: white;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Blog Post Application</h1>
        <p>You can post your own blogs in this application</p>
    </header>
    <div class="container">
        <div class="feature">
            <h2>Feature 1</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio a odio consectetur varius.</p>
        </div>
        <div class="feature">
            <h2>Feature 2</h2>
            <p>Nulla facilisi. Suspendisse non vestibulum lectus. Ut vel sapien nec nisi fringilla vulputate.</p>
        </div>
        <div class="feature">
            <h2>Feature 3</h2>
            <p>Cras at bibendum odio. Fusce lacinia erat id neque bibendum, at varius lorem suscipit.</p>
        </div>
        <div class="feature">
            <h2>Feature 4</h2>
            <p>Aliquam venenatis ante ut nunc volutpat, nec viverra lorem condimentum. Quisque scelerisque.</p>
        </div>

    </div>
    <footer>
        <p>&copy; 2023 Blog Post Application @Ganesh Kumar</p>
    </footer>
</body>
</html>






