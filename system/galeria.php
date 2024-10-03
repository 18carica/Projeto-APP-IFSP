<!-- Estruturas do PHP estão localizadas em: ./includes/general_tags.php -->

<?php
include "../includes/general_tags.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php echo $head; ?>
    <style>
        body {
            font-family: 'Work Sans', sans-serif;
        }
        .gallery-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
            margin: 20px;
        }
        .gallery-item {
            position: relative;
            cursor: pointer;
        }
        .gallery-item img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            transition: transform 0.3s;
        }
        .gallery-item img:hover {
            transform: scale(1.05);
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
        }
        .modal img {
            width: 80%;
            max-width: 700px;
            height: auto;
        }
        .close, .prev, .next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 30px;
            color: white;
            cursor: pointer;
        }
        .close {
            right: 20px;
            font-size: 40px;
        }
        .prev {
            left: 10px;
        }
        .next {
            right: 10px;
        }
    </style>
</head>
<body>
    <!-- Cabeçalho Global -->
    <?php 
        echo $header;
    ?>

    <!-- Conteúdo Principal -->
    <main>
        <h1>Bem-vindo à Galeria</h1>
        <p>Abaixo estão as fotos mais recentes do nosso campus e eventos.</p>

        <!-- Galeria de Fotos 4x4 -->
        <div class="gallery-container">
            <div class="gallery-item"><img src="img/foto1.jpg" alt="Foto 1"></div>
            <div class="gallery-item"><img src="img/foto2.jpg" alt="Foto 2"></div>
            <div class="gallery-item"><img src="img/foto3.jpg" alt="Foto 3"></div>
            <div class="gallery-item"><img src="img/foto4.jpg" alt="Foto 4"></div>
            <div class="gallery-item"><img src="img/foto5.jpg" alt="Foto 5"></div>
            <div class="gallery-item"><img src="img/foto6.jpg" alt="Foto 6"></div>
            <div class="gallery-item"><img src="img/foto7.jpg" alt="Foto 7"></div>
            <div class="gallery-item"><img src="img/foto8.jpg" alt="Foto 8"></div>
            <div class="gallery-item"><img src="img/foto9.jpg" alt="Foto 9"></div>
            <div class="gallery-item"><img src="img/foto10.jpg" alt="Foto 10"></div>
            <div class="gallery-item"><img src="img/foto11.jpg" alt="Foto 11"></div>
            <div class="gallery-item"><img src="img/foto12.jpg" alt="Foto 12"></div>
            <div class="gallery-item"><img src="img/foto13.jpg" alt="Foto 13"></div>
            <div class="gallery-item"><img src="img/foto14.jpg" alt="Foto 14"></div>
            <div class="gallery-item"><img src="img/foto15.jpg" alt="Foto 15"></div>
            <div class="gallery-item"><img src="img/foto16.jpg" alt="Foto 16"></div>
        </div>

        <!-- Modal para Visualização Ampliada -->
        <div id="galleryModal" class="modal">
            <span class="close">&times;</span>
            <span class="prev">&#10094;</span>
            <img class="modal-content" id="modalImage">
            <span class="next">&#10095;</span>
        </div>
    </main>

    <!-- Rodapé Global --> 
    <?php 
        echo $footer;
    ?>

    <!-- Scripts para abrir/fechar o modal e navegar nas fotos -->
    <script>
        const modal = document.getElementById("galleryModal");
        const modalImg = document.getElementById("modalImage");
        const galleryItems = document.querySelectorAll(".gallery-item img");
        let currentIndex;

        galleryItems.forEach((item, index) => {
            item.addEventListener("click", () => {
                modal.style.display = "flex";
                modalImg.src = item.src;
                currentIndex = index;
            });
        });

        document.querySelector(".close").addEventListener("click", () => {
            modal.style.display = "none";
        });

        document.querySelector(".next").addEventListener("click", () => {
            currentIndex = (currentIndex + 1) % galleryItems.length;
            modalImg.src = galleryItems[currentIndex].src;
        });

        document.querySelector(".prev").addEventListener("click", () => {
            currentIndex = (currentIndex - 1 + galleryItems.length) % galleryItems.length;
            modalImg.src = galleryItems[currentIndex].src;
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Script --> 
    <?php 
        echo $script;
    ?>
</body>
</html>
