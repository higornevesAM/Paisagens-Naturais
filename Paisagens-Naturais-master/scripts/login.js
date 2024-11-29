document.addEventListener("DOMContentLoaded", () => {
  const form = document.querySelector("form");
  const modal = document.getElementById("login-modal");

  form.addEventListener("submit", (event) => {
      event.preventDefault(); // Evita o envio padrão do formulário
      
      const formData = new FormData(form);

      fetch("../cads/salvar_usuario.php", {
          method: "POST",
          body: formData,
      })
      .then((response) => response.text())
      .then((data) => {
          alert(data); // Exibe a resposta do PHP
          if (data.includes("Usuário cadastrado com sucesso!")) {
              modal.style.display = "none"; // Fecha o modal após cadastro
              location.reload(); // Recarrega a página
          }
      })
      .catch((error) => console.error("Erro:", error));
  });
});
