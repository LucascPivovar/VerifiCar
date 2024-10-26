<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
    <link rel="stylesheet" href="./styles/login_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

</head>
<body>
    
    <div class="container">
        <div class="login_form">
            <h1>Entre em sua conta</h1>
            <h3>VerifiCar</h3>
            <form action="login.html" method="post">
                <label for="email">Usuario</label>
                <input type="user" name="user" id="user" required placeholder="Digite seu Usuario...">
                <label for="password">Senha</label>
                <input type="password" name="password" id="password" required placeholder="Digite sua Senha">
                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>

    
</body>
</html>