Algoritmo "semnome"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 30/10/2024
Var
   // Seção de Declarações das variáveis
   contador: inteiro
   result: inteiro

Inicio
   // Seção de Comandos, procedimento, funções, operadores, etc...
   contador <- 0
   enquanto (contador < 100) faca
      contador <- contador + 1
      result <- contador % 10
      se  (result = 0) entao
         escreval("Múltiplo de 10")
      senao
         escreval(contador)
      fimse
   fimenquanto

Fimalgoritmo