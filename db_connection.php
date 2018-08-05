<?php
$servername='localhost';
$username='root';
$db='chatbot';
$password='';
$conn=  new mysqli($servername, $username, $password, $db);

//mysqli_query($conn,'SET CHARACTER SET utf8');
//mysqli_query($conn,"SET SESSION collation_connection ='utf8_general_ci'");
if(!$conn)
{
     die('connection fail'.$conn->connect_error);  
}
mysqli_query($conn,'SET CHARACTER SET utf8');
mysqli_query($conn,"SET SESSION collation_connection ='utf8_general_ci'");


