Algoritmo "semnome"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 25/10/2024
Var
   // Seção de Declarações das variáveis
   numero: inteiro
   resto: inteiro
   resultado: inteiro
Inicio
   // Seção de Comandos, procedimento, funções, operadores, etc...
   escreval("Olá Sou o Oráculo, Escreva um número e saberei se ele é Par ou Ímpar")
   limpatela
   escreva("Escreva um número: ")
   leia(numero)
   resto <- numero % 2

   se (resto = 0) então
      escreval("O seu número é Par!")
   senão
      se (resto > 0)então
         escreval("numero Ímpar")
      senão
         escreval("numero Par")

      fimse
   fimse
Fimalgoritmo