<?php
include './header.php';
?>


<div class=" container" style="background-color: #8bb7c9; width: 960px;margin-left: 191px">

    <!--    <div class="col-md-4 home-botton">
            <a class="btn btn-primary" href="home.php">Home</a>
        </div>-->
    <?php
    if (htmlspecialchars($_SERVER['REQUEST_METHOD']) == 'POST') {

//        echo '<pre>', print_r($_POST);
//        die();

        $que = htmlspecialchars($_POST['question']);
        $ans = htmlspecialchars($_POST['ans']);

        $sql = "insert into add_question (question,answare)values('$que','$ans')";
        //mysqli_query($conn, 'SET CHARACTER SET utf8');
        //mysqli_query($conn, "SET SESSION collation_connection ='utf8_general_ci'");
//               echo '<pre>,var_dump($sql),</pre>';
//                die();

        $res = mysqli_query($conn, $sql);
        if ($res) {
            ?>
            <div class="">
                <div class="alart alert-success">
                    <h4 class="" style=""><?php echo "Successfully stored"; ?></h4>
                </div>
            </div>
            <?php
        } else {
            ?>
            <div class="col-md-6 col-md-offset-3">
                <div class="alart alert-danger">
                    <h4><?php echo "Error Occured"; ?></h4>
                </div>
            </div>
            <?php
        }
    }
    ?>

    <!--<p>SEC Inquire Intelligent Chat Robot </p>-->
    <?php
    include './top.php';
    ?>


    <form class="form-horizontal" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

        <div class="form-group">
            <label class="control-label col-sm-2 left_mark" style="color: black">Add Question:</label>

            <div class="col-sm-10">
                <input  class="form-control " type="text" name="question" placeholder="Add you question here">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2 left_mark"  style="color: black">Answare:</label>

            <div class="col-sm-10">
                <textarea name="ans" id="ans"  class="ckeditor" placeholder="Answare"></textarea>
            </div>
        </div>
        <div class="form-group ">
            <div class="col-sm-1 " >
                <input class="btn btn-success btn-lg" type="submit" value="Submit" id="subit_btn">

            </div>
        </div>
    </form>
</div>
<?php include './footer.php'; ?>
<script src="js/ckeditor/ckeditor.js"></script>>
