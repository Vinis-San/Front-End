<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/arcadia.css">
    <link rel="stylesheet" href="../css/cadastro.css">
    <link href="https://cdn.quilljs.com/1.3.7/quill.snow.css" rel="stylesheet">
    <title>Registro de Lição</title>
</head>

<body>
    <?php
    session_start();
    if (!isset($_SESSION['usuario_nome'])) {
        header("Location: pag_login.php");
        exit();
    }
    $apelidoprofessor = $_SESSION['usuario_apelido'];


    // incluir arquivo do banco de dados
    include '../includes/db.php';

    //inicializa a variavel mensagem

    $mensagem = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $titulo = $_POST['titulo'];
        $conteudo = $_POST['conteudo'];
        $professor_matricula = $_SESSION['usuario_matricula']; // Matrícula do professor logado

        // Inserir a lição no banco de dados
        $stmt = $conexao->prepare("INSERT INTO licoes (titulo, conteudo, professor_matricula) VALUES (?, ?, ?)");
        $stmt->bind_param('ssi', $titulo, $conteudo, $professor_matricula);

        if ($stmt->execute()) {
            $mensagem = "Lição cadastrada com sucesso!";
        } else {
            $mensagem = "Erro ao cadastrar a lição.";
        }
    }

    error_log("Matrícula do professor: " . $_SESSION['usuario_matricula']);

    ?>
    <header>
        <a class="titulo" href="../index.php">
            <h1> FlyUp Class</h1>
        </a>
        <div>
            <h2>Olá Professor <?php echo $apelidoprofessor; ?>!</h2>
        </div>
        <ul>
            <li><a href="../index.php">Logout</a></li>
        </ul>
    </header>
    <main>
        <div class="card_form">
            <div class="container_titulo">
                <h1>Cadastro de Lição</h1>
            </div>

            <form class="container-form" action="cadastrar.php" method="post">
                <!-- Grupo para o título da lição -->
                <div class="form_group">
                    <label for="titulo">Título da lição</label>
                    <input type="text" id="titulo" name="titulo" placeholder="Digite título da lição" required>
                </div>

                <div class="form_grou">
                    <?php include '../css/theme-editor.php'; ?>

                    <label for="conteudo">Conteúdo</label>
                    <div id="editor-container"></div>
                    <input type="hidden" name="conteudo" id="conteudo" required>
                </div>



                <!-- Mensagem de sucesso, se existir -->
                <?php if (!empty($mensagem)): ?>
                    <p style="color: green;"><?php echo htmlspecialchars($mensagem, ENT_QUOTES, 'UTF-8'); ?></p>
                <?php endif; ?>
                <div class="containerbtn">
                    <button type="submit">Cadastrar</button>
                </div>
            </form>


        </div>
    </main>
    <footer>Todos os Direitos Reservados! Sousa Media</footer>
    <?php include '../script_JS/cad_JS.php'; ?>
</body>

</html>