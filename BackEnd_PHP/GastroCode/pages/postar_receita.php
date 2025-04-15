<main>
<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: index.php?page=login");
    exit();
}
?>
<h1>Bem-vindo, <?php echo $_SESSION['apelido']; ?>!</h1>
<a href="index.php?page=lista_receita">Ver receitas</a>

</main>