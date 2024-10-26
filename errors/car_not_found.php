<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carro não encontrado</title>	
    <link rel="stylesheet" href="../styles/car_not_found.css">
</head>
<body>
    <div class="main">
        <div class="header">
            <?php require('../components/header.php'); ?> 
        </div>

        <div class="container">
            <?php require('../components/search_bar.php'); ?>
            <p>Poxa, não conseguimos encontrar este veículo!</p>
            <img src="../assets/404.png" alt="Car not found" class="car_not_found">
        </div>
    </div>
</body>
</html>
