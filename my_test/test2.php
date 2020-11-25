<?php session_start();?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
    <script src="../jquery-3.5.1.js"></script>
    <title>Quiz App</title>
</head>
<body>
<?php include "test3.php";?>
<div class="container">
    <div id="question-container" class="hide">
        <div id="question" class="question">Question</div>
        <div id="answer-buttons" class="btn-grid">
            <button class="btn">Answer1</button>
            <button class="btn">Answer2</button>
            <button class="btn">Answer3</button>
            <button class="btn">Answer4</button>
        </div>
    </div>
    <div class="controls">
        <button id="next-btn" class="next-btn btn hide">Next</button>
    </div>
    <footer>
        <p id="progress">Question x of y</p>
    </footer>
</div>



<script src="js/jqscript.js"></script>
</body>
</html>
