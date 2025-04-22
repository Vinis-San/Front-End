<?php
// Configurações de conexão
$host = '127.0.0.1:3306'; // ou 'localhost'
$usuario = 'root';
$senha = 'root';
$banco = 'gastrocode';

try {
    // Criação de conexão com o banco
    $pdo = new PDO("mysql:host=$host;dbname=$banco", $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    die("Erro ao conectar ao banco de dados: " . $e->getMessage());
}
?>
