<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="/VerifiCar/styles/search_bar.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Bar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>
    <div class="search_bar">
        <form action="save_plate.php" method="POST">
            <input type="text" name="placa" placeholder="Digite a placa desejada..." required>
            <button type="submit"><i class="fa fa-search" class="i"></i></button>
        </form>
    </div>
</body>
</html>