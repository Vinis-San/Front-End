<?php
// Conectar ao banco de dados
$servername = "localhost";
$username = "root"; // Ajuste conforme necessário
$password = "root";     // Ajuste conforme necessário
$dbname = "comida";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Recuperar dados da tabela catalogo
$sql = "SELECT nome, valor, imagem FROM catalogo";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Comida</title>
</head>
<body>
    <h1>Catálogo de Comida</h1>
    <div style="display: flex; flex-wrap: wrap;">
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<div style="margin: 10px; border: 1px solid #ddd; padding: 10px;">';
                echo '<img src="' . $row["imagem"] . '" alt="' . $row["nome"] . '" style="width: 200px; height: 150px;"><br>';
                echo '<strong>' . $row["nome"] . '</strong><br>';
                echo 'R$ ' . number_format($row["valor"], 2, ',', '.') . '<br>';
                echo '</div>';
            }
        } else {
            echo "Nenhum item encontrado.";
        }
        ?>
    </div>
</body>
</html>

<?php
// Fechar conexão
$conn->close();
?>
