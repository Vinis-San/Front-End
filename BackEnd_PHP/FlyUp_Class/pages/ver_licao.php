<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/arcadia.css"> <!-- Adapte o caminho do seu CSS -->
    <link rel="stylesheet" href="../css/verlicao.css">
    <title>Visualizar Lição</title>
</head>

<body>
    <?php
    include '../includes/db.php';

    // Consulta para buscar e agrupar as lições por mês e data
    $stmt = $conexao->prepare("
    SELECT 
        id, titulo, DATE_FORMAT(data_postagem, '%Y-%m') AS mes, 
        DATE_FORMAT(data_postagem, '%d') AS dia 
    FROM licoes 
    ORDER BY data_postagem DESC
");
    $stmt->execute();
    $resultado = $stmt->get_result();

    // Organiza os dados em uma hierarquia: Mês > Dia > Lições
    $licoesPorMes = [];
    while ($licao = $resultado->fetch_assoc()) {
        $mes = $licao['mes']; // Exemplo: "2025-03"
        $dia = $licao['dia']; // Exemplo: "20"

        if (!isset($licoesPorMes[$mes])) {
            $licoesPorMes[$mes] = [];
        }

        if (!isset($licoesPorMes[$mes][$dia])) {
            $licoesPorMes[$mes][$dia] = [];
        }

        $licoesPorMes[$mes][$dia][] = [
            'id' => $licao['id'],
            'titulo' => $licao['titulo']
        ];
    }
    ?>


    <header>
        <a class="titulo" href="../index.php">
            <h1> FlyUp Class</h1>
        </a>
        <ul>
            <li><a href="../index.php">Início</a></li>
            <li><a href="pag_login.php">Login</a></li>
            <li><a href="#">Sobre Nós</a></li>
        </ul>
    </header>

    <main>
        <h2>Lições por Mês e Data</h2>
        <div class="licoes-container">
            <?php foreach ($licoesPorMes as $mes => $dias): ?>
                <div class="mes">
                    <h3><?php echo date('F Y', strtotime($mes)); // Exibe o mês e ano, ex.: "Março 2025" 
                        ?></h3>
                    <?php foreach ($dias as $dia => $licoes): ?>
                        <div class="dia">
                            <h4>Dia <?php echo $dia; ?></h4>
                            <?php foreach ($licoes as $licao): ?>
                                <div class="licao-card">
                                    <a href="ver_licao.php?id=<?php echo $licao['id']; ?>">
                                        <?php echo htmlspecialchars($licao['titulo']); ?>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

    <footer>
        <p>Todos os Direitos Reservados! Sousa Media</p>
    </footer>
</body>

</html>