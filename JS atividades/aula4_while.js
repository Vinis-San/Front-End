function carregarcatalogo() {
    var livros = [
        ['/imagens/os codigos do milhao.webp','Os Códigos do Milhão','Valor Inestimável'],
        ['/imagens/diario de um banana.jpg','Diário de um Banana','R$39,99'],
        ['/imagens/mais esperto que o diabo.jpg','Mais esperto que o diabo','R$69,99'],
        ['/imagens/o homem mais rico da babilonia.jpg','O homem mais rico da babilônia','R$59,99'],
        ['/imagens/capa2.jpg','A sutil arte de ligar o F#da-se','R$49,99'],
        ['/imagens/Hackeando tudo.jpg','Hackeando Tudo','R$19,99'],
        ['/imagens/me poupe.jpg','Me poupe!','R$29,99'],
        ['/imagens/Negro na Russia.jpg','Negro na Russia','R$34,99'],
        ['/imagens/Capa1.webp','livro Meloso','R$34,99'],
        ['/imagens/imigranteilegal.jpg','Imigrante Ilegal','R$14,99']
        
    ]

    livros.forEach(cadaLivro =>{
        document.getElementById('catalogo').innerHTML +=`<div class="container_catalogo">
                <img src="${cadaLivro[0]}" alt="Imagem do Livro">
                <div class="description">
                    <h2 class="tituloproduto">${cadaLivro[1]}</h2>
                    <h3 class="preco">${cadaLivro[2]}</h3>
                </div>
                <div class="botao_container">
                    <button class="comprarbtn"> Comprar</button>
                    <button class="Addcarrinho"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart">
                            <circle cx="9" cy="21" r="1"></circle>
                            <circle cx="20" cy="21" r="1"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg></button>
                </div>


            </div>`
    })
}

 /*   for (let i = 0; i < 10; i++) {
        document.getElementById('catalogo').innerHTML += `<div class="container_catalogo">
                <img src="/imagens/diario de um banana.jpg" alt="Imagem do Livro">
                <div class="description">
                    <h2 class="tituloproduto">Livro diário de um Banana</h2>
                    <h3 class="preco">R$39,99</h3>
                </div>
                <div class="botao_container">
                    <button class="comprarbtn"> Comprar</button>
                    <button class="Addcarrinho"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart">
                            <circle cx="9" cy="21" r="1"></circle>
                            <circle cx="20" cy="21" r="1"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg></button>
                </div>


            </div>`
    }
}*/

carregarcatalogo()