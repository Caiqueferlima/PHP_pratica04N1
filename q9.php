<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 9</title>
</head>
<body>
    <h3>Mesclar IDs de Duas Fontes</h3>
    <form method="post">
        <input type="submit" name="mesclar" value="Mesclar IDs">
    </form>

    <?php
        $idsFonteA = [101, 105, 102];
        $idsFonteB = [103, 101, 106];
        echo "Ids da Fonte A: <br>";
        foreach ($idsFonteA as $id) {
            echo $id . "<br>";
        }
        echo "<br>Ids da Fonte B: <br>";
        foreach ($idsFonteB as $id) {   
            echo $id . "<br>";
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['mesclar'])) {        
            $todosIds = array_unique(array_merge($idsFonteA, $idsFonteB));

            echo "<br> Todos os IDs combinados (sem duplicatas): <br>";
            foreach ($todosIds as $id) {
                echo $id . "<br>";
            }
        }
    ?>
</body>
</html>

