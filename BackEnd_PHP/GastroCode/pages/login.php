<main>
    <?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
    require_once'database/conexao.php';

    if($_SERVER["REQUEST_METHOD"] =="POST"){
        $apelido = $_POST["apelido"];
        $senha = $_POST["senha"];

        $stmt = $pdo->prepare("select * from chef where apelido = ?");
         $stmt->execute([$apelido]);
         $chef = $stmt->fetch();

         if ($chef && password_verify($senha, $chef['senha'])) {
            $_SESSION['id'] = $chef['id'];
            $_SESSION['nome'] = $chef['nome'];
            header("Location: index.php?page=postar_receita");
            exit();
        } else {
            $erro = "Apelido ou senha incorretos!";
        }
            }

    ?>
    <form method="POST">
        <h2>Faça o Login</h2>
        <input type="text" name="apelido" placeholder="apelido" required>
        <input type="password" name="senha" placeholder="senha" required>
        <button type="submit">Entrar</button>
        <?php if(isset($erro)) echo "<p style='color:red;'>$erro</p>"; ?>
    </form>
</main>