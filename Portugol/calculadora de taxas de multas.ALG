Algoritmo "semnome"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 25/10/2024
Var
   // Seção de Declarações das variáveis
P : REAL
Exc : REAL
M : REAL

Inicio
   // Seção de Comandos, procedimento, funções, operadores, etc...
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
   Senão
      Escreval("Peso Excedente: " ,Exc)
      Escreval("  ")
      Escreval("Valor da Multa: R$" ,M)
   fimse

Fimalgoritmo