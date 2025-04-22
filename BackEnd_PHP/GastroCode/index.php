<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GastroCode</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/headerfooter.css">
</head>
<?php
session_start();
require_once 'database/conexao.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

$paginas_protegidas = ['cadastrar'];
if(!isset($_SESSION[ 'id']) && in_array($page, $paginas_protegidas)) {
    header('location: index.php?page=login');
    exit();
}

include 'components/header.php';

// Verifica qual página carregar
switch ($page) {
    case 'home':
        include 'pages/home.php';
        break;
    case 'receitas':
        include 'pages/lista_receita.php';
        break;
    case 'login':
        include 'pages/login.php';
        break;
    case 'postar_receita':
        include 'pages/postar_receita.php';
        break;
    case 'ler_receita':
        include 'pages/ler_receita.php';
        break;
    default:
        include 'pages/home.php';
}

include  'components/footer.php';
?>

</body>

</html>