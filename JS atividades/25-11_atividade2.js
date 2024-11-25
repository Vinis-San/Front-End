class Usuario{
    //id, @, nome, email, bio, genero...
    constructor(id, nickname, nome, email, bio, genero){
        this.id = id;
        this.nickname = nickname;
        this.nome = nome;
        this.email = email;
        this.bio = bio;
        this.genero = genero;
        this.postar = function(pensamento){
            document.getElementById('Resposta').innerHTML += `<div id="post">
            <img src="">
            <h3>${this.nickname}</h3>
            <p>${pensamento}</P>

            </div>

            `
        }
        
    }
}

var user1 = new Usuario(1,'Vinis-San','Vinícius de Sousa Andrade','Vinis@senai.com','O 01 do Senai','Ele/Dele','/imagens/tiopatinhas.jfif')
var user2 = new Usuario(2, 'LaraByte', 'Lara Lima', 'LaraL@senai.com', 'A desenvolvedora brilhante', 'Ela/Dela');
var user3 = new Usuario(3, 'DataGuruTi', 'Tiago Silva', 'TiagoS@senai.com', 'O guru dos dados', 'Ele/Dele');
var user4 = new Usuario(4, 'FerniDesign', 'Fernanda Fernandes', 'FernandaF@senai.com', 'A rainha do design', 'Ela/Dela');



function postarFeed(){
    alert("Postado com Sucesso!")
    let pensamento = document.querySelector('#pensamento').value

    user1.postar(pensamento)    
}