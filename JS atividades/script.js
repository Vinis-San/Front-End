function atividade1() {
    alert("Bem Vindo a Vendinha")
    let escolha = prompt("Escolha seu Produto:  A - Bolo no pote / B - Pote de Açaí")
    switch (escolha) {
        case 'A':
            alert('Você escolheu bolo no pote!')
            break;
        case 'B':
            alert("Você escolheu o pote de Açaí!")
            break;
        default:
            alert("Opção Inválida!")
    }
}

function atividade2() {
    alert("Bem vindo ao Site!")
    let idade = prompt("Antes de entrar no site, digite sua idade: ")
    if (idade >= 18) {
        alert("Seja bem vindo ao WebSite!")
        document.querySelector('body').innerHTML = "Site de Apostas!!!"
    }
    else {
        alert("Idade não permitida!")
        window.location = 'https://www.youtube.com/watch?v=1i7p0vTGcBk'
    }
}


function atividade4() {
    alert("Bem vindo ao verificador de notas!")
    nota = prompt("Escreva sua nota, Lembrando que a média é 7: ")
    if (nota >= 7) {
        alert("Parabéns, você passou!")
    }
    else {
        alert("Infelizmente você reprovou!")
        window.location = 'https://www.alura.com.br/'
    }
}

//atv 5 dias da semana

function diasemana() {

    numb = Number(prompt("Bem vindo ao dias da semana, escolha um numero de 1 a 7: "))

    switch (numb) {
        case 1:
            alert("Segunda-Feira")
            break

        case 2:
            alert("Terça-Feira")
            break
        case 3:
            alert("Quarta-Feira")
            break
        case 4:
            alert("Quinta-Feira")
            break

        case 5:
            alert("Sexta-Feira")
            break
        case 6:
            alert("Sábado")
            break
        case 7:
            alert("Domingo")
            break


    }
}
