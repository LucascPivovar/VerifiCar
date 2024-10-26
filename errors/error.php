<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erro Desconhecido</title>
    <link rel="stylesheet" href="../styles/error.css">
</head>
<body>
    <div class="main">
        <div class="header">
            <?php require('../components/header.php'); ?> 
        </div>
        <div class="container">
            <?php require('../components/search_bar.php'); ?>
            <h1>Aconteceu um erro inesperado :/</h1>
        

            <textarea name="error" id="error" cols="60" rows="10"></textarea>
            <p>Envie um print desta tela para o administrador</p>
        </div>

    </div>
    
</body>
</html>