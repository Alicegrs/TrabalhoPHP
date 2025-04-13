<?php
$titulo = "Catálogo de Cursos Online";
include 'header.php';
include 'funcoes.php';

if (!isset($_SESSION['catalogo'])) {
    $_SESSION['catalogo'] = [
        [
            'id' => '1',
            'titulo' => 'Introdução ao PHP',
            'categoria' => 'Programação',
            'imagem' => 'teste.png',
            'descricao' => 'Curso básico de PHP para iniciantes.',
            'professor' => 'João Silva',
            'carga_horaria' => '40 horas'

        ],
        [
            'id' => '2',
            'titulo' => 'HTML e CSS Essencial',
            'categoria' => 'Web Design',
            'imagem' => 'teste1.png',
            'descricao' => 'Aprenda a estruturar e estilizar páginas web.',
            'professor' => 'Maria Oliveira',
            'carga_horaria' => '30 horas'
        ],
        [
            'id' => '3',
            'titulo' => 'JavaScript para Web',
            'categoria' => 'Programação',
            'imagem' => 'teste2.png',
            'descricao' => 'Domine a interatividade no front-end.',
            'professor' => 'Carlos Pereira',
            'carga_horaria' => '50 horas'
        ],
        [
            'id' => '4',
            'titulo' => 'Design Gráfico para Iniciantes',
            'categoria' => 'Design',
            'imagem' => 'teste3.png',
            'descricao' => 'Conceitos fundamentais do design visual.',
            'professor' => 'Ana Souza',
            'carga_horaria' => '35 horas'
        ],
        [
            'id' => '5',
            'titulo' => 'Java para Iniciantes',
            'categoria' => 'Programação',
            'imagem' => 'teste4.png',
            'descricao' => 'Primeiros passos no mundo da programação Java.',
            'professor' => 'Ricardo Alves',
            'carga_horaria' => '45 horas'
        ],
        [
            'id' => '6',
            'titulo' => 'C# Essencial',
            'categoria' => 'Programação',
            'imagem' => 'teste5.png',
            'descricao' => 'Introdução à linguagem C# e ao .NET.',
            'professor' => 'Fernanda Lima',
            'carga_horaria' => '40 horas'
        ],
        [
            'id' => '7',
            'titulo' => 'Desenvolvimento Mobile com Android Studio',
            'categoria' => 'Mobile',
            'imagem' => 'teste6.png',
            'descricao' => 'Crie seus primeiros aplicativos Android.',
            'professor' => 'Gustavo Mendes',
            'carga_horaria' => '55 horas'
        ],
        [
            'id' => '8',
            'titulo' => 'Desenvolvimento Mobile com Flutter',
            'categoria' => 'Mobile',
            'imagem' => 'teste7.png',
            'descricao' => 'Construa aplicativos multiplataforma com Flutter.',
            'professor' => 'Patrícia Souza',
            'carga_horaria' => '50 horas'
        ],
    ];
}

?>

    <h1>Catálogo de Cursos Online</h1>

    <div class="curso-container">
        <?php foreach ($_SESSION['catalogo'] as $item): ?>
            <?php exibirItemCatalogo($item); ?>
        <?php endforeach; ?>
    </div>

    <p><a href="filtrar.php">Filtrar Cursos</a></p>
    <p><a href="login.php">Login</a></p>

<?php include 'footer.php'; ?>