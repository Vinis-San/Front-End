Algoritmo "semnome"
// Disciplina   : [Linguagem e L�gica de Programa��o]
// Professor   : Antonio Carlos Nicolodi
// Descri��o   : Aqui voc� descreve o que o programa faz! (fun��o)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 25/10/2024
Var
   // Se��o de Declara��es das vari�veis
   numero: inteiro
   resto: inteiro
   resultado: inteiro
Inicio
   // Se��o de Comandos, procedimento, fun��es, operadores, etc...
   escreval("Ol� Sou o Or�culo, Escreva um n�mero e saberei se ele � Par ou �mpar")
   limpatela
   escreva("Escreva um n�mero: ")
   leia(numero)
   resto <- numero % 2

   se (resto = 0) ent�o
      escreval("O seu n�mero � Par!")
   sen�o
      se (resto > 0)ent�o
         escreval("numero �mpar")
      sen�o
         escreval("numero Par")

      fimse
   fimse
Fimalgoritmo