<?php 

    session_start();
// connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "simple_blog";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
        
   ?> 
<html>
    <head>
        <title>Blog Post Website</title>
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
       <style>
            .topnav{
                background-color: black;
                overflow: hidden;
            
            }
            .topnav a{
                float: left;
                text-decoration: none;
                color: aliceblue;
                padding: 14px 16px;
            }
            .topnav input[type=text]{
                padding: 2px 1px;
                padding-top: 5px;
                margin-left: 30%;
                margin-top: 8px;

            }
            .button{
                width: 5px;
                height: 10px;
            }
            #log{
                height: 30px;
                width: 30px;
            }
            .topnav b{
                color: white;
                margin-left: 55%;
            }
            .logout-button {
  background-color: #e72727;
  border: none;
  color: white;
  padding: 4px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 2px;
}
#search{
    width: 10%;
    margin-left:2%;
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
            </style> </head>
            <body>
                <div class="topnav">
                    <a href=""><img src="images/logo.png" alt="Logo" id="log"></a>
                    <a class="active" href="home.php">Home</a>
                    <a  href="create_post.php">Add Post</a>
                    <a  href="viewpost.php">View Post</a>
                    <input type="text" id="search">
                    <button type="submit">Search</button>
              <?php
             if(isset($_SESSION["username"])) {
              echo "<b style='font-size: larger;'>Hello, {$_SESSION['username']}  </b>";

              
          }else{
              echo "error";
          }
          ?>
             <button class="logout-button" onclick="logout()">Logout</button>

<script>
function logout() {
 
  window.location.href = "registration.php";
}
</script>

            </div>
          </div>
                  </div>  
                  <footer>
        <p>&copy; 2023 Blog Post Application @Ganesh Kumar</p>
    </footer>
            </body>
            </html>