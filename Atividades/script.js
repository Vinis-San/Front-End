const produtos = [
    {
        nome: 'Bolo de Pote', 
        imagem: 'Bolo-de-Pote-Brigadeiro.jpg', 
        descricao: 'O bolo no pote é uma opção deliciosa e charmosa para saborear. A montagem é feita em camadas, intercalando bolo, recheio e cobertura. O resultado é um bolo compacto, úmido e cheio de sabores. Esses bolos no pote são perfeitos para presentear, para festas ou até mesmo para vender.', 
        link: 'https://www.ifood.com.br/',   
    },
    {
        nome: 'Torta de Limão', 
        imagem: 'Bolo-de-Pote-Brigadeiro.jpg', 
        descricao: 'A torta de limão é uma sobremesa refrescante e saborosa, com uma crosta crocante e um recheio cremoso de limão. Ideal para quem gosta de sabores cítricos.', 
        link: 'https://www.ifood.com.br/', 
    },
    {
        nome: 'Brigadeiro Gourmet', 
        imagem: 'Bolo-de-Pote-Brigadeiro.jpg', 
        descricao: 'O brigadeiro gourmet é feito com ingredientes de alta qualidade, proporcionando um sabor irresistível e uma textura macia. Perfeito para festas e eventos.', 
        link: 'https://www.ifood.com.br/', 
    },
    {
        nome: 'Pudim de Leite', 
        imagem: 'Bolo-de-Pote-Brigadeiro.jpg', 
        descricao: 'O pudim de leite é uma sobremesa clássica, conhecida por sua textura cremosa e sabor doce. Um verdadeiro sucesso em qualquer ocasião.', 
        link: 'https://www.ifood.com.br/', 
    },
    {
        nome: 'Cupcake de Chocolate', 
        imagem: 'Bolo-de-Pote-Brigadeiro.jpg', 
        descricao: 'Os cupcakes de chocolate são pequenos bolinhos cheios de sabor, decorados com uma deliciosa cobertura de chocolate. Perfeitos para aniversários e celebrações.', 
        link: 'https://www.ifood.com.br/', 
    },
    {
        nome: 'Cookie de Chocolate', 
        imagem: 'Bolo-de-Pote-Brigadeiro.jpg', 
        descricao: 'Os cookies de chocolate são crocantes por fora e macios por dentro, com pedaços generosos de chocolate. Irresistíveis a qualquer hora do dia.', 
        link: 'https://www.ifood.com.br/', 
    },
    {
        nome: 'Brownie de Nozes', 
        imagem: 'Bolo-de-Pote-Brigadeiro.jpg', 
        descricao: 'O brownie de nozes é uma sobremesa rica e densa, cheia de pedaços de nozes crocantes. Ideal para acompanhar um café.', 
        link: 'https://www.ifood.com.br/', 
    },
    {
        nome: 'Cheesecake de Morango', 
        imagem: 'Bolo-de-Pote-Brigadeiro.jpg', 
        descricao: 'O cheesecake de morango tem uma base crocante e um recheio cremoso, coberto com uma camada de morangos frescos. Uma sobremesa elegante e deliciosa.', 
        link: 'https://www.ifood.com.br/', 
    },
    {
        nome: 'Macarons', 
        imagem: 'Bolo-de-Pote-Brigadeiro.jpg', 
        descricao: 'Os macarons são delicados biscoitos franceses, crocantes por fora e macios por dentro, disponíveis em diversos sabores e cores. Um toque de sofisticação para qualquer evento.', 
        link: 'https://www.ifood.com.br/', 
    },
    {
        nome: 'Palha Italiana', 
        imagem: 'Bolo-de-Pote-Brigadeiro.jpg', 
        descricao: 'A palha italiana é uma sobremesa que combina brigadeiro com biscoitos triturados, formando um doce irresistível e cheio de texturas. Perfeito para qualquer momento.', 
        link: 'https://www.ifood.com.br/', 
    },
];


const conteudoDiv = document.getElementById('conteudo');

produtos.forEach(produto => {
    const card = document.createElement('div');
    card.className = 'cardproduto';
    card.innerHTML = `<img src="${produto.imagem}" id="foto_${produto.nome.replace(/\s+/g, '_')}">
<h3>${produto.nome}</h3>
<div id="description">
  <p>${produto.descricao}</p>
</div>
<div>
  <button type="button" id="btncomprar" onclick="window.location.href='${produto.link}'">
    <svg viewBox="0 0 16 16" class="bi bi-cart-check" height="24" width="24" xmlns="http://www.w3.org/2000/svg" fill="#fff">
      <path d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"></path>
      <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
    </svg>
    <p class="text">Comprar</p>
  </button>
</div>
`;
    conteudoDiv.appendChild(card)
});
