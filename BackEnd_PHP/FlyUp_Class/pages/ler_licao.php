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
            <style>
                body {
                    font-family: Arial, sans-serif;
                    padding: 20px;
                    background-color: #f9f9f9;
                }
                .conteudo {
                    background: #fff;
                    padding: 20px;
                    border-radius: 8px;
                    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
                    text-align: justify;
                }
                button {
                    margin-top: 20px;
                    padding: 10px 20px;
                    background-color: #862dda;
                    color: white;
                    border: none;
                    border-radius: 5px;
                    cursor: pointer;
                }
                button:hover {
                    background-color: #3c0e68;
                }
            </style>
        </head>
        <body>
            <h1><?php echo htmlspecialchars($licao['titulo']); ?></h1>
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
