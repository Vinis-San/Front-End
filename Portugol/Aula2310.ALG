Algoritmo "imc"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Victor Rohod
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Vinicius Andrade
// Data atual  : 23/10/2024
Var
// Seção de Declarações das variáveis 
    peso : real
    altura : real
    imc : real

Inicio
// Por algum motivo o Interpretador faz os calculos, mostra na Área de Visualização
//mas dá um erro no final que não sei corrigir
    escreval("Calculadora de IMC")
    escreva("Escreva seu peso:")
    leia(peso)
    limpatela

    escreva("Escreva sua altura:")
    leia(altura)

    imc <- peso / (altura * altura)

    se (imc < 18.5) então
        escreval("Você está abaixo do peso com imc de:", imc)
    senão se (18.5 <= imc e imc < 24.9) então
        escreval("Você está com o peso normal com imc de:", imc)
    senão se (24.9 <= imc e imc < 29.9) então
        escreval("Você está com sobrepeso, com imc de:", imc)
    senão
        escreval("Você está com obesidade")
    fimse
Fimalgoritmo
