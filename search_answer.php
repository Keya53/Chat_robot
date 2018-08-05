<?php
include 'db_connection.php';

$question = $_POST['question'];
$sql = "select answare from add_question WHERE question LIKE '%".$question."%'";
$result = $conn->query($sql);
if($result->num_rows>0){
    while ($row = $result->fetch_assoc()){
        echo html_entity_decode($row['answare'])."<br>";
    }
}
else{
    echo "No Result Found, Try another question <br>";
    echo "you may type any keyword to get result eg: 'department'";
}
die();
?>