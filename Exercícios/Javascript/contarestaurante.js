var valorconta
var nclientes
var resultado
valorconta = prompt("Quanto deu a conta da mesa? ")

nclientes = prompt("tem quantos clientes na mesa? ")

resultado = Number(valorconta) /  Number(nclientes)
alert("O valor divido deu R$" +resultado+" por pessoa!")