<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Seleção</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles/selection_style.css">
</head>
<body>
    <div class="main">
        
        <div class="header">
            <?php require './components/header.php'; ?> 
        </div>

        <h1>Selecione a consulta desejada</h1>
        <div class="container">
            <div class="frame_one">
                <h3>Débitos</h3>
                <ul>
                    <li>Multas</li>
                    <li>Licensiamento</li>
                    <li>IPVA</li>
                </ul>
                <a href="search.php" id="open"><button id="open_one">Acessar</button></a>
            </div>
            <div class="frame_two">
                <h3>Informações veículos</h3>
                <ul>  
                    <li>Informações básicas</li>
                    <li>Renavan</li>
                    <li>Chaci</li>
                    <li>Leilões</li>
                    <li>Gravame</li>
                </ul>
                <a href="search.php" id="open"><button id="open_two">Acessar</button></a>

            </div>
        </div>
    </div>
    
</body>
</html>