<?php
// Configurações para conectar ao banco de dados
$host = 'localhost'; // Servidor do banco (localhost para ambiente local)
$usuario = 'root';   // Usuário do banco de dados
$senha = 'root';         // Senha do banco (em branco no XAMPP por padrão)
$banco = 'FlyUp_Class';   // Nome do banco de dados que você criou

// Cria a conexão com o banco de dados
$conexao = new mysqli($host, $usuario, $senha, $banco);

// Verifica se houve erro na conexão
if ($conexao->connect_error) {
    die("Erro ao conectar ao banco de dados: " . $conexao->connect_error);
}
?>
