<link rel="stylesheet" href="assets/css/login.css">

<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once 'database/conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $apelido = $_POST["apelido"];
    $senha = $_POST["senha"];

    var_dump($apelido, $senha);

    // Consulta ao banco de dados
    $stmt = $pdo->prepare("SELECT * FROM chef WHERE apelido = ?");
    $stmt->execute([$apelido]);
    $chef = $stmt->fetch();

    // Verificação de apelido e senha
    if ($chef) {
        if ($chef['senha']) {
            $_SESSION['id'] = $chef['id'];
            $_SESSION['apelido'] = $chef['apelido'];
            header("Location: index.php?page=postar_receita");
            exit();
        } else {
            $erro = "Senha incorreta!";
        }
    } else {
        $erro = "Apelido não encontrado!";
    }
}
?>
<form method="POST">
    <h2>Faça o Login</h2>
    <input type="text" name="apelido" placeholder="Apelido" required>
    <input type="password" name="senha" placeholder="Senha" required>
    <button type="submit">Entrar</button>
    <?php if (isset($erro)) echo "<p class='msgerro'>$erro</p>"; ?>
</form>
