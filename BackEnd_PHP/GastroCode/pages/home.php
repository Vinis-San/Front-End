<link rel="stylesheet" href="assets/css/home.css">

<main>
    <h1>Bem-vindo ao GastroCode!</h1>

    <!-- Últimas Receitas -->
    <section>
    <h2>Últimas Receitas</h2>
    <?php
    require_once 'database/conexao.php';
    $stmt = $pdo->prepare("SELECT titulo, descricao, id FROM receitas ORDER BY id DESC LIMIT 5");
    $stmt->execute();
    $receitas = $stmt->fetchAll();

    foreach ($receitas as $receita): ?>
        <div class="receita-preview">
            <h3><a href="pages/ver_receita.php?id=<?php echo $receita['id']; ?>"><?php echo htmlspecialchars($receita['titulo']); ?></a></h3>
            <p><?php echo htmlspecialchars(substr($receita['descricao'], 0, 100)); ?>...</p>
        </div>
    <?php endforeach; ?>
</section>


    <!-- Curiosidades Gastronômicas -->
    <section>
        <h2>Curiosidades sobre Gastronomia</h2>
        <ul>
            <li>O chocolate branco não é tecnicamente chocolate, pois não contém massa de cacau!</li>
            <li>A pizza foi inventada na Itália, mas o maior consumidor de pizza no mundo é os EUA.</li>
            <li>O sushi não nasceu no Japão, mas na China, como um método de preservação do peixe.</li>
            <li>A primeira receita escrita de strogonoff data do século XIX, na Rússia!</li>
            <li>Sabia que a origem do brigadeiro está ligada à campanha presidencial de Eduardo Gomes em 1945?</li>
        </ul>
    </section>

    <!-- Ranking dos Chefs -->
    <section>
        <h2>Ranking dos Chefs</h2>
        <?php
        $stmt = $pdo->prepare("SELECT chef.apelido, COUNT(receitas.id) AS total_receitas 
                               FROM chef 
                               JOIN receitas ON chef.id = receitas.chef_id 
                               GROUP BY chef.id 
                               ORDER BY total_receitas DESC LIMIT 5");
        $stmt->execute();
        $ranking = $stmt->fetchAll();

        foreach ($ranking as $chef): ?>
            <p><?php echo htmlspecialchars($chef['apelido']) . " - " . $chef['total_receitas'] . " receitas"; ?></p>
        <?php endforeach; ?>
    </section>
</main>
