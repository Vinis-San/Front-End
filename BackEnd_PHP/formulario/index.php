<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles/all.css">
  <link rel="stylesheet" href="styles/index.css">
  <title>CADASTRO</title>
</head>

<body>
  <header>
    <h1>Formulário</h1>
  </header>
  <main>
    <article>
      <h1>Formulário de inscrição</h1>
      <form action="pages/menu.php" method="post">
        <div class="form-input">
          <label for="nome">Nome: </label>
          <input placeholder="Ex. Jon Jones" name="nome" type="text" required >
        </div>
        <div class="form-input">
          <label for="email">E-mail: </label>
          <input placeholder="Ex. JonJones@email.com" name="email" type="email" required >
        </div>
        <div class="form-input">
          <label for="senha">Senha: </label>
          <input placeholder="Ex. jonjones12345" name="senha" type="password" required >
        </div>
        <button type="submit">Enviar</button>
      </form>
    </article>
  </main>
  <footer>
    <h1>Todos os Direitos Reserva</h1>
  </footer>
</body>

</html>