<?php
// funcoes.php

// Inicia a sessão apenas se ela não estiver já iniciada
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function exibirItemCatalogo($item) {
    echo '<div class="curso-item">';
    echo '<img src="img/' . htmlspecialchars($item['imagem'] ?? 'default.png') . '" alt="' . htmlspecialchars($item['titulo']) . '">';
    echo '<h3>' . htmlspecialchars($item['titulo']) . '</h3>';
    echo '<p>Categoria: ' . htmlspecialchars($item['categoria']) . '</p>';
    echo '<p><a href="detalhes.php?id=' . htmlspecialchars($item['id']) . '">Ver mais</a></p>';
    echo '</div>';
}

function exibirDetalhesItem($item) {
    echo '<h2>' . htmlspecialchars($item['titulo']) . '</h2>';
    echo '<p><strong>Categoria:</strong> ' . htmlspecialchars($item['categoria']) . '</p>';
    echo '<img src="img/' . htmlspecialchars($item['imagem'] ?? 'default.png') . '" alt="' . htmlspecialchars($item['titulo']) . '">';
    echo '<p><strong>Descrição:</strong> ' . htmlspecialchars($item['descricao'] ?? 'Sem descrição') . '</p>';
    echo '<p><strong>Professor:</strong> ' . htmlspecialchars($item['professor'] ?? 'Desconhecido') . '</p>';
    echo '<p><strong>Carga Horária:</strong> ' . htmlspecialchars($item['carga_horaria'] ?? 'Não especificada') . '</p>';
    echo '<p><a href="index.php">Voltar ao Catálogo</a></p>';
}

function verificarSessao() {
    if (!isset($_SESSION['usuario_logado']) || $_SESSION['usuario_logado'] !== true) {
        header("Location: login.php");
        exit();
    }
}

function cadastrarNovoItem($novoItem) {
    if (!isset($_SESSION['catalogo'])) {
        $_SESSION['catalogo'] = [];
    }
    // Garante que um ID único seja gerado (simples para este exemplo)
    $novoItem['id'] = uniqid();
    $_SESSION['catalogo'][] = $novoItem;
}

function getItemPorId($id) {
    if (isset($_SESSION['catalogo'])) {
        foreach ($_SESSION['catalogo'] as $item) {
            if ($item['id'] === $id) {
                return $item;
            }
        }
    }
    return null;
}

function filtrarItens($categoria = null, $tipo = null) {
    if (!isset($_SESSION['catalogo'])) {
        return [];
    }
    $resultados = $_SESSION['catalogo'];

    if ($categoria) {
        $resultados = array_filter($resultados, function ($item) use ($categoria) {
            return strtolower($item['categoria']) === strtolower($categoria);
        });
    }

    // Adicione aqui a lógica para filtrar por 'tipo' se necessário

    return $resultados;
}

?>