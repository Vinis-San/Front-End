<link rel="stylesheet" href="assets/css/postar_receita.css">
<main>
<?php

error_reporting(E_ALL & ~E_NOTICE);

session_start();
if (!isset($_SESSION['id'])) {
    header("Location: index.php?page=login");
    exit();
}


?>
<h1>Bem-vindo, <?php echo $_SESSION['apelido']; ?>!</h1>

<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once 'database/conexao.php';

// Verificar se o usuário está logado
if (!isset($_SESSION['id'])) {
    die("Você precisa estar logado para cadastrar uma receita.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomeReceita = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $modoPreparo = $_POST['modo_preparo'];
    $chefId = $_SESSION['id']; // Pegando o ID do chef logado

    // Inserir dados no banco
    $stmt = $pdo->prepare("INSERT INTO receitas (titulo, descricao, receita, chef_id) VALUES (?, ?, ?, ?)");
    $stmt->execute([$nomeReceita, $descricao, $modoPreparo, $chefId]);

    echo "<p class='msgcerto'>Receita cadastrada com sucesso!</p>";
}
?>

<form method="POST">
    <h2>Cadastro de Receitas</h2>
    <input type="text" name="nome" placeholder="Nome da Receita" required>
    <textarea name="descricao" placeholder="Descrição" required></textarea>
    <textarea name="modo_preparo" placeholder="Modo de Preparo" required></textarea>
    <button type="submit">Cadastrar Receita</button>
</form>

</main>