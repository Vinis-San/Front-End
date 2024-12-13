//CRUD
//CREATE - criar
//READ -Ler
//UPDATE - Atualizar
//DELETE - Deletar


document.querySelector('#logar').addEventListener('click', logar)

function logar() {
    let nome_digitado = document.querySelector('#nome').value
    let nome_salvo = ''
    let senha_digitada = document.querySelector('#senha').value
    let senha_salva = ''
    let login = false

    fetch('13-12.json').then((response) => {
        return response.json()
    }).then((dados) => {
        dados.usuarios.map((informacoes) => {
            nome_salvo = informacoes.nome
            senha_salva = informacoes.senha

            console.log(nome_salvo+ " " + senha_salva)

            if (nome_digitado == nome_salvo & senha_digitada == senha_salva) {
                login = true
            }
            if (login) {
                document.querySelector("#resposta").innerHTML = "Login Efetuado com sucesso!"
                localStorage.setItem('nome',nome_digitado)
                window.location = 'home-13-12.html'
            } else {
                document.querySelector("#resposta").innerHTML = "Usuário ou/e senha Incorretos"
            }
        })
    })
}


