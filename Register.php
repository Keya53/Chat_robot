<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include 'db_connection.php';
?>
<?php
if (htmlspecialchars($_SERVER['REQUEST_METHOD']) == 'POST') {

    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $sql = "insert into register(Name,Email,password)" . "values('$name','$email','$password')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        ?>
                 <!--<script  xmlns="http://www.w3.org/1999/html" > alert('Data Insertion Successful')</script>-->
        <div class="alart alert-success" style="width: 269px;">
            <strong>Success</strong>You successfully registered here.
        </div>
        <?ph
        
    } else {
        ?>
                 <!--<script>alert('Error in data insertion')</script>-->
        <div class="alart"><strong>Failed!</strong>Try again!</div>
       
        <?php
    }
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body class="reg_body">
        <div class="">
            <form  class="form" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <h3>Create Account</h3>
                <input type="name" name="name" class="form-control" placeholder="Name" required=""><br>
                <input type="email" name="email" class="form-control" placeholder="Enter Email" required=""><br>
                <input type="password" name="password" class="form-control" placeholder="Password " required=""><br>
                <button class="btn btn-success" type="submit">Register</button> 
            </form>>
        </div>
        <script src="js/jquery-1.12.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
