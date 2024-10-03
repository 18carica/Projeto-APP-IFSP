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
        .content {
            max-width: 900px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .content img {
            max-width: 100%;
            height: auto;
            margin-top: 20px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        .content h1, .content h2, .content h3 {
            text-align: center;
        }
        .content p {
            text-align: justify;
            margin-bottom: 20px;
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
        <div class="content">
            <h1>História da Instituição</h1>
            <p>
                A história do Instituto Federal de Educação, Ciência e Tecnologia de São Paulo – IFSP teve início no século passado, com a própria história do ensino profissional no Brasil. Sua trajetória começa em 1909, quando o presidente da República, Nilo Peçanha, assina o Decreto n.º 7.566, criando as Escolas de Aprendizes Artífices, voltadas para o ensino industrial e a qualificação da mão-de-obra.
            </p>
            <p>
                No ano seguinte, 19 escolas iniciaram suas atividades, entre elas a Escola de Aprendizes Artífices de São Paulo. Desde então, a instituição passou por diversas transformações, até se consagrar como Instituto Federal de Educação, Ciência e Tecnologia de São Paulo, com destaque para seu papel na educação técnica e profissional.
            </p>
            <h2>Do PROEP ao IFSP</h2>
            <p>
                Em 2000, em parceria com o Ministério da Educação e o Programa de Expansão da Educação Profissional – PROEP, foi implantado o projeto CEPROM – Centro de Educação Profissional da Mantiqueira, em Campos do Jordão. A unidade passou a fazer parte do IFSP em 2008, iniciando sua expansão e oferta de cursos técnicos e superiores.
            </p>
            <h2>O Campus</h2>
            <p>
                O Campus Campos do Jordão foi inaugurado em 2 de fevereiro de 2009. Desde então, oferece cursos técnicos e superiores, com ênfase em áreas como Edificações, Informática, Gastronomia e Turismo, além de diversas ações de ensino, pesquisa e extensão.
            </p>
            <h3>Missão e Valores</h3>
            <p>
                A missão do IFSP é formar cidadãos completos, com valores éticos e mentalidade empreendedora, preparados para atuar no mundo do trabalho e contribuir para o desenvolvimento regional e nacional, com base em uma educação pública, gratuita e de qualidade.
            </p>
            <img src="img/historico.png" alt="Imagem do Campus">
        </div>
    </main>

    <!-- Rodapé Global --> 
    <?php 
        echo $footer;
    ?>

    <!-- Script --> 
    <?php 
        echo $script;
    ?>
</body>
</html>
