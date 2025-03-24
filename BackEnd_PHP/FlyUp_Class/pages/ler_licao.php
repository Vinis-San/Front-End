<?php
include '../includes/db.php';

$id = $_GET['id'] ?? null;

if ($id) {
    $stmt = $conexao->prepare("SELECT titulo, conteudo FROM licoes WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $resultado = $stmt->get_result();
    $licao = $resultado->fetch_assoc();

    if ($licao) {
?>
        <!DOCTYPE html>
        <html lang="pt-br">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?php echo htmlspecialchars($licao['titulo']); ?></title>
            <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
            <style>
                * {
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                }

                body {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    color: rgb(207, 207, 207);
                    min-height: 100vh;
                    width: 100%;
                    height: 100%;
                    /* Texto branco para contraste */
                    font-family: "Arial", sans-serif;
                    /* Fonte limpa e legível */
                    background: url("../images/fundo_site.png");
                    background-size: cover;
                    /* Faz com que a imagem cubra todo o elemento */
                    background-position: center;
                    /* Centraliza a imagem */
                    background-repeat: no-repeat;
                    /* Evita repetição da imagem */
                    background-attachment: fixed;
                    font-family: 'roboto', sans-serif;
                }


                .container-titulo {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    min-width: 40%;
                    height: auto;
                    padding: 0.5rem;
                    border-radius: 10px;
                    background-color: rgba(29, 31, 41, 0.77);
                    backdrop-filter: blur(10px);
                    box-shadow: 5px 5px 5px rgba(24, 24, 24, 0.5);
                    margin-top: 1em;
                    margin-bottom: 1em;
                    font-size: 1.5em;
                }

                .conteudo {
                    width: 90%;
                    color: rgb(238, 238, 238);
                    padding: 1.5em 2em 1em 2em ;
                    border-radius: 12px;
                    text-align: justify;
                    background-color: rgba(29, 31, 41, 0.77);
                    backdrop-filter: blur(10px);
                    box-shadow: 5px 5px 5px rgba(24, 24, 24, 0.5);
                    line-height: 1.5;
                }

                button {
                    margin-top: 20px;
                    padding: 10px 20px;
                    background-color: rgba(41, 41, 41, 0.95);
                    color: white;
                    border: none;
                    border-radius: 5px;
                    cursor: pointer;
                    transition: 0.7s;
                    margin-top: 1em;
                    margin-bottom: 1em;
                }

                button:hover {
                    background-color: white;
                    color: #5E1BB0;
                    transform: matrix(1.1, 0, 0, 1.1, 0, 0);
                }
            </style>
        </head>

        <body>
            <div class="container-titulo">
                <h1><?php echo htmlspecialchars($licao['titulo']); ?></h1>
            </div>
            <div class="conteudo">
                <!-- Renderiza o conteúdo HTML vindo do banco -->
                <?php echo $licao['conteudo']; ?>
            </div>
            <button onclick="window.history.back()">← Voltar</button>
        </body>

        </html>
<?php
    } else {
        echo "Lição não encontrada.";
    }
} else {
    echo "ID inválido.";
}
?>