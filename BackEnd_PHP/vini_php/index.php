<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula</title>
</head>

<body>
    <header>
        <h1>Bien Venido / Welcome</h1>
    </header>
    <main>
        <?php
        echo "olá tudo bem?<br>";
        echo "test123<br>";

        $palavra = "Willian Roscoe";
        echo $palavra;
        echo"<br>";
        $PALAVRa = "Rudson Martins";
        echo $PALAVRa;
        echo "<br>";
        ECHO date("D/M/Y");
        echo "<br>";
        echo "Todos os direitos reservados @",date("Y");
        echo "<br>";
        date_default_timezone_set("america/São_Paulo");
        echo date_default_timezone_get();
        echo date("G:i:s T");
        //phpinfo();
         ?>
    </main>
    <footer>

    </footer>
</body>

</html>