lista_categorias = []

class Categoria{

    constructor(titulo,img,desc,marca){
        this.titulo = titulo
        this.img = img
        this.desc = desc
        this.marca = marca
    }
}

lista_categorias.push(new Categoria('Fanta', 'images/6coca.webp', 'Explosão Cítrica', 'Fanta Laranja'));
lista_categorias.push(new Categoria('Pepsi', 'images/6coca.webp', 'Refrescância Incomparável', 'Pepsi'));
lista_categorias.push(new Categoria('Guarana', 'images/6coca.webp', 'Sabor do Brasil', 'Guaraná Antarctica'));
lista_categorias.push(new Categoria('Sprite', 'images/6coca.webp', 'Leve e Refrescante', 'Sprite'));
lista_categorias.push(new Categoria('Mountain Dew', 'images/6coca.webp', 'Energia e Sabor', 'Mountain Dew'));
lista_categorias.push(new Categoria('7 Up', 'images/6coca.webp', 'Clássica e Refrescante', '7 Up'));
lista_categorias.push(new Categoria('Schweppes', 'images/6coca.webp', 'Sofisticação Efervescente', 'Schweppes'));
lista_categorias.push(new Categoria('Dr Pepper', 'images/6coca.webp', 'Sabor Único', 'Dr Pepper'));
lista_categorias.push(new Categoria('Inca Kola', 'images/6coca.webp', 'Ouro Líquido do Peru', 'Inca Kola'));
lista_categorias.push(new Categoria('Red Bull', 'images/6coca.webp', 'Asas para Sua Energia', 'Red Bull'));

lista_categorias.forEach( Categoria =>{
    document.querySelector('#catalogoitems').innerHTML += `
<div class="card mb-3 mx-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="${Categoria.img}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">${Categoria.titulo}</h5>
        <p class="card-text">${Categoria.desc}</p>
        <p class="card-text"><small class="text-body-secondary">${Categoria.marca}</small></p>
      </div>
    </div>
  </div>
</div>
    `
})