Algoritmo "semnome"
// Disciplina   : [Linguagem e L�gica de Programa��o]
// Professor   : Antonio Carlos Nicolodi
// Descri��o   : Aqui voc� descreve o que o programa faz! (fun��o)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 30/10/2024
Var
   // Se��o de Declara��es das vari�veis
   contador: inteiro
   result: inteiro

Inicio
   // Se��o de Comandos, procedimento, fun��es, operadores, etc...
   contador <- 0
   enquanto (contador < 100) faca
      contador <- contador + 1
      result <- contador % 10
      se  (result = 0) entao
         escreval("M�ltiplo de 10")
      senao
         escreval(contador)
      fimse
   fimenquanto

Fimalgoritmo