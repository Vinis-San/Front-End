Algoritmo "semnome"
// Disciplina   : [Linguagem e L�gica de Programa��o]
// Professor   : Antonio Carlos Nicolodi
// Descri��o   : Aqui voc� descreve o que o programa faz! (fun��o)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 25/10/2024
Var
   // Se��o de Declara��es das vari�veis
   TimeA: caracter
   TimeB: caracter
   Agol: inteiro
   Bgol: inteiro

Inicio
   // Se��o de Comandos, procedimento, fun��es, operadores, etc...
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