<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 12</title>
</head>
<body>
    <?php 
        $precosAntigos = [15.50, 22.00, 30.75, 8.99];
        foreach ($precosAntigos as $preco) {
            echo "Preço antigo: R$ " . number_format($preco, 2, ',', '.') . "<br>";
        }
        
    ?>
    <form method="post">
        <input type="submit" name="precoNovo" value="Calcular Preços com Desconto">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['precoNovo'])) {        
            echo "<br> Preços com 10% de desconto: <br>";
            foreach ($precosAntigos as $preco) {
            echo "R$" .number_format($preco * 0.9, 2, ',', '.') . "<br>";
        }
    }
    ?>
</body>
</html>