<?php 
$nome_site = "IF na Mão";

// Responsável pelos menus superiores da página externa
    $head = 
    "<meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>$nome_site</title>
    <link rel='stylesheet' href='../assets/css/global.css'>
    <link rel='stylesheet' href='../assets/css/hamburguer.css'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap' rel='stylesheet'>
    <style>
        body {
            font-family: 'Work Sans', sans-serif;
        }
    </style>";


// Responsável pelos menus superiores da página externa
    $header = 
    "<!-- Cabeçalho Global -->
        <header>
            <nav>
                <div class='navbar'>
                    <div class='container nav-container'>
                        <input class='checkbox' type='checkbox' name='' id='' />
                        <div class='hamburger-linhas'>
                            <span class='linha linha1'></span>
                            <span class='linha linha2'></span>
                            <span class='linha linha3'></span>
                        </div>  
                        
                        <div class='menu-items'>
                            <li><a href='../index.php'>Home</a></li>
                            <li><a href='./podcast.php'>Podcast</a></li>
                            <li><a href='./historico.php'>Histórico</a></li>
                            <li><a href='./campus.php'>Campus</a></li>
                            <li><a href='./areas.php'>Áreas</a></li>
                            <li class='nossos-cursos'>
                                <a href='#'>Nossos Cursos</a>
                                <i href='#' class='chevron-link'>
                                    <i class='bi bi-chevron-down' id='chevron-icon' style='margin-top: 12px; font-size: 1.2rem;'></i>
                                </i>
                                <ul class='submenu'>
                                    <li><a href='./tecnicos.php'>Técnicos</a></li>
                                    <li><a href='./tecnicos-integrados.php'>Técnicos Integrados</a></li>
                                    <li><a href='./superiores.php'>Superiores</a></li>
                                    <li><a href='./extensao.php'>Cursos de Extensão</a></li>
                                </ul>
                            </li>
                            <li><a href='./galeria.php'>Galeria</a></li>
                            <li><a href='./sobre.php'>Sobre</a></li>
                        
                            <div class='icons-navbar'>
                                <a href='https://www.ifspcjo.edu.br/contato'><i class='bi bi-envelope-fill'></i></a>
                                <a href='tel:+5512983080050'><i class='bi bi-telephone-fill'></i></a>
                                <a href='https://instagram.com'><i class='bi bi-instagram'></i></a>
                                <a href='https://facebook.com'><i class='bi bi-facebook'></i></a>
                                <a href='https://youtube.com'><i class='bi bi-youtube'></i></a>
                                <a href='https://www.google.com/maps/place/Instituto+Federal+de+Educa%C3%A7%C3%A3o,+Ci%C3%AAncia+e+Tecnologia+de+S%C3%A3o+Paulo+-+Campus+Campos+do+Jord%C3%A3o/@-22.7427304,-45.5925402,15z/data=!4m6!3m5!1s0x94cc89dae7f8099f:0x198fcf4cf3c2df0d!8m2!3d-22.7427304!4d-45.5925402!16s%2Fg%2F1pv5kmv42?entry=ttu&g_ep=EgoyMDI0MDkxMS4wIKXMDSoASAFQAw%3D%3D' class='bi bi-geo-alt-fill'></a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <div class='page-title'>If na mão</div>
            <img src='../img/Artboard 1 copy 2.png' alt='Logo' class='logo'>
        </header>
     ";

// Responsável pelo footer da página externa
    $footer = 
    "<footer>
      <p>© 2024 IF na Mão - Todos os direitos reservados.</p>
    </footer>";

// Responsável pelo Carrossel, Menu, etc...
    $script =
    "<script src='../assets/js/scripts.js'></script>";
?>