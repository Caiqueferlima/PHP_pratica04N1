<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 13</title>
</head>
<body>
    <h3>Exibir Despesas Mensais</h3>
    <?php
        $count = 0;
        $despesasMensais = [1200.50, 850.75, 1500.00, 920.30, 1100.20];
        echo "As despesas deste mês foram:<br>";
        foreach ($despesasMensais as $despesa) {
            echo "R$" .number_format($despesa * 0.9, 2, ',', '.') . "<br>";
            $count +=1;
        }
    ?>

    <form method="post">
        <input type="submit" name="media" value="Calcular Média Mensal">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['media'])) {        
            echo "<br> Média dos preços: <br>";
            echo "R$" . number_format(array_sum($despesasMensais) / $count, 2, ',', '.') . "<br>";
        }
    ?>
</body>
</html>