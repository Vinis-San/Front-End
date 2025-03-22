<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/arcadia.css"> <!-- Adapte o caminho do seu CSS -->
    <link rel="stylesheet" href="../css/verlicao.css">
    <title>Visualizar Lição</title>
</head>
<?php include '../css/ver_licaoCSS.php'; ?>

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
        $mes = $licao['mes'];
        $dia = $licao['dia'];

        if (!isset($licoesPorMes[$mes])) {
            $licoesPorMes[$mes] = [];
        }

        if (!isset($licoesPorMes[$mes][$dia])) {
            $licoesPorMes[$mes][$dia] = [];
        }

        $licoesPorMes[$mes][$dia][] = [
            'id' => $licao['id'],
            'titulo' => htmlspecialchars($licao['titulo']) // Segurança contra XSS
        ];
    }
    ?>

    <header>
        <a class="titulo" href="../index.php">
            <h1>FlyUp Class</h1>
        </a>
        <ul>
            <li><a href="../index.php">Início</a></li>
            <li><a href="pag_login.php">Login</a></li>
            <li><a href="ver_licao.php">Lições</a></li>
        </ul>
    </header>

    <main>
        <div class="licoes-container">
            <h2>Repositório de Materiais de Discipulados FlyUp</h2>


            <div class="container-dia" id="container-dia" >
                <?php foreach ($licoesPorMes as $mes => $dias): ?>
                    <h2><?php echo date('F Y', strtotime($mes)); // Mês formatado 
                        ?></h2>
                    <?php foreach ($dias as $dia => $licoes): ?>
                        <h5>Dia <?php echo $dia; ?></h5>
                        <ul>
                            <?php foreach ($licoes as $licao): ?>
                                <li>
                                    <a href="ler_licao.php?id=<?php echo $licao['id']; ?>">
                                        <?php echo $licao['titulo']; ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </div>


        </div>
    </main>

    <footer>
        <p>Todos os Direitos Reservados! Sousa Media</p>
    </footer>
    <script src="../script_JS/verlicao.js"></script>
</body>

</html>