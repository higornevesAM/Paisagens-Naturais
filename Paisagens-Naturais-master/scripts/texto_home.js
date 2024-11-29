function toggleTexto(id, button) {
    const texto = document.getElementById(id);

    if (texto.classList.contains("oculto")) {
        texto.classList.remove("oculto");
        button.textContent = "Mostrar Menos"; // Alterar texto do botão
    } else {
        texto.classList.add("oculto");
        button.textContent = "Mostrar Mais"; // Alterar texto do botão
    }
}