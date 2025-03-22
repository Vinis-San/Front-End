<script src="https://cdn.quilljs.com/1.3.7/quill.min.js"></script>
<script>
  // Inicializando o editor
  var quill = new Quill('#editor-container', {
    theme: 'snow', // Tema "snow" para um visual moderno
    modules: {
      toolbar: [ // Barra de ferramentas com formatações básicas
        ['bold', 'italic', 'underline'], // Negrito, itálico e sublinhado
        [{
          'header': [1, 2, 3, false]
        }], // Títulos
        [{
          'list': 'ordered'
        }, {
          'list': 'bullet'
        }], // Listas
        [{
          'color': []
        }, {
          'background': []
        }], // Cores de texto e fundo
        ['link', 'image'], // Links e imagens
      ]
    }
  });
  document.querySelector('form').addEventListener('submit', function() {
    document.querySelector('#conteudo').value = quill.root.innerHTML;
  });
</script>