 
 function registrarnome(){
    nome = document.getElementById('inputnome').value
    btnregister = document.getElementById(inputnome)
    document.querySelector('#CATALOGO').innerHTML= `
    <div id="nomeDiv">
   <p> Olá ${nome}  Seja bem vindo ao Projeto Arma X</p>
    </div>
    `
}





//Utilizando ChatGPT
let pessoas = [
    { "nome": "Ana", "idade": 28 },
    { "nome": "Bruno", "idade": 32 },
    { "nome": "Carlos", "idade": 25 },
    { "nome": "Daniela", "idade": 29 },
    { "nome": "Eduardo", "idade": 35 },
    { "nome": "Fernanda", "idade": 27 },
    { "nome": "Gustavo", "idade": 30 },
    { "nome": "Heloísa", "idade": 22 },
    { "nome": "Isabela", "idade": 26 },
    { "nome": "João", "idade": 31 }
];

document.addEventListener('DOMContentLoaded', function() {
    carregarPessoas();
});

function carregarPessoas() {
    const tabela = document.getElementById('pessoas');
    tabela.innerHTML = ''; // Limpa a tabela antes de recarregar os dados

    pessoas.forEach(pessoa => {
        const row = document.createElement('tr');

        const nomeCell = document.createElement('td');
        nomeCell.textContent = pessoa.nome;
        row.appendChild(nomeCell);

        const idadeCell = document.createElement('td');
        idadeCell.textContent = pessoa.idade;
        row.appendChild(idadeCell);

        tabela.appendChild(row);
    });
}

function adicionarPessoa(event) {
    event.preventDefault(); // Evita o recarregamento da página
    const nome = document.getElementById('nome').value;
    const idade = document.getElementById('idade').value;

    if (nome && idade) {
        const pessoa = { nome: nome, idade: Number(idade) };
        pessoas.push(pessoa);
        carregarPessoas();
        document.getElementById('nome').value = '';
        document.getElementById('idade').value = '';
    } else {
        alert('Por favor, preencha todos os campos.');
    }
}
