<?php
$titulo = "Filtrar Cursos";
include 'header.php';
include 'funcoes.php';

$resultados = [];
if (isset($_GET['categoria']) || isset($_GET['tipo'])) {
    $categoria_filtro = $_GET['categoria'] ?? null;
    $tipo_filtro = $_GET['tipo'] ?? null; 
    $resultados = filtrarItens($categoria_filtro, $tipo_filtro);
}

?>

<div class="container">
    <h1>Filtrar Cursos</h1>

    <div class="filtro-container">
        <form method="GET" action="" class="filtro-form">
            <div class="form-group">
                <label for="categoria">Filtrar por Categoria:</label>
                <select name="categoria" id="categoria">
                    <option value="">Todas as Categorias</option>
                    <?php
                    $categorias_unicas = [];
                    if (isset($_SESSION['catalogo'])) {
                        foreach ($_SESSION['catalogo'] as $item) {
                            if (!in_array($item['categoria'], $categorias_unicas)) {
                                $categorias_unicas[] = $item['categoria'];
                                echo '<option value="' . htmlspecialchars($item['categoria']) . '">' . htmlspecialchars($item['categoria']) . '</option>';
                            }
                        }
                    }
                    ?>
                </select>
            </div>

            <div class="form-actions">
                <button type="submit">Filtrar</button>
                <a href="index.php" class="button secondary">Mostrar Todos</a>
            </div>
        </form>
    </div>

    <?php if (!empty($resultados)): ?>
        <h2>Resultados da Filtragem</h2>
        <div class="curso-container">
            <?php foreach ($resultados as $item): ?>
                <?php exibirItemCatalogo($item); ?>
            <?php endforeach; ?>
        </div>
    <?php elseif (isset($_GET['categoria']) || isset($_GET['tipo'])): ?>
        <p>Nenhum curso encontrado com os filtros especificados.</p>
    <?php endif; ?>
</div>

<?php include 'footer.php'; ?>