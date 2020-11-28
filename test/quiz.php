<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/sher.css">
    <script src="../jquery-3.5.1.js"></script>
    <title>Document</title>
</head>
<body>
<div class="home_box custom-box hide">
    <h3>Instruction:</h3>
    <p>Total number of question: <span class="total-question">5</span></p>
    <button class="btn" type="button">Start Quiz</button>

</div>
<div class="quiz-box custom-box ">
    <div class="question-number">

    </div>
    <div class="question-text">

    </div>
    <div id="btn-grid" class="option-container">

    </div>
    <div class="next-question-btn">
        <button type="button" class="btn" onclick="next()">Next</button>
    </div>
    <div class="answers-indicator">

    </div>
</div>

<div class="result-box custom-box hide">
    <h1>Quiz Result</h1>
    <table>
        <tr>
            <td>Total Question</td>
            <td><span class="total-question">5</span></td>
        </tr>
        <tr>
            <td>Attempt</td>
            <td><span class="total-attempt">4</span></td>
        </tr>
        <tr>
            <td>Correct</td>
            <td><span class="total-correct">3</span></td>
        </tr>
        <tr>
            <td>Wrong</td>
            <td><span class="total-wrong">1</span></td>
        </tr>
        <tr>
            <td>Percentage</td>
            <td><span class="percentage">60.00%</span></td>
        </tr>
        <tr>
            <td>Your Total Score</td>
            <td><span class="total-score">3 / 5</span></td>
        </tr>
    </table>
    <button type="button" class="btn">Try Again</button>
    <button type="button" class="btn">Go to home</button>
</div>
<script src="js/question.js">

</script>
<script>

    const questionNumber = document.querySelector(".question-number");
    const questionText = document.querySelector(".question-text")
    const optionContainer = document.querySelector(".option-container")

    let questionCounter = 0;
    let currentQuestion;
    let availableQuestions = [];
    let availableOptions = [];

    //push the question into setAvailableQuestions Array

    function setAvailableQuestions() {
        const totalQuestion = quiz.length;
        for (let i = 0; i < totalQuestion; i++) {
            availableQuestions.push(quiz[i])
        }
    }

    function getNewQuestion(){
        questionNumber.innerHTML = "Question " + (questionCounter + 1) + " of " + quiz.length;
        const questionIndex = availableQuestions[Math.floor(Math.random() * availableQuestions.length)]
      currentQuestion = questionIndex;
        questionText.innerHTML = currentQuestion.q;

        const index1 = availableQuestions.indexOf(questionIndex);
       availableQuestions.splice(index1,1);

       const optionLen = currentQuestion.options.length
        for (let i=0; i<optionLen; i++){
            availableOptions.push(i)
        }
        optionContainer.innerHTML = '';
        let animationDelay = 0.15;


        //create options in html
        for (let i=0; i<optionLen; i++){
            //random
            const optionIndex = availableOptions[Math.floor(Math.random() * availableOptions.length)]
           //get the optionIndex
            const index2 = availableOptions.indexOf(optionIndex);
           //remove optionIndex
            availableOptions.splice(index2,1);
            const option = document.createElement("div");
            option.innerHTML = currentQuestion.options[optionIndex];
            option.id = optionIndex;
            option.style.animationDelay = animationDelay + 's';
            animationDelay = animationDelay + 0.15;
            option.className = "option";
            optionContainer.appendChild(option)
            option.setAttribute("onclick","getResult(this)");

        }

        questionCounter++
    }
    function getResult(element){
       const id = parseInt(element.id);
       console.log(typeof id)
       if (id === currentQuestion.answer){
           //set the green color to the correct option
           element.classList.add("correct")
       }else {
           //set the red color to the wrong option
           element.classList.add("wrong")

           const optionLen = optionContainer.children.length;
           for (let i=0; i<optionLen; i++){
               if (parseInt(optionContainer.children[i].id) === currentQuestion.answer){
                   optionContainer.children[i].classList.add("correct");
               }
           }

       }

       unclickableOptions();
    }

    function unclickableOptions(){
        const optionLen = optionContainer.children.length;
        for (let i=0; i<optionLen; i++){
            optionContainer.children[i].classList.add("already-answered");
        }
    }


function next(){
        if(questionCounter === quiz.length){
            console.log("quiz over");
        }else {
            getNewQuestion();
        }
}

    window.onload = function () {
        //first we will call questions setAvailableQuestions();
        setAvailableQuestions();
        // second we will call getNewQuestion(); function
        getNewQuestion();
    }
</script>


</body>
</html>
