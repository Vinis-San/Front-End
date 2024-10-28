Algoritmo "semnome"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 25/10/2024
Var
   // Seção de Declarações das variáveis
   TimeA: caracter
   TimeB: caracter
   Agol: inteiro
   Bgol: inteiro

Inicio
   // Seção de Comandos, procedimento, funções, operadores, etc...
   Escreval("World Cup 2028")
   Escreval("______________")
   Escreval("  ")
   Escreval("Digite o nome do Time A")
   Leia(TimeA)
   Escreval("Digite o nome do Time B")
   Leia(TimeB)
   limpatela
   Escreval("Digite o saldo de gols do ",TimeA)
   Leia(Agol)
   Escreval("Agora digite o saldo de gols do ",TimeB)
   Leia(Bgol)

   se(Agol > Bgol) entao
      Escreva("O time " , TimeA, " ganhou com ",Agol," Gol(s)!")
   senao
      se(Bgol > Agol)entao
         Escreva("O time " , TimeB, " ganhou com ",Bgol," Gol(s)!")
      senao
         Escreval("Deu empate!")
      fimse
   fimse



Fimalgoritmo