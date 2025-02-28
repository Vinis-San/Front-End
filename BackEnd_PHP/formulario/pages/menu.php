<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/all.css">
    <link rel="stylesheet" href="../styles/menu.css">
    <title>Menu</title>
</head>

<body>
    <header>
        <H1>Formula-Cria!</H1>
        <nav>
            <ul>
                <li><a href="/formulario/pages/menu.php">Home</a></li>
                <li><a href="/formulario/index.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="menu_principal">
            <h3>Dados Recebidos</h3>
            <div class="card_info_login">
                <p>
                    <?php
                    //var_dump($_REQUEST);
                    $nome = $_REQUEST['nome'];
                    $email = $_REQUEST['email'];
                    $senha = $_REQUEST['senha'];
                    echo "Olá $nome, seja bem vindo Magnata!<br>
                seu email atual é: <span class='variavel'>$email</span><br>
                e sua senha atual é: <span class='variavel'>$senha</span>"
                    ?> </p>
            </div>
        </section>
    </main>
    <footer>
        <p>Todos os Direitos Reservados. <?php echo date("M.Y"); ?> </p>
    </footer>
</body>

</html>