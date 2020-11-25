
    const startButton = document.getElementById('html')
    const nextButton = document.getElementById('next-btn')
    const questionContainerElement = document.getElementById
    ('question-container')
    const questionsE = document.getElementById('question')
    const answerB = document.getElementById
    ('answer-buttons')
    let shuffledQuestions, currentQuestions

    startButton.addEventListener('click', startGame)
    nextButton.addEventListener('click' , () => {
    currentQuestions++
    startNextQuestion()
})


    function startGame(){
    startButton.classList.add('hide')
    shuffledQuestions = questions.sort(() => Math.random() - .5)
    currentQuestions = 0
    questionContainerElement.classList.remove('hide')
    startNextQuestion()
}
    function startNextQuestion(){
    resetState()
    showQuestion(shuffledQuestions[currentQuestions])

}
    function showQuestion(questions){
    questionsE.innerText = questions.questions
    questions.answer.forEach(answer => {
    const button = document.createElement('button')
    button.innerText = answer.text
    button.classList.add('btn')
    if (answer.correct) {
    button.dataset.correct = answer.correct
}
    button.addEventListener('click', selectAnswer)
    answerB.appendChild(button)
})
}
    function resetState(){
    nextButton.classList.add('hide')
    while (answerB.firstChild){
    answerB.removeChild
    (answerB.firstChild)
}
}
    function selectAnswer(e){
    const selectedB = e.target
    const correct = selectedB.dataset.correct
    setStatusClass(document.body, correct)
    Array.from(answerB.children).forEach(button => {
    setStatusClass(button, button.dataset.correct)
})
    if (shuffledQuestions.length > currentQuestions + 1) {
    nextButton.classList.remove('hide')
}else {
    startButton.innerText = 'Restart'
    startButton.classList.remove('hide')
}
}
    function setStatusClass(element, correct){
    clearStatusClass(element)
    if (correct){
    element.classList.add('correct')
}else {
    element.classList.add('wrong')
}
}
    function clearStatusClass(element){
    element.classList.remove('correct')
    element.classList.remove('correct')
}
    const questions = [
    {
        questions: 'What is the correct HTML for referring to an external style sheet?',
        answer: [
    { text: '\<link rel="stylesheet" type="text/css" href="mystyle.css">', correct: true},
    { text: '\<style src="mystyle.css"> ', correct: false},
    { text: '\<stylesheet>mystyle.css</stylesheet>', correct: false}
        ]
    },
    {
        questions: 'Which HTML tag is used to define an internal style sheet?',
        answer: [
    { text: '\<script>', correct: false},
    { text: ' \<style>  ', correct: true},
    { text: '/<style>', correct: false},
    { text: '\<css>', correct: false}
        ]
    },
    {
        questions: 'Which HTML attribute is used to define inline styles?',
        answer: [
    { text: '$style', correct: true},
    { text: 'styles', correct: false},
    { text: 'font', correct: false},
    { text: 'class', correct: false}
        ]
    },
    {
        questions: 'Which is the correct CSS syntax?',
        answer: [
    { text: 'body:color=black;', correct: false},
    { text: 'body {color: black;}', correct: true},
    { text: '{body;color:black;}', correct: false},
    { text: '{body:color=black;}', correct: false}
        ]
    },
    {
        questions: 'Which property is used to change the background color?',
        answer: [
    { text: 'background-color', correct: true},
    { text: 'background=color', correct: false},
    { text: 'color', correct: false},
    { text: 'bgcolor', correct: false}
        ]
    },
    {
        questions: 'How do you insert a comment in a CSS file?',
        answer: [
    { text: '\' this is a comment', correct: false},
    { text: '/* this is a comment */ ', correct: true},
    { text: '// this is a comment\n ', correct: false},
    { text: '// this is a comment //', correct: false}
        ]
    },
    {
        questions: 'Which CSS property controls the text size?',
        answer: [
    { text: 'text-style ', correct: false},
    { text: 'font-style', correct: false},
    { text: 'text-size', correct: false},
    { text: 'font-size ', correct: true}
        ]
    },
    {
        questions: 'How do you select an element with id \'demo\'?',
        answer: [
    { text: '*demo', correct: false},
    { text: '#demo  ', correct: true},
    { text: 'demo', correct: false},
    { text: '.demo', correct: false}
        ]
    }

    ]



