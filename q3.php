<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 3</title>
</head>
<body>
    <h3>Cadastro de Livros:</h3>

    <form method="post">
        Novo Livro: <input type="text" name="novoLivro"><br><br>
        <input type="submit" value="Mostrar Estoque">
    </form>

    <?php
    if (!isset($_SESSION['livros'])) {
        $_SESSION['livros'] = ["Dom Casmurro", "O Pequeno Príncipe", "1984", "Harry Potter", "O Hobbit"];
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $novoLivro = $_POST['novoLivro'];

        if (!empty($novoLivro)) {
            array_push($_SESSION['livros'], $novoLivro);
        }

        if (isset($_SESSION['livros'][2])) {
            unset($_SESSION['livros'][2]);
            $_SESSION['livros'] = array_values($_SESSION['livros']); // Reorganiza os índices
        }

        echo "<h3>Estoque Final:</h3>";
        foreach ($_SESSION['livros'] as $livro) {
            echo $livro . "<br>";
        }
    }
    ?>
</body>
</html>