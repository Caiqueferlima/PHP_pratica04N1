<?php
//Inicializa o vetor de produtos na sessão
session_start();
if (!isset($_SESSION['produtos'])) {
    $_SESSION['produtos'] = [];
}

//Processa o formulário
if ($_SERVER['REQUEST_METHOD'] === 'POST' && count($_SESSION['produtos']) < 5) {
    $nome = $_POST['nome'];
    $sku = $_POST['sku'];
    if ($nome && $sku) {
        $_SESSION['produtos'][] = ['nome' => $nome, 'sku' => $sku];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 01</title>
</head>
<body>
    <h2>Cadastro de Produtos</h2>
    <?php if (count($_SESSION['produtos']) < 5): ?>
        <form method="post">
            <label>Nome do Produto: <input type="text" name="nome" required></label><br>
            <label>SKU: <input type="text" name="sku" required></label><br>
            <button type="submit">Cadastrar</button>
        </form>
    <?php else: ?>
        <p>Limite de 5 produtos cadastrados atingido.</p>
    <?php endif; ?>

    <h3>Lista de Produtos</h3>
    <ul>
        <?php foreach ($_SESSION['produtos'] as $produto): ?>
            <li>Produto: <?= $produto['nome'] ?> - SKU: <?= $produto['sku'] ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>