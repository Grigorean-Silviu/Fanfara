const quizData = [
    {
        question: "Din cate linii si cate spatii este alcatuit portativul?",
        a: "2 linii si 3 spatii",
        b: "4 linii si 3 spatii",
        c: "5 linii si 4 spatii",
        d: "4 linii si 5 spatii",
        correct: "c",
    },
    {
        question: "Pe ce linie este pozitionata cheia sol?",
        a: "Pe linia 1",
        b: "Pe linia 3",
        c: "Pe linia 2",
        d: "Pe linia 4",
        correct: "c",
    },
    {
        question: "Ce nota se afla pe linia 1 in cheia sol?",
        a: "Nota Fa",
        b: "Nota Mi",
        c: "Nota La",
        d: "Nota Do",
        correct: "b",
    },
    {
        question: "Pe ce linie este pozitionata cheia Fa?",
        a: "Pe linia 4",
        b: "Pe linia 3",
        c: "Pe linia 2",
        d: "Pe linia 1",
        correct: "a",
    },


];

const quiz= document.getElementById('quiz')
const answerEls = document.querySelectorAll('.answer')
const questionEl = document.getElementById('question')
const a_text = document.getElementById('a_text')
const b_text = document.getElementById('b_text')
const c_text = document.getElementById('c_text')
const d_text = document.getElementById('d_text')
const submitBtn = document.getElementById('submit')


let currentQuiz = 0
let score = 0

loadQuiz()

function loadQuiz() {

    deselectAnswers()

    const currentQuizData = quizData[currentQuiz]

    questionEl.innerText = currentQuizData.question
    a_text.innerText = currentQuizData.a
    b_text.innerText = currentQuizData.b
    c_text.innerText = currentQuizData.c
    d_text.innerText = currentQuizData.d
}

function deselectAnswers() {
    answerEls.forEach(answerEl => answerEl.checked = false)
}

function getSelected() {
    let answer
    answerEls.forEach(answerEl => {
        if(answerEl.checked) {
            answer = answerEl.id
        }
    })
    return answer
}


submitBtn.addEventListener('click', () => {
    const answer = getSelected()
    if(answer) {
        if(answer === quizData[currentQuiz].correct) {
            score++
        }

        currentQuiz++

        if(currentQuiz < quizData.length) {
            loadQuiz()
        } else {
            quiz.innerHTML = `
           <h2>Ai raspuns corect la ${score}/${quizData.length} din intrebari</h2>

           <button onclick="location.reload()">Reincearca</button>
           `
        }
    }
})

var count = 15;
var interval = setInterval(function(){
    document.getElementById('count').innerHTML=count;
    count--;
    if (count === 0){
        clearInterval(interval);
        document.getElementById('count').innerHTML='Done';
        // or...
        alert("You're out of time!");
    }
}, 1000);