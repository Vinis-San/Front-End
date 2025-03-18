<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nexus Store - Loja de Jogos</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <?php
    session_start();

    class Produto
    {
        public $id;
        public $nome;
        public $valor;
        public $foto;

        public function __construct($id, $nome, $valor, $foto)
        {
            $this->id = $id;
            $this->nome = $nome;
            $this->valor = $valor;
            $this->foto = $foto;
        }
    }

    $produtos = [
        1 => new Produto(1, "Cyberpunk 2077", 199.99, "images/Cyberpunk_2077_capa.png"),
        2 => new Produto(2, "The Witcher 3", 99.90, "images/thewitcher.png"),
        3 => new Produto(3, "Red Dead Redemption 2", 149.99, "images/rdr2.png"),
        4 => new Produto(4, "Elden Ring", 359.99, "images/eldenring.png"),
    ];

    if (!isset($_SESSION['carrinho'])) {
        $_SESSION['carrinho'] = [];
    }

    if (isset($_GET['id']) && isset($produtos[$_GET['id']])) {
        $_SESSION['carrinho'][] = $produtos[$_GET['id']];
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }

    if (isset($_GET['limpar'])) {
        $_SESSION['carrinho'] = [];
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }

    $valortotal = 0;
    foreach ($_SESSION['carrinho'] as $produto) {
        $valortotal += $produto->valor;
    }

    ?>

    <header>
        <h1>Nexus Store</h1>
        <button id="abrirCarrinho"><i class="fas fa-shopping-cart"></i> Ver Carrinho</button>
    </header>

    <main>
        <section class="produtos">
            <h2>Nossos Produtos</h2>
            <div class="grid-produtos">
                <?php foreach ($produtos as $produto) : ?>
                    <div class="card">
                        <a href="?id=<?= $produto->id ?>" class="produto-link">
                            <img src="<?= $produto->foto ?>" alt="<?= $produto->nome ?>">
                            <h3><?= $produto->nome ?></h3>
                            <p>R$ <?= number_format($produto->valor, 2, ',', '.') ?></p>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>

    <div id="modalCarrinho" class="modal">
        <div class="modal-conteudo">
            <span class="fechar">&times;</span>
            <h2><i class="fas fa-shopping-cart"></i> Carrinho de Compras</h2>
            <ul>
                <?php if (!empty($_SESSION['carrinho'])) : ?>
                    <?php foreach ($_SESSION['carrinho'] as $item) : ?>
                        <li>
                            <img src="<?= htmlspecialchars($item->foto) ?>" width="50" alt="<?= htmlspecialchars($item->nome) ?>">
                            <h3><?= htmlspecialchars($item->nome) ?></h3> 
                            <h3 class="preco_modal">R$ <?= number_format($item->valor, 2, ',', '.') ?></h3>
                        </li>
                    <?php endforeach; ?>
                <?php else : ?>
                <?php endif; ?>
            </ul>
            <p><?php if ($valortotal == 0) {
                    echo "<p>Carrinho vazio!</p>";
                } else {
                    echo "<br><br><p>Valor total: R$ $valortotal</p>";
                } ?></p>
            <a href="?limpar=1" class="btn-limpar"><i class="fas fa-trash"></i> Limpar Carrinho</a>
        </div>
    </div>

    <script>
        document.getElementById("abrirCarrinho").addEventListener("click", function() {
            document.getElementById("modalCarrinho").style.display = "block";
        });

        document.querySelector(".fechar").addEventListener("click", function() {
            document.getElementById("modalCarrinho").style.display = "none";
        });

        window.onclick = function(event) {
            if (event.target === document.getElementById("modalCarrinho")) {
                document.getElementById("modalCarrinho").style.display = "none";
            }
        };
    </script>
</body>

</html>
