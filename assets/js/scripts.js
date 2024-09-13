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


  // Seleciona o checkbox do menu 
  const checkbox = document.querySelector('.checkbox');

  // Adiciona um listener de clique no documento inteiro
  document.addEventListener('click', function (event) {
  const isClickInsideMenu = event.target.closest('.nav-container');

  // Se o clique não for no menu e o checkbox estiver marcado desmarca o checkbox
    if (!isClickInsideMenu && checkbox.checked) {
      checkbox.checked = false;
    }
  });

