<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/arcadia.css">
    <link rel="stylesheet" href="../css/main_login.css">
    <title>Login</title>
</head>

<body>
    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    session_start();
    include '../includes/db.php';

    $erro = '';

    // obtenção das informações dos inputs
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'];
        $matricula = $_POST['matricula'];

        $stmt = $conexao->prepare("Select * from FlyUp_Class.professor where email = ? and matricula = ?");
        $stmt->bind_param('si', $email, $matricula);
        $stmt->execute();
        $resultado = $stmt->get_result();
        $usuario = $resultado->fetch_assoc();

        if ($usuario) {

            $_SESSION['usuario_nome'] = $usuario['nome'];
            $_SESSION['usuario_apelido'] = $usuario['apelido'];
            $_SESSION['usuario_matricula'] = $usuario['matricula'];
            $_SESSION['usuario_email'] = $usuario['email'];
            header("Location: cadastrar.php");
            exit();
        } else {
            $erro = "As credenciais (E-mail ou Matrícula) estão incorretas.";
        }
    }


    ?>


    <header>
        <a class="titulo" href="../index.php">
            <h1> FlyUp Class</h1>
        </a>
        <ul>
            <li><a href="../index.php">Início</a></li>
            <li><a href="pag_login.php">Login</a></li>
            <li><a href="ver_licao.php">Lições</a></li>
        </ul>
    </header>
    <main>
        <div class="frase_professor">
            <h3>Bem Vindo <span>Professor</span>!</h3>
        </div>
        <div class="card_form">
            <h1></h1>
            <form class="form" method="POST" action="pag_login.php">
                <div class="form-group"><label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="E-mail">
                </div>
                <div class="form-group"><label for="matricula">Senha</label>
                    <input type="text" id="matricula" name="matricula" placeholder="Matrícula">
                </div>
                <button type="submit">Entrar</button>
            </form>
            <?php if (isset($erro)): ?>
                <p style="color: red;"><?php echo $erro; ?></p>
            <?php endif; ?>
        </div>
    </main>
    <footer>Todos os Direitos Reservados! Sousa Media</footer>
</body>

</html>