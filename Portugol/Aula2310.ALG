Algoritmo "imc"
// Disciplina   : [Linguagem e L�gica de Programa��o]
// Professor   : Victor Rohod
// Descri��o   : Aqui voc� descreve o que o programa faz! (fun��o)
// Autor(a)    : Vinicius Andrade
// Data atual  : 23/10/2024
Var
// Se��o de Declara��es das vari�veis 
    peso : real
    altura : real
    imc : real

Inicio
// Por algum motivo o Interpretador faz os calculos, mostra na �rea de Visualiza��o
//mas d� um erro no final que n�o sei corrigir
    escreval("Calculadora de IMC")
    escreva("Escreva seu peso:")
    leia(peso)
    limpatela

    escreva("Escreva sua altura:")
    leia(altura)

    imc <- peso / (altura * altura)

    se (imc < 18.5) ent�o
        escreval("Voc� est� abaixo do peso com imc de:", imc)
    sen�o se (18.5 <= imc e imc < 24.9) ent�o
        escreval("Voc� est� com o peso normal com imc de:", imc)
    sen�o se (24.9 <= imc e imc < 29.9) ent�o
        escreval("Voc� est� com sobrepeso, com imc de:", imc)
    sen�o
        escreval("Voc� est� com obesidade")
    fimse
Fimalgoritmo
