<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Feedback</title>
    <link rel="stylesheet" href="../css/feedback.css">
</head>
<body>

        <a href="home.php" class="btn-link">
            <button class="btn"><--Voltar</button>
        </a>

    <div class="container">
        <form id="feedback-form">
            <h1>Formulário de Feedback</h1>
            
            <label for="nome">Seu Nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>
            
            <label for="email">Seu Email:</label>
            <input type="email" id="email" name="email" placeholder="Digite seu email" required>
            
            <label for="avaliacao">Como você avalia nosso serviço?</label>
            <select id="avaliacao" name="avaliacao" required>
                <option value="">Selecione</option>
                <option value="excelente">Excelente</option>
                <option value="bom">Bom</option>
                <option value="regular">Regular</option>
                <option value="ruim">Ruim</option>
            </select>
            
            <label for="mensagem">Sua Mensagem:</label>
            <textarea id="mensagem" name="mensagem" rows="4" placeholder="Escreva aqui seu feedback..." required></textarea>
            
            <button type="submit">Enviar Feedback</button>
        </form>
    </div>

    <!-- Pop-up de Sucesso -->
    <div id="success-popup" class="popup">
        <div class="popup-content">
            <h2>Feedback Enviado com Sucesso!</h2>
            <button id="close-success" class="close-btn">Fechar</button>
        </div>
    </div>

    <!-- Pop-up de Erro -->
    <div id="error-popup" class="popup">
        <div class="popup-content">
            <h2>Erro ao Enviar Feedback! Preencha todos os campos corretamente.</h2>
            <button id="close-error" class="close-btn">Fechar</button>
        </div>
    </div>

    <script src="../scripts/feedback.js"></script>
</body>
</html>
