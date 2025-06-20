<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 10</title>
</head>
<body>
    <h3>Exibir lista sem duplicatas</h3>
    <form method="post">
        <input type="submit" name="mesclar" value="Mesclar IDs">
    </form>

    <?php
        $listaParticipantes = ["Carlos","Ana", "João", "Maria", "João", "Pedro","Maria","Ana"];
        echo "Lista inteira: <br>";
        foreach ($listaParticipantes as $participante) {
            echo $participante . "<br>";
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['mesclar'])) {        
            $listaParticipantes = array_unique($listaParticipantes);

            echo "<br> Lista sem duplicatas: <br>";
            foreach ($listaParticipantes as $participante) {
            echo $participante . "<br>";
        }
        }
    ?>
</body>
</html>

