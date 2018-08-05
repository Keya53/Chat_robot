<?php 
include 'db_connection.php';

$email = $_POST['email'];
$password = $_POST['password'];


$sql = "select * from register WHERE email='" . $email . "' and password='" . $password . "'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    session_start();
    foreach($result as $res) {   
//        echo '<pre>', print_r($res);die();
        $_SESSION['email'] = $res['Email'];
        $_SESSION['name'] = $res['Name'];
        header("Location: home.php");
    }

}
else{    
    header("Location:login.php");

  }
  ?>