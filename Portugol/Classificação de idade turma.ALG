Algoritmo "semnome"
// Disciplina   : [Linguagem e L�gica de Programa��o]
// Professor   : Antonio Carlos Nicolodi
// Descri��o   : Aqui voc� descreve o que o programa faz! (fun��o)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 29/10/2024
Var
   // Se��o de Declara��es das vari�veis
   idade : inteiro

Procedimento descobriridade(idade:inteiro)
inicio
   se  (5 <= idade) e (idade <= 7) entao
      escreval("Turma escolhida: InfantilA")
   senao
      se (8 <= idade) e (idade <= 11) entao
         escreval("Turma escolhida: InfantilB")
      senao
         se    (12 <= idade) e (idade <= 13) entao
            escreval("Turma escolhida: JuvenilA")
         senao
            se (14 <= idade) e (idade <= 17) entao
               escreval("Turma escolhida: JuvenilB")
            senao
               se (idade>= 18)entao
                  escreval("Turma escolhida: Adulto")
               senao
                  escreval("Muito novo para participar das aulas!")
               fimse
            fimse
         fimse
      fimse
   fimse
fimprocedimento

Inicio
   // Se��o de Comandos, procedimento, fun��es, operadores, etc...
   escreva("Digite a idade do nadador para saber em qual turma ele ficar�: ")
   leia(idade)
   descobriridade(idade)
Fimalgoritmo