class Usuario {
  //id, @, nome, email, bio, genero...
  constructor(foto, id, nickname, nome, email, bio, genero) {
    this.foto = foto;
    this.id = id;
    this.nickname = nickname;
    this.nome = nome;
    this.email = email;
    this.bio = bio;
    this.genero = genero;
    this.postar = function (pensamento) {
      const nomeArray = this.nome.split(" ");
      const primeiroNome = nomeArray[0];
      const ultimoNome = nomeArray[nomeArray.length - 1];
      const nomeFormatado = `${primeiroNome} ${ultimoNome}`;
      const dataPostagem = new Date().toLocaleString();

      document.getElementById("Resposta").innerHTML += `<div id="post">
            <div id="user">
                <img src="${this.foto}">
                <div id="nomes"><h4>${nomeFormatado}</h4>
                <h3>${this.nickname}</h3>
                <small>${dataPostagem}</small>
            </div>
             </div>
            <p>${pensamento}</P>
            </div>`;
    };
  }
}

var user1 = new Usuario(
  "/imagens/tiopatinhas.jfif",
  1,
  "Vinis-San",
  "Vinícius de Sousa Andrade",
  "Vinis@senai.com",
  "O 01 do Senai",
  "Ele/Dele"
);
var user2 = new Usuario(
  2,
  "LaraByte",
  "Lara Lima",
  "LaraL@senai.com",
  "A desenvolvedora brilhante",
  "Ela/Dela"
);
var user3 = new Usuario(
  3,
  "DataGuruTi",
  "Tiago Silva",
  "TiagoS@senai.com",
  "O guru dos dados",
  "Ele/Dele"
);
var user4 = new Usuario(
  4,
  "FerniDesign",
  "Fernanda Fernandes",
  "FernandaF@senai.com",
  "A rainha do design",
  "Ela/Dela"
);

function postarFeed() {
  let pensamento = document.querySelector("#pensamento").value;

  if (pensamento.trim() === "") {
    alert("Por favor, escreva algo antes de postar!");
    return;
  }
  user1.postar(pensamento);
}
