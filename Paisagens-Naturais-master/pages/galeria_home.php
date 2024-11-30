<link rel="stylesheet" href="../css/galeria_home.css">
<div class="belezasNaturais">
    <div class="bn">
        <h3 class="t3">Mont Saint-Michel</h3>
        <img src="../assets/mont.jpg" alt="Mont Saint-Michel" class="imgMont" onclick="openModal('../assets/mont.jpg', 'Mont Saint-Michel')" />
    </div>

    <div class="bn">
        <h3 class="t3">Vale de Loire</h3>
        <img src="../assets/vale.jpg" alt="Vale de Loire" class="imgVale" onclick="openModal('../assets/vale.jpg', 'Vale de Loire')" />
    </div>

    <div class="bn">
        <h3 class="t3">Região da Provença</h3>
        <img src="../assets/provenca.jpg" alt="Região da Provença" class="imgProv" onclick="openModal('../assets/provenca.jpg', 'Região da Provença')" />
    </div>
</div>

<div class="saibamais">
    <h1 class="t2">Saiba mais sobre as Belezas naturais clicando aqui</h1>
    <a class="saibamaisbut" href="../pages/belezasnaturais.php">Belezas Naturais</a>
</div>

<!-- Modal -->
<!-- Modal -->
<div id="imageModal" class="modal">
    <button class="close" onclick="closeModal()">&times;</button>
    <img class="modal-content" id="modalImage" alt="Imagem ampliada">
    <div id="caption"></div>
</div>

<script src="../scripts/galeria_home.js"></script>