<?php
$titulo = "Cadastrar Novo Curso";
include 'header.php';
include 'funcoes.php';

verificarSessao();

$mensagem_sucesso = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $novo_item = [
        'titulo' => $_POST['titulo'],
        'categoria' => $_POST['categoria'],
        'imagem' => $_POST['imagem'],
        'descricao' => $_POST['descricao'],
        'professor' => $_POST['professor'],
        'carga_horaria' => $_POST['carga_horaria'],
    ];
    cadastrarNovoItem($novo_item);
    $mensagem_sucesso = "Novo item cadastrado com sucesso!";
}

?>

<div class="container">
    <h1>Cadastrar Novo Curso</h1>

    <?php if ($mensagem_sucesso): ?>
        <p class="sucesso"><?php echo $mensagem_sucesso; ?></p>
    <?php endif; ?>

    <div class="cadastro-form-centralizado">
        <form method="POST" action="" class="cadastro-form">
            <div class="form-group">
                <label for="titulo">Título:</label>
                <input type="text" id="titulo" name="titulo" required>
            </div>
            <div class="form-group">
                <label for="categoria">Categoria:</label>
                <input type="text" id="categoria" name="categoria" required>
            </div>
            <div class="form-group">
                <label for="imagem">Nome da Imagem:</label>
                <input type="text" id="imagem" name="imagem">
            </div>
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <textarea id="descricao" name="descricao"></textarea>
            </div>
            <div class="col-2">
                <div class="form-group">
                    <label for="professor">Professor:</label>
                    <input type="text" id="professor" name="professor">
                </div>
                <div class="form-group">
                    <label for="carga_horaria">Carga Horária:</label>
                    <input type="text" id="carga_horaria" name="carga_horaria">
                </div>
            </div>
            <div class="form-actions">
                <button type="submit">Cadastrar</button>
                <a href="index.php" class="button secondary">Voltar ao Catálogo</a>
            </div>
        </form>
    </div>
</div>

<?php include 'footer.php'; ?>