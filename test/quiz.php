<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="home_box custom-box hide">
    <h3>Instruction:</h3>
    <p>Total number of question: <span class="total-question">5</span></p>
    <button class="btn" type="button">Start Quiz</button>

</div>
<div class="quiz-box custom-box">
    <div class="question-number">
        Question 1 of 5
    </div>
    <div class="question-text">
        Which month comes right before june?
    </div>
    <div id="btn-grid" class="option-container">
        <div class="option">may</div>
        <div class="option">sep</div>
        <div class="option">july</div>
        <div class="option">august</div>
    </div>
    <div class="next-button">
        <button type="button" class="btn">Next</button>
    </div>
    <div class="answers-indicator">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>


<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,600;1,200;1,500&display=swap');
    body{
        margin: 0;
        font-size: 16px;
        background-color: #009688;
        font-family: 'Montserrat', sans-serif;
        font-weight: 400;
    }
    *{
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        outline: none;
    }
    .custom-box{
        max-width: 700px;
        background-color: #fff;
        margin: 40px auto;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 5px 5px 5px rgba(68, 68, 68, 0.6);

    }
    .custom-box.hide{
        display: none;
    }
    .home_box h3{
        font-size: 18px;
        color: #000;
        font-weight: 500;
        margin-bottom: 15px;
        line-height: 25px;
    }
    .home_box p{
        font-size: 16px;
        color: #000;
        font-weight: 400;
        margin-bottom: 10px;
        line-height: 22px;
    }
    .home_box p span{
        font-weight: 500;
    }
    .home_box .btn{
        margin-top: 20px;
    }
    #btn-grid{
        display: grid;
        grid-template-columns: repeat(2, auto);
        gap: 30px;
        margin: 20px 0;
    }
    .btn{
        padding: 15px 45px;
        background-color: #009688;
        color: #fff;
        border: none;
        border-radius: 5px;
        font-size: 15px;
        cursor: pointer;
        display: inline-block;
    }
    .quiz-box .question-number{
        font-size: 18px;
        color: #009688;
        font-weight: 600;
        border-bottom: 1px solid #cccc;
        padding-bottom: 10px;
        line-height: 25px;
    }
    .quiz-box .question-text{
        font-size: 22px;
        color: #000;
        font-weight: 400;
        padding: 20px 0;
        line-height: 28px;
        margin: 0;
    }
    .quiz-box .option-container{

    }
    .quiz-box .option-container .option{
        background-color: #ccc;
        padding: 15px;
        font-size: 16px;
        line-height: 22px;
        color: #000;
        border-radius: 5px;
        margin-bottom: 10px;
        cursor: pointer;
        box-shadow:
                0 2.8px 2.2px rgba(0, 0, 0, 0.034),
                0 6.7px 5.3px rgba(0, 0, 0, 0.048),
                0 12.5px 10px rgba(0, 0, 0, 0.06),
                0 22.3px 17.9px rgba(0, 0, 0, 0.072),
                0 41.8px 33.4px rgba(0, 0, 0, 0.086),
                0 100px 80px rgba(0, 0, 0, 0.12)
    ;
    }
    .quiz-box .btn{
        margin: 15px 0;
    }
    .quiz-box .answers-indicator div{
        height: 40px;
        width: 40px;
        display: inline-block;
        background-color: #ccc;
        border-radius: 50%;
        margin-right: 3px;
    }



</style>


</body>
</html>
