<?php
$titulo = "Detalhes do Curso";
include 'header.php';
include 'funcoes.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $item = getItemPorId($id);
    if ($item) {
        ?>
        <div class="detalhes-container">
            <?php exibirDetalhesItem($item); ?>
        </div>
        <?php
    } else {
        echo "<p>Item não encontrado.</p>";
    }
} else {
    echo "<p>Nenhum ID de item especificado.</p>";
}

?>

<?php include 'footer.php'; ?>