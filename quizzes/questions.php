<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="../jquery-3.5.1.js"></script>
    <script src="js/scripts.js"></script>
</head>
<body>
<?php require_once "inc/fetch_questions.php" ?>
<div class="title">Welcome to our Test Center</div>

<div id="question">

    <?php foreach ($questions as $question_id=>$answers){?>
        <div data-question_id="<?php echo $question_id;?>" class="package" id="package_<?php echo $question_id;?>">
            <div class="question_name"><?php echo $answers[0]['question'];?></div>
            <div class="question_numbers">Question <span class="current_page_number">1</span> of <?php echo count($questions);?>:</div>
            <div class="answers">
                <ul>
                    <?php foreach ($answers as $answer){?>
                        <li><input type="radio" value="1" name="name"> <?php echo $answer['answers'];?> </li>
                    <?php }?>
                </ul>
            </div>
        </div>
    <?php }?>


    <div class="buttons">
        <button class="btn btn-danger btn_previous">Previous</button>
        <button class="btn btn-danger btn_next">Next</button>
        <div class="clearfix"></div>
    </div>
</div>
</body>
</html>