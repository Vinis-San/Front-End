document.addEventListener('DOMContentLoaded', (event) => {
    const userName = localStorage.getItem('nome');
    if (userName) {
        document.querySelector('#nome_pagina').innerHTML = userName;
        document.querySelector('#character-name').innerHTML = userName;
    }

    const questList = document.querySelectorAll('#quest-list li');
    questList.forEach(quest => {
        quest.addEventListener('click', () => {
            let currentXP = parseInt(document.querySelector('#xp').innerHTML);
            const questXP = parseInt(quest.getAttribute('data-xp'));
            currentXP += questXP;
            document.querySelector('#xp').innerHTML = currentXP;
            quest.style.textDecoration = 'line-through';
            quest.style.color = 'gray';
        });
    });
});
