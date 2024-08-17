function toggleMenu() {
    alert('Menu clicado!');
}

let currentSlide = 0;

function changeSlide(direction) {
    const slides = document.querySelectorAll('.carousel-images img');
    const totalSlides = slides.length;

    currentSlide = (currentSlide + direction + totalSlides) % totalSlides;
    const offset = -currentSlide * 100;

    document.querySelector('.carousel-images').style.transform = `translateX(${offset}%)`;
}

document.addEventListener("DOMContentLoaded", () => {
    setInterval(() => {
        changeSlide(1);
    }, 3000); // Muda automaticamente a cada 3 segundos
});
