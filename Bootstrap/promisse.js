const recipes = {
    salgado: [
        { title: "Empadinha de Frango", description: "Deliciosa empadinha de frango com massa crocante e recheio suculento." }
    ],
    doce: [
        { title: "Brigadeiro", description: "Clássico brigadeiro brasileiro, feito com leite condensado e chocolate." }
    ],
    sucos: [
        { title: "Suco de Laranja", description: "Refrescante suco de laranja natural, perfeito para qualquer ocasião." }
    ]
};

function displayRecipes() {
    for (const category in recipes) {
        const categoryDiv = document.getElementById(category).querySelector('.accordion-body');
        recipes[category].forEach(recipe => {
            const recipeDiv = document.createElement('div');
            recipeDiv.classList.add('recipe', 'mb-3');
            recipeDiv.innerHTML = `
                <h3>${recipe.title}</h3>
                <p>${recipe.description}</p>
            `;
            categoryDiv.appendChild(recipeDiv);
        });
    }
}

document.addEventListener('DOMContentLoaded', displayRecipes);
