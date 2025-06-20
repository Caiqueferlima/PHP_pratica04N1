<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 8</title>
</head>
<body>
    <h3>Embaralhar Baralho Virtual</h3>
    <form method="post">
        <input type="submit" name="embaralhar" value="Embaralhar Baralho">
    </form>

    <?php
    $cartas = [
        "Ás de Espadas", "2 de Espadas", "3 de Espadas", "4 de Espadas",
        "Ás de Copas", "2 de Copas", "3 de Copas", "4 de Copas",
        "Ás de Ouros", "2 de Ouros", "3 de Ouros", "4 de Ouros",
        "Ás de Paus", "2 de Paus", "3 de Paus", "4 de Paus"
    ];

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['embaralhar'])) {
        echo "<strong>Baralho antes do embaralhamento:</strong><br>";
        foreach ($cartas as $carta) {
            echo $carta . "<br>";
        }

        shuffle($cartas);

        echo "<br><strong>Baralho depois do embaralhamento:</strong><br>";
        foreach ($cartas as $carta) {
            echo $carta . "<br>";
        }
    }
    ?>
</body>
</html>