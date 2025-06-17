<?php
$disciplinas = ['Português', 'Matemática', 'História', 'Geografia'];
$boletim = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($disciplinas as $disciplina) {
        $nota = isset($_POST[$disciplina]) ? floatval($_POST[$disciplina]) : 0;
        $boletim[$disciplina] = $nota;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 02</title>
</head>
<body>
    <h2>Informe as notas do aluno</h2>
    <form method="post">
        <?php foreach ($disciplinas as $disciplina): ?>
            <label>
                <?php echo $disciplina; ?>:
                <input type="number" name="<?php echo $disciplina; ?>" step="0.1" min="0" max="10" required>
            </label><br>
        <?php endforeach; ?>
        <button type="submit">Enviar</button>
    </form>

    <?php if (!empty($boletim)): ?>
        <h3>Resultado</h3>
            <?php
                foreach ($boletim as $disciplina => $nota): 
                $status = ($nota >= 7.0) ? 'Aprovado' : 'Reprovado';
            ?>
        <ul>
            <li>
            <?php echo $disciplina . "\n"; ?> -
            Nota: <?php echo $nota . "\n"; ?> - 
            <?php echo $status; ?>
            </li>
        </ul>
            <?php endforeach; ?>
    <?php endif; ?>
</body>
</html>