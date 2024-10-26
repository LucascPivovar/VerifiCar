<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exportar</title>
    <link rel="stylesheet" href="/VerifiCar/styles/export.css">

</head>
<body>
    <div class="main">
            <button id="export-pdf">Exportar PDF <img src="/VerifiCar/assets/pdf.png" alt="exit" id="exit"></button>

        <!-- Modal de Carregamento -->
        <div id="loading-modal" class="modal" style="display: none;">
        <div class="modal-content">
            <h2>Exportando...</h2>
            <img src="https://i.gifer.com/ZZ5H.gif" alt="loading" class="loading-gif">
            <p class="modal-text">Aguarde um instante</p>
        </div>
    </div>

    <!-- Modal de Sucesso -->
    <div id="success-modal" class="modal" style="display: none;">
        <div class="modal-content">
            <h2>Sucesso!</h2>
            <img src="assets/sucess.png" alt="success" class="success-gif">
            <p class="modal-text">seu arquivo foi exportado com sucesso!</p>
        </div>
    </div>
    <script src="./scripts/modal.js"></script>
</body>
</html>