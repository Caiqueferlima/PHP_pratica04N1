<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 5</title>
</head>
<body>
    <h3>Monitoramento de Espécies de Pássaros</h3>
    <form method="post">
        <input type="submit" name="verificar" value="Verificar Espécies">
    </form>

    <?php
    $especiesObservadas = ['Beija-flor', 'Canário', 'Bem-te-vi', 'Sabiá', 'Beija-flor', 'Coruja'];

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['verificar'])) {
        if (in_array('Pardal', $especiesObservadas)) {
            echo "<p>A espécie <strong>Pardal</strong> já foi registrada.</p>";
        } else {
            echo "<p>A espécie <strong>Pardal</strong> ainda não foi registrada.</p>";
        }

        $especiesUnicas = array_unique($especiesObservadas);

        echo "<h4>Espécies únicas observadas:</h4>";
        echo "<ul>";
        foreach ($especiesUnicas as $especie) {
            echo "<li>$especie</li>";
        }
        echo "</ul>";
    }
    ?>
</body>