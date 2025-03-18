<!DOCTYPE html>
<html>
<head>
    <title>Speeds</title>
</head>
<body>
    
    <h1>Bem-vindo!</h1>
    
    <!-- Conversão de Dólar para Real -->
    <h2>Conversão de Dólar para Real</h2>
    <form method="post">
        <label for="dolar">Valor em Dólares:</label>
        <input type="text" id="dolar" name="dolar">
        <button type="submit" name="converter">Converter</button>
    </form>
    <?php
    if (isset($_POST['converter'])) {
        $dolar = $_POST['dolar'];
        $cotacao = 5.24; // Exemplo de cotação do dólar
        $real = $dolar * $cotacao;
        echo "<p>Valor em Dólares: $" . $dolar . "</p>";
        echo "<p>Valor em Reais: R$" . $real . "</p>";
    }
    ?>
    
    <!-- Verificação de Idade -->
    <h2>Verificação de Idade</h2>
    <form method="post">
        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade">
        <button type="submit" name="verificar_idade">Verificar</button>
    </form>
    <?php
    if (isset($_POST['verificar_idade'])) {
        $idade = $_POST['idade'];
        if ($idade >= 18) {
            echo "<p>Você tem permissão para acessar este conteúdo.</p>";
        } else {
            echo "<p>Você não tem permissão para acessar este conteúdo.</p>";
        }
    }
    ?>

    
</body>
</html>
