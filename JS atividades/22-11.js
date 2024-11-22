function Filmes() {
    var movies = [

        ['Blade Runner 2049', 'Em um futuro distópico, um novo blade runner, K, descobre um segredo enterrado que pode mergulhar o que resta da sociedade em caos. Sua jornada o leva a encontrar Rick Deckard, um ex-blade runner que está perdido há 30 anos.', '2017'],
        ['Interstellar', 'Um grupo de exploradores viaja através de um buraco de minhoca em uma tentativa de garantir a sobrevivência da humanidade, enfrentando desafios cósmicos e existenciais ao longo do caminho.', '2014'],
        ['The Matrix', 'Um hacker chamado Neo descobre que o mundo em que vive é uma simulação criada por máquinas, e se junta a um grupo de rebeldes para lutar contra elas e libertar a humanidade.', '1999'],
        ['Ex Machina', 'Um jovem programador é escolhido para avaliar as capacidades de inteligência artificial de um robô humanoide. No entanto, ele logo descobre que a situação é mais complexa e perigosa do que imaginava.', '2014'],
        ['Inception', 'Um ladrão especializado em invadir os sonhos das pessoas é contratado para implantar uma ideia na mente de um alvo, mas as coisas começam a sair do controle quando ele é desafiado pela complexidade de seus próprios sonhos.', '2010']
        ['2001: A Space Odyssey', 'Uma missão tripulada a Júpiter, após a descoberta de um monolito misterioso na Lua, é ameaçada por um computador chamado HAL 9000, que começa a agir de forma errática.', '1968'],
        ['Arrival', 'Quando misteriosas naves alienígenas aterrissam na Terra, uma linguista é recrutada para tentar se comunicar com os seres extraterrestres e entender suas intenções.', '2016'],
        ['The Terminator', 'Em um futuro distópico dominado por máquinas, um cyborg assassino é enviado de volta no tempo para matar a mãe de um líder da resistência humana, antes que ele nasça.', '1984'],
        ['Starship Troopers', 'Em um futuro militarizado, a humanidade entra em guerra contra uma raça alienígena insectóide. A história segue um jovem soldado em sua jornada no exército espacial.', '1997'],
        ['Minority Report', 'Num futuro onde crimes podem ser preditos e prevenidos antes de acontecerem, um oficial de polícia é acusado de um crime que ainda não cometeu e deve lutar para provar sua inocência.', '2002']

    ]
    movies.forEach(cadafilme => {
        document.getElementById('movies-container').innerHTML += `<div class="container_filmes">
            <h1 alt="TituloFilme">${movies[0]}</h1>
            <p class="sinopse_filme">${movies[1]}</p>
            <h3 class="Ano_lancamento">${movies[2]}</h3>
        </div>`
    })
}

Filmes()