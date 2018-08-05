<?php include './db_connection.php' ?>
<?php
if (htmlspecialchars($_SERVER['REQUEST_METHOD']) == 'POST') {
//    echo "<pre>",print_r($_POST);die();
    $id = htmlspecialchars($_POST['id']);
    $question = htmlspecialchars($_POST['question']);
    $answare = htmlspecialchars($_POST['answare']);
    $sql = "UPDATE add_question SET question = '" . $question . "', answare ='" . $answare . "' WHERE id='" . $id . "'";
//    echo $sql;die();
    $result = $conn->query($sql);
    if ($result) {
        ?>
        <script> alert("Data Updated Successful");
            window.location = "view_question.php";
            //        header("Location: view_question.php");
        </script>
        <?php

    } else {
        ?>
        <script> alert("Error in Data Update")</script>
        <?php

    }
}


?>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/header.css">
</head>
<body>
<div class="container">
    <?php include './header.php'; ?>
    <?php
    $id = isset($_GET['id']) ? $_GET['id'] : null;
    $sql = "select * from add_question WHERE id='" . $id . "' Limit 1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        ?>
        <form class="form-horizontal" method="post">
            <?php
            foreach ($result as $key => $row) {
                ?>
                <div class="form-group">
                    <label class="col-md-2">Question:</label>
                    <div class="col-md-8">
                        <input name="question" value="<?php echo $row["question"]; ?>" type="text"
                               class="form-control col-md-6" placeholder="Set Question">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2">Answare:</label>
                    <div class="col-md-8">
                        <input name="answare" value="<?php echo $row["answare"]; ?>" type="text"
                               class="form-control col-md-6" placeholder="Set Answere">
                    </div>
                </div>

                <input name="id" id="id" type="hidden" value="<?php echo $id; ?>">

                <?php
            }
            ?>
            <div class="form-group">
                <label class="col-md-2"></label>
                <div class="col-md-3">
                    <button class="btn btn-success" type="submit">Update</button>
                </div>
            </div>
        </form>
        <?php
    }
    ?>
</div>
</body>
</html>
