// Certificar que o modal começa oculto ao carregar a página
document.addEventListener("DOMContentLoaded", () => {
    const modal = document.getElementById("imageModal");
    if (modal) {
        modal.style.display = "none";
    }
});

// Função para abrir o modal
function openModal(imageSrc, captionText) {
    const modal = document.getElementById("imageModal");
    const modalImage = document.getElementById("modalImage");
    const caption = document.getElementById("caption");

    if (modal && modalImage && caption) {
        modal.style.display = "flex"; // Exibir o modal
        modalImage.src = imageSrc; // Definir a imagem do modal
        caption.textContent = captionText; // Definir o texto da legenda
    } else {
        console.error("Um ou mais elementos do modal não foram encontrados.");
    }
}

// Função para fechar o modal
function closeModal() {
    const modal = document.getElementById("imageModal");
    if (modal) {
        modal.style.display = "none"; // Ocultar o modal
    } else {
        console.error("Elemento modal não encontrado.");
    }
}

// Fechar modal ao clicar fora da imagem
document.addEventListener("click", (event) => {
    const modal = document.getElementById("imageModal");
    const modalImage = document.getElementById("modalImage");

    if (modal && event.target === modal && event.target !== modalImage) {
        closeModal(); // Fecha o modal se o clique foi fora da imagem
    }
});