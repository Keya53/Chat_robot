<?php
include 'db_connection.php';
//session_start();
//if(!isset($_SESSION['register'])){
//    header("Location: login.php");
//}
?>
<a href="home.php"></a>
<html>
    <head>
        <meta charset="UTF-8">
        <title>FAQ</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
<!--        <link rel="stylesheet" href="css/home.css">-->
<link rel="stylesheet" href="css/style.css">


    </head>
    <body class="">        
        <div id="myCarousel" class="carousel slide" data-ride="carousel" >
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="img/campus.jpg" >
                </div>

                <div class="item">
                    <img class="img-responsive" src="img/shohid.jpg" alt="Slide image">
                </div>

                <div class="item">
                    <img class="img-responsive" src="img/campus2.jpg" alt="Slide image">
                </div>
                <div class="item">
                    <img class="img-responsive" src="img/program.jpg" alt="Slide image">
                </div>
            </div>



        </div>

        <div class="menu">
            <ul>
                <li ><a href="add_question.php" >Add Question</a></li>
                <li><a href="view_question.php">View Question</a></li>
                <li><a>View Invalid Question</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
        <div class="container">

            <div class="col-md-8 col-sm-12 col-md-offset-2 col-sm-offset-0">
                <div class="conversion_view"></div>

                <form id="conversion_form" class="form-inline" action="#">

                    <div class="form-group">                
                        <input type="text" class="form-control" id="question_txtbox" name="question_txtbox" style="width: 250%">
                    </div>            
                    <button type="submit" class="btn btn-success question_submit_btn" style="margin-left:200px; margin-top: 7px">Submit</button>
<!--                    <button type="submit" class=" btn btn-invalid"style="margin-left:160px; margin-top: 10px">Invalid Question</button>-->
                </form> 
            </div>
        </div>
        <script src="js/jquery-1.12.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#conversion_form').submit(function (e) {
                e.preventDefault();
                var question = $("#question_txtbox").val();
                var questionHtml="<p class='text-info text-right'>";
                questionHtml += $("#question_txtbox").val();
                questionHtml +="</p>";
                $(".conversion_view").append(questionHtml);
                $("#question_txtbox").val("");
                $.ajax({
                    url: 'search_answer.php',
                    data: {
                        action: 'test',
                        question: question
                    },
                    type: 'post',
                    success: function(response) {
                        $(".conversion_view").append(response);
                        $('html,body').scrollTop(100000000000000000);
                    }
                    
                });
            });

        });
    </script>

    </body>
</html>
