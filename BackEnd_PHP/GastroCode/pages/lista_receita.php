<link rel="stylesheet" href="assets/css/lista_receita.css">

<main>

<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once 'database/conexao.php';

// Busca todas as receitas no banco de dados
$stmt = $pdo->prepare("SELECT receitas.*, chef.apelido AS nome_chef FROM receitas 
                       JOIN chef ON receitas.chef_id = chef.id");
$stmt->execute();
$receitas = $stmt->fetchAll();
?>

<h2>Lista de Receitas</h2>
<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>Nome da Receita</th>
            <th>Descrição</th>
            <th>Chef Responsável</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($receitas as $receita): ?>
        <tr>
            <td><?php echo htmlspecialchars($receita['titulo']); ?></td>
            <td><?php echo htmlspecialchars($receita['descricao']); ?></td>
            <td><?php echo htmlspecialchars($receita['nome_chef']); ?></td>
            <td>
                <button onclick="openModalVer(<?php echo $receita['id']; ?>)">Ver Receita</button>
                <button onclick="openModalEditar(<?php echo $receita['id']; ?>)">Editar</button>
                <button onclick="openModalExcluir(<?php echo $receita['id']; ?>)">Excluir</button>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<!-- Modal Ver Receita -->
<div id="modalVer" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('modalVer')">&times;</span>
        <h2>Detalhes da Receita</h2>
        <div id="verReceitaContent"></div>
    </div>
</div>

<!-- Modal Editar Receita -->
<div id="modalEditar" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('modalEditar')">&times;</span>
        <h2>Editar Receita</h2>
        <form id="editarForm">
            <input type="text" name="titulo" placeholder="Título" id="editarTitulo" required>
            <textarea name="descricao" placeholder="Descrição" id="editarDescricao" required></textarea>
            <textarea name="modo_preparo" placeholder="Modo de Preparo" id="editarModoPreparo" required></textarea>
            <button type="submit">Salvar Alterações</button>
        </form>
    </div>
</div>

<!-- Modal Excluir Receita -->
<div id="modalExcluir" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('modalExcluir')">&times;</span>
        <h2>Confirmar Exclusão</h2>
        <p>Você tem certeza de que deseja excluir esta receita?</p>
        <button id="btnExcluir">Excluir</button>
    </div>
</div>

<script>
    // Funções para abrir e fechar modais
    function openModalVer(id) {
        const modal = document.getElementById('modalVer');
        const content = document.getElementById('verReceitaContent');
        
        // Busca detalhes da receita via AJAX
        fetch(`pages/ler_receita.php?id=${id}`)
            .then(response => response.text())
            .then(data => content.innerHTML = data);

        modal.style.display = 'block';
    }

    function openModalEditar(id) {
        const modal = document.getElementById('modalEditar');
        const form = document.getElementById('editarForm');

        // Preenche o formulário de edição via AJAX
        fetch(`editar_receita.php?id=${id}`)
            .then(response => response.json())
            .then(data => {
                document.getElementById('editarTitulo').value = data.titulo;
                document.getElementById('editarDescricao').value = data.descricao;
                document.getElementById('editarModoPreparo').value = data.receita;
            });

        form.onsubmit = function (event) {
            event.preventDefault();
            fetch(`editar_receita.php?id=${id}`, {
                method: 'POST',
                body: new FormData(form)
            }).then(() => {
                alert("Receita atualizada com sucesso!");
                closeModal('modalEditar');
                location.reload();
            });
        };

        modal.style.display = 'block';
    }

    function openModalExcluir(id) {
        const modal = document.getElementById('modalExcluir');
        const btnExcluir = document.getElementById('btnExcluir');

        btnExcluir.onclick = function () {
            fetch(`excluir_receita.php?id=${id}`, { method: 'POST' })
                .then(() => {
                    alert("Receita excluída com sucesso!");
                    closeModal('modalExcluir');
                    location.reload();
                });
        };

        modal.style.display = 'block';
    }

    function closeModal(modalId) {
        const modal = document.getElementById(modalId);
        modal.style.display = 'none';
    }
</script>

<style>
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
    }
    .modal-content {
        background-color: #fff;
        margin: 15% auto;
        padding: 20px;
        width: 50%;
        border-radius: 5px;
    }
    .close {
        float: right;
        font-size: 24px;
        font-weight: bold;
        cursor: pointer;
    }
</style>

</main>