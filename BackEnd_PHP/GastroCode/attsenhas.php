<?php
require_once 'database/conexao.php';

// Atualizar senhas existentes no banco
$stmt = $pdo->query("SELECT id, senha FROM chef");
while ($row = $stmt->fetch()) {
    $senhaHash = password_hash($row['senha'], PASSWORD_DEFAULT);
    $updateStmt = $pdo->prepare("UPDATE chef SET senha = ? WHERE id = ?");
    $updateStmt->execute([$senhaHash, $row['id']]);
}
echo "Senhas atualizadas para o formato hash!";
?>
