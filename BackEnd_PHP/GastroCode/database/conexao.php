<?php
//configurações de conexão
$host = '127.0.0.1';
$usuario = 'root';
$senha = '';
$banco='gastrocode';

//criação de conexão com o banco
$pdo = new PDO("mysql:host=$host;dbname=$banco", $usuario, $senha);

try {
    $pdo = new PDO("mysql:host=localhost;dbname=gastrocode", "root", "senha");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão bem-sucedida!";
} catch (PDOException $e) {
    die("Erro ao conectar ao banco de dados: " . $e->getMessage());
}

?>
