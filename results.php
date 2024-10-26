<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Resultados</title>
    <link rel="stylesheet" href="./styles/results.css">
</head>
<body>
    <div class="header">
        <?php require './components/header.php'; ?>
    </div>
    <div class="container">
        <?php require './components/search_bar.php'; ?>
        <p>Resultados placa AX1-2363:</p>
        <?php require './components/export.php'; ?>
        <?php require './components/list.php'; ?>

    </div>

    
</body>
</html>