let currentQuestion = 0;  // Número da pergunta atual
let score = 0;  // Pontuação do aluno

let questions = [
    // Perguntas do quiz
    {
        question: "Qual é o sistema operacional mais utilizado no mundo?",
        options: ["Windows", "Linux", "MacOS", "Android"],
        correctAnswer: 0
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
        correctAnswer: 0
    },
    {
        question: "Qual é a linguagem de programação mais utilizada para criação de jogos?",
        options: ["Python", "JavaScript", "C++", "Java"],
        correctAnswer: 2
    },
    {
        question: "Qual é a linguagem de programação mais utilizada para criação de aplicativos móveis?",
        options: ["Python", "JavaScript", "C++", "Java"],
        correctAnswer: 3
    },
    {
        question: "Qual é a linguagem de programação mais utilizada para criação de sites?",
        options: ["Python", "JavaScript", "C++", "Java"],
        correctAnswer: 1
    },
    {
        question: "Qual é a de TI que mais cresce no mundo?",
        options: ["Desenvolvimento", "Cybersecurity", "Arquitetura", "Testes"],
        correctAnswer: 1
    },
];

// Função para carregar a pergunta
function loadQuestion() {
    const question = questions[currentQuestion];
    document.getElementById("question").textContent = question.question;
    const buttons = document.querySelectorAll(".option-btn");
    question.options.forEach((option, index) => {
        buttons[index].textContent = option;
    });
    document.getElementById("result").style.display = "none";
    document.getElementById("finalResult").style.display = "none";
    document.getElementById("quiz").style.display = "block";
}


function checkAnswer(selectedAnswer) {
    const question = questions[currentQuestion];
    const isCorrect = selectedAnswer === question.correctAnswer;

 
    if (isCorrect) {
        score++;
    }

    
    document.getElementById("result").style.display = "block";
    document.getElementById("quiz").style.display = "none";

    
    if (currentQuestion === questions.length - 1) {
        showFinalResult();
    }
}


function nextQuestion() {
    currentQuestion++;
    if (currentQuestion < questions.length) {
        loadQuestion();
    } else {
        showFinalResult();
    }
}


function showFinalResult() {
    document.getElementById("finalResult").style.display = "block";
    document.getElementById("final-score").textContent = `Sua pontuação final é: ${score} de ${questions.length}`;
    document.getElementById("result").style.display = "none"; // Escondendo a seção de resultado
    document.getElementById("quiz").style.display = "none";  // Escondendo a seção de perguntas
}


function restartQuiz() {
    score = 0;
    currentQuestion = 0;
    loadQuestion();
}

// Carregar a primeira pergunta
loadQuestion();
