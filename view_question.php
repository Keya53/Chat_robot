<?php include "./db_connection.php"; ?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="shortcut icon" href="img/favicon.ico">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/header.css">
    </head>
    <body class="view_ques_body">
        <div class="view_que_container">
            <div class="col-md-4 home-botton">
                <a class="btn btn-primary" href="home.php">Home</a>
            </div>
            <?php include './header.php'; ?>
              
            <p class="view">SEC Inquire Intelligent Chat Robot </p>
            <div class="col-md-12">
                <a class="btn btn-success pull-right" href="add_question.php">Add Question</a>
                <table class="table table-bordered table-responsive" >
                    <thead>
                        <tr class="key-bg">
                            <th>SL NO</th>
                            <th>Question</th>
                            <th>Answare</th>
                            <th>Edit</th>
                            <th>Delete</th>

                        </tr>

                    </thead>
                    <tbody>

                        <?php
//                    $servername = 'localhost';
//                    $username = 'root';
//                    $db = 'chatbot';
//                    $password = '';
//                    $conn = new mysqli($servername, $username, $password, $db);

                        $sql = "select * from add_question";
                        
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            foreach ($result as $key => $row) {
                                ?>
                                <tr>
                                    <td> <?php echo $key + 1; ?></td>
                                    <td> <?php echo $row["question"]; ?></td>
                                    
                                    <td> <?php echo html_entity_decode($row["answare"]) ; ?></td>
                                    

                                    <td><a class="btn btn-xs btn-primary"href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
                                    <td><a onclick="return confirm('Are you sure?')"  class="btn btn-xs btn-danger"href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td>

                                </tr>

                                <?php
                            }
                        }
                        ?>
                    </tbody>

                </table>
            </div>
        </div>

<!--        <script type="text/javascript">
            $(document).ready(function () {
                $('#data-table').DataTable();
            });
        </script>-->
         
    </body>
     <?php include './footer.php'; ?>

</html>
