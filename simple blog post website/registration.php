<?php
?>
<html><head>
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="stylog.css">
    <style>
        table,tr,td {
        border : solid black 1px;
        border-collapse: collapse;
        padding: 20px;
       
    }
    .center{
        margin: auto;
  width : 30%;
  margin-top:2%;
  padding: 10px;
  background-color: lightgrey;
    }
    </style>
</head>
    <body><div class="container">
    <h1 style="color:red; text-align:center; background-color:black; margin-top:100px; width:30%; margin-left:35%; padding:10px;">Blog Post application</h1>    
    <div class="center">
        <table>
            <tr>
            <td>
            <h2>Registration</h2>
            <form action="config.php" method="post" id="formm" style="border: 2px solid #ccc; padding: 20px;">
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" class="form-control" id="username" name="username" required>
    </div>
    
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" name="email" required>
    </div>
    
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" name="password" required>
    </div>
    
    <div class="form-group">
      <label for="confirm-password">Confirm Password:</label>
      <input type="password" class="form-control" id="confirm_password" name="cpassword" required>
    </div>
    
    <input type="submit" name="submit" value="Register">
      <input type="reset" value="Cancel">
  </form>
</td>
       <td>
        <h2>Login</h2>
        <form id="login-form" action="login.php" method="post" style="border: 2px solid #ccc; padding: 20px;">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
      <input type="submit" value="Login">
      <input type="reset" value="Cancel">
    </form>
    </td> 
       </tr>
       </table></div></div>
    </body>
</html>
