let currentQuestion = 0;  // Número da pergunta atual
let questions = [
    {
        question: "Qual é o sistema operacional mais utilizado no mundo?",
        options: ["Windows", "Linux", "MacOS", "Android"],
        correctAnswer: 1
    },
    {
        question: "Quem criou a linguagem de programação Java?",
        options: ["James Gosling", "Dennis Ritchie", "Bjarne Stroustrup", "Guido van Rossum"],
        correctAnswer: 0
    },
    {
        question: "O que é um 'bug' no contexto de programação?",
        options: ["Erro no código", "Novo recurso", "Tipo de computador", "Nada disso"],
        correctAnswer: 0
    },  
    {
        question: "Qual é a linguagem de programação mais popular no mundo?",
        options: ["Python", "JavaScript", "C++", "Java"],
        correctAnswer: 1
    },
    {
        question: "Qual é a linguagem de programação mais utilizada para criação de jogos?",
        options: ["Python", "JavaScript", "C++", "Java"],
        correctAnswer: 1
    },
    {
        question: "Qual é a linguagem de programação mais utilizada para criação de aplicativos móveis?",
        options: ["Python", "JavaScript", "C++", "Java"],
        correctAnswer: 1
    },
    {
        question: "Qual é a linguagem de programação mais utilizada para criação de sites?",
        options: ["Python", "JavaScript", "C++", "Java"],
        correctAnswer: 2
    },
    {
        question: "Qual é a de TI que mais cresce no mundo ?",
        options: ["Desenvolvimento","cybersecurity","Arquitetura","Testes"],
        correctAnswer: 2
    },

];

function loadQuestion() {
    const question = questions[currentQuestion];
    document.getElementById("question").textContent = question.question;
    const buttons = document.querySelectorAll(".option-btn");
    question.options.forEach((option, index) => {
        buttons[index].textContent = option;
    });
    document.getElementById("result").style.display = "none";
    document.getElementById("quiz").style.display = "block";
}

function checkAnswer(selectedAnswer) {
    const question = questions[currentQuestion];
    const isCorrect = selectedAnswer === question.correctAnswer;
    const resultText = document.getElementById("result-text");

    if (isCorrect) {
        resultText.textContent = "Resposta correta!";
    } else {
        resultText.textContent = "Resposta errada! Tente novamente!";
    }

    document.getElementById("result").style.display = "block";
    document.getElementById("quiz").style.display = "none";
}

function nextQuestion() {
    currentQuestion++;
    if (currentQuestion < questions.length) {
        loadQuestion();
    } else {
        document.getElementById("quiz").innerHTML = "<h2>Parabéns, você completou o quiz!</h2>";
    }
}

loadQuestion();  // Carregar a primeira pergunta
