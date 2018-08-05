<?php
session_start();
if (isset($_SESSION['email'])) {
    header("Location: home_page.php");
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>SEC Campus</title>

        <link rel="shortcut icon" href="img/favicon.ico">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css"> 
    </head>
    <body class="login-page-body"
        <?php
        // put your code here
        ?>
        <div class="container">            

            <form action="login_processing.php" class="form-group login-form-group" method="post">
                <!--<p>SEC Inquire Intelligent Chat Robot </p>-->
                <img class="login_img"src="img/Bangladesh-Government-Logo.png" >
                <input type="email" name="email" class="form-control login-input-field" placeholder="Enter Email" required=""><br>
                <input type="password" name="password" class="form-control login-input-field" placeholder="Enter password" required=""><br>
                <button type="submit"class=" btn btn-block btn-login form-control login-input-field">Login</button>
                <!--<button type=""class=" btn btn-block btn-login form-control" >Register</button>-->
                <a href="Register.php" class="create_account"> Don't have an account! Create account</a>
            </form>
        </div>
        <script src="js/jquery-1.12.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
  </body>
</html>
