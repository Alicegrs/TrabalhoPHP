<?php
$titulo = "Login";
include 'header.php';
include 'funcoes.php';

$usuario_admin = 'admin';
$senha_admin_hash = password_hash('admin123', PASSWORD_DEFAULT);

$mensagem_erro = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if ($usuario === $usuario_admin && password_verify($senha, $senha_admin_hash)) {
        $_SESSION['usuario_logado'] = true;
        header("Location: protegido.php");
        exit();
    } else {
        $mensagem_erro = "Usuário ou senha incorretos.";
    }
}

?>

<div class="container">
    <div class="login-container">
        <h1>Login</h1>

        <?php if ($mensagem_erro): ?>
            <p class="erro"><?php echo $mensagem_erro; ?></p>
        <?php endif; ?>

        <form method="POST" action="" class="login-form">
            <div class="form-group">
                <label for="usuario">Usuário:</label>
                <input type="text" id="usuario" name="usuario" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>
            </div>
            <div class="form-actions">
                <button type="submit" class="button primary">Entrar</button>
                <a href="index.php" class="button secondary">Voltar ao Catálogo</a>
            </div>
        </form>
    </div>
</div>

<?php include 'footer.php'; ?>