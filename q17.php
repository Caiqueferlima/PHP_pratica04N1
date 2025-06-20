<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 17</title>
</head>
<body>
    <h3>Análise de Frase</h3>
    <form method="post">
        <input type="submit" name="analisar" value="Analisar Frase">
    </form>

    <?php
    $textoAnalise = "A programação PHP é fundamental para o desenvolvimento web";
    echo "<strong>Frase para análise:</strong><br> $textoAnalise <br><br>";
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['analisar'])) {
        $palavras = explode(" ", $textoAnalise);
        echo "<strong>Vetor de palavras:</strong><br>";
        echo "<pre>";
        print_r($palavras);
        echo "</pre>";
        echo "<strong>Quantidade de palavras:</strong> " . count($palavras);
    }
    ?>
</body>
</html>