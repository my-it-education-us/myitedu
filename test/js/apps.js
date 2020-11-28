

    const questionNumber = document.querySelector(".question-number");
    const questionText = document.querySelector(".question-text")
    const optionContainer = document.querySelector(".option-container")
    const answersIndicatorContainer = document.querySelector(".answers-indicator")
    const homeBox = document.querySelector(".home_box");
    const quizBox = document.querySelector(".quiz-box");
    const resultBox = document.querySelector(".result-box");


    let questionCounter = 0;
    let currentQuestion;
    let availableQuestions = [];
    let availableOptions = [];
    let correctAnswer = 0;
    let attempt = 0;

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
    if (id === currentQuestion.answer){
    //set the green color to the correct option
    element.classList.add("correct")
    updateAnswerIndicator("correct");
    correctAnswer++;
}else {
    //set the red color to the wrong option
    element.classList.add("wrong")
    updateAnswerIndicator("wrong");

    const optionLen = optionContainer.children.length;
    for (let i=0; i<optionLen; i++){
    if (parseInt(optionContainer.children[i].id) === currentQuestion.answer){
    optionContainer.children[i].classList.add("correct");
}
}

}
    attempt++;
    unclickableOptions();
}

    function unclickableOptions(){
    const optionLen = optionContainer.children.length;
    for (let i=0; i<optionLen; i++){
    optionContainer.children[i].classList.add("already-answered");
}
}
    function answerIndicator(){
    answersIndicatorContainer.innerHTML = '';
    const totalQuestion = quiz.length;
    for (let i=0; i<totalQuestion; i++){
    const indicator = document.createElement("div");
    answersIndicatorContainer.appendChild(indicator);
}
}
    function  updateAnswerIndicator(markType){
    answersIndicatorContainer.children[questionCounter-1].classList.add(markType)
}

    function next(){
    if(questionCounter === quiz.length){
    console.log("quiz over");
    quizOver();
}else {
    getNewQuestion();
}
}
    function quizOver(){
    quizBox.classList.add("hide");
    resultBox.classList.remove("hide");
    quizResult();
}

    function quizResult(){
    resultBox.querySelector(".total-question").innerHTML = quiz.length;
    resultBox.querySelector(".total-attempt").innerHTML = attempt;
    resultBox.querySelector(".total-correct").innerHTML = correctAnswer;
    resultBox.querySelector(".total-wrong").innerHTML = attempt - correctAnswer;
    const percentage = (correctAnswer/quiz.length)*100;
    resultBox.querySelector(".percentage").innerHTML = percentage.toFixed(2) + "%";
    resultBox.querySelector(".total-score").innerHTML = correctAnswer +" / " + quiz.length;
}
    function tryAgainQuiz(){
    resultBox.classList.add("hide");
    quizBox.classList.remove("hide");
    resetQuiz();
    start();
}

    function goToHome(){
    resultBox.classList.add("hide");
    homeBox.classList.remove("hide");
    resetQuiz();
}

    function  resetQuiz(){
    questionCounter = 0;
    correctAnswer = 0;
    attempt = 0;

}



    //  ##### STARTING POINT ####

    function start(){
    //hide home box
    homeBox.classList.add("hide");
    //show quiz Box
    quizBox.classList.remove("hide");

    //first we will call questions setAvailableQuestions();
    setAvailableQuestions();
    // second we will call getNewQuestion(); function
    getNewQuestion();

    answerIndicator();
}

    window.onload = function () {
    homeBox.querySelector(".total-question").innerHTML = quiz.length;
}
