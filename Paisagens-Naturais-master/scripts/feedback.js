document.getElementById('feedback-form').addEventListener('submit', function(e) {
    e.preventDefault();

    // Obter os campos do formulário
    const nome = document.getElementById('nome').value;
    const email = document.getElementById('email').value;
    const avaliacao = document.getElementById('avaliacao').value;
    const mensagem = document.getElementById('mensagem').value;

    // Validar se todos os campos estão preenchidos
    if (nome && email && avaliacao && mensagem) {
        // Mostrar pop-up de sucesso
        document.getElementById('success-popup').style.display = 'flex';
    } else {
        // Mostrar pop-up de erro
        document.getElementById('error-popup').style.display = 'flex';
    }
});

// Fechar o pop-up de sucesso
document.getElementById('close-success').addEventListener('click', function() {
    document.getElementById('success-popup').style.display = 'none';
});

// Fechar o pop-up de erro
document.getElementById('close-error').addEventListener('click', function() {
    document.getElementById('error-popup').style.display = 'none';
});
