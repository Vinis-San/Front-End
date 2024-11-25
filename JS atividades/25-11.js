class Cliente {

    nome;
    datanasc;
    cpf;
    email;
    telefone;
    tipodeconta;
    saldo;
    depositar(valor) {
        if (valor <= 0) {
            console.log('Operação Não permitida')

        } else {
            this.saldo += valor
            console.log(`O valor de ${valor} foi depositado com sucesso!`)
        }
    }
    pix(valor) {
        if (valor <= this.saldo) {
            console.log('Saldo Insuficiente')
        } else {
            this.saldo += valor
            console.log(`Pix de valor ${valor} foi efetuado`)

        }
    }
}

var cliente1 = new Cliente
cliente1.nome = 'Leo'
cliente1.datanasc = '9999-99-99'
cliente1.cpf = 111111111 - 11
cliente1.email = 'leogameplay@apple.com'
cliente1.telefone = +5561999999999
cliente1.saldo = 0
cliente1.pix(50);
cliente1.depositar(100);

console.log(cliente1)


/*
// Adicionando um evento ao formulário para quando ele for enviado
document.getElementById('clienteForm').addEventListener('submit', function (event) {
    event.preventDefault(); // Prevenir o envio do formulário para a página de destino

    // Capturando o valor do campo de nome
    const nome = document.getElementById('nome').value;
    const datanasc = document.getElementById('datanasc').value;
    const cpf = document.getElementById('cpf').value;
    const email = document.getElementById('email').value;
    const telefone = document.getElementById('telefone').value;
    const saldo = document.getElementById('saldo').value;

    // Atribuindo o valor do campo à variável cliente1.nome
    cliente1.nome = nome;
    cliente1.datanasc = datanasc;
    cliente1.cpf = cpf;
    cliente1.email = email;
    cliente1.telefone = telefone;
    cliente1.saldo = saldo;

    // Mostrando o valor de cliente1.nome no console (para verificar)
    console.log(cliente1.nome);
    console.log(cliente1.datanasc);
    console.log(cliente1.cpf);
    console.log(cliente1.email);
    console.log(cliente1.telefone);
    console.log(cliente1.saldo);

    // Exibindo o valor de cliente1.nome no elemento <div> com id 'displayNome'
    document.getElementById('displayNome').textContent = `
    Nome do cliente: ${cliente1.nome} 
    Data de Nascimento: ${cliente1.datanasc}
    CPF: ${cliente1.cpf}
    Email: ${cliente1.email}
    Telefone: ${cliente1.telefone}
    Saldo: ${cliente1.saldo}
    
    `;
});

*/