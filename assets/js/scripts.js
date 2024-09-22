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

// Seleciona o item "Nossos Cursos" e o ícone
const nossosCursos = document.querySelector('.nossos-cursos > a');
const chevronIcon = document.getElementById('chevron-icon');
const chevronLink = document.querySelector('.chevron-link');

// Função para alternar o submenu e o ícone
function toggleMenu() {
  const parentLi = nossosCursos.parentElement;

  // Alterna a classe para exibir ou ocultar o submenu
  parentLi.classList.toggle('show-submenu');

  // Alterna o ícone de chevron
  if (parentLi.classList.contains('show-submenu')) {
    chevronIcon.classList.remove('bi-chevron-down');
    chevronIcon.classList.add('bi-chevron-up');
  } else {
    chevronIcon.classList.remove('bi-chevron-up');
    chevronIcon.classList.add('bi-chevron-down');
  }
}

// Adiciona o evento de clique ao item "Nossos Cursos" e ao ícone
nossosCursos.addEventListener('click', function (e) {
  e.preventDefault(); // Evita o comportamento padrão do link
  toggleMenu();
});

chevronLink.addEventListener('click', function (e) {
  e.preventDefault(); // Evita o comportamento padrão do link
  toggleMenu();
});

