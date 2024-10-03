<!-- Estruturas do PHP estão localizadas em: ./includes/general_tags.php -->

<?php
include "../includes/general_tags.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php echo $head; ?>
</head>
<body>
    <!-- Cabeçalho Global -->
    <?php 
        echo $header;
    ?>

    <!-- Conteúdo Principal -->
    <main>
        <h1>Bem-vindo à Superiores</h1>
        <p>Este é um exemplo de uma página com cabeçalho e rodapé globais.</p>
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