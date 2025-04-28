<main>
    <?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    require_once 'database/conexao.php';

    if (!isset($_GET['id'])) {
        die("ID da receita não informado!");
    }

    // Busca os detalhes da receita no banco
    $id = $_GET['id'];
    $stmt = $pdo->prepare("SELECT receitas.*, chef.apelido AS nome_chef FROM receitas 
                       JOIN chef ON receitas.chef_id = chef.id 
                       WHERE receitas.id = ?");
    $stmt->execute([$id]);
    $receita = $stmt->fetch();

    if (!$receita) {
        die("Receita não encontrada!");
    }
    ?>

    <h2><?php echo htmlspecialchars($receita['titulo']); ?></h2>
    <p><strong>Descrição:</strong> <?php echo htmlspecialchars($receita['descricao']); ?></p>
    <p><strong>Modo de Preparo:</strong> <?php echo nl2br(htmlspecialchars($receita['receita'])); ?></p>
    <p><strong>Chef Responsável:</strong> <?php echo htmlspecialchars($receita['nome_chef']); ?></p>
</main>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    main {
        background: white;
        padding: 30px;
        width: 80%;
        margin: 20px auto;
        border-radius: 10px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }

    h2 {
        color: #007bff;
        margin-bottom: 15px;
        border-bottom: 2px solid #007bff;
        padding-bottom: 5px;
    }
    p {
        margin-bottom: 15px;
        font-size: 1em;
        line-height: 1.6em;
    }
    strong {
        color: #333;
    }
</style>