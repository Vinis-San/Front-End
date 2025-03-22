
    // Seleciona a div pelo ID
    var minhaDiv = document.getElementById("container-dia");

    // Verifica se a div está vazia
    if (!minhaDiv.innerHTML.trim()) {
        // Caso esteja vazia, insere uma mensagem
        minhaDiv.innerHTML = "Sem conteúdo disponível no momento.";
        minhaDiv.style.color = "red"; 
    }
