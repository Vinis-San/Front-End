Algoritmo "semnome"
// Disciplina   : [Linguagem e L�gica de Programa��o]
// Professor   : Antonio Carlos Nicolodi
// Descri��o   : Aqui voc� descreve o que o programa faz! (fun��o)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 25/10/2024
Var
   // Se��o de Declara��es das vari�veis
P : REAL
Exc : REAL
M : REAL

Inicio
   // Se��o de Comandos, procedimento, fun��es, operadores, etc...
   Escreval("Calculadora de Taxas")
   Escreval("____________________")
   Escreval("    ")
   Escreval("Digite a Qtd de Kilograma dos peixes")
   Leia(P)
   Exc <- P - 50
   M <- Exc * 4
   se (P > 50) entao
      Escreval("Peso Excedente: " ,Exc)
      Escreval("  ")
      Escreval("Valor da Multa: R$" ,M)
   Sen�o
      Escreval("Peso Excedente: " ,Exc)
      Escreval("  ")
      Escreval("Valor da Multa: R$" ,M)
   fimse

Fimalgoritmo