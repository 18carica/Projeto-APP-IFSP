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
        .course-table {
            width: 100%;
            margin: 20px 0;
            border-collapse: collapse;
        }
        .course-table th, .course-table td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        .course-table th {
            background-color: #f2f2f2;
            text-align: center; /* Centraliza o texto nos cabeçalhos */
        }
        .course-table td a {
            color: #007bff;
            text-decoration: none;
        }
        .course-table td a:hover {
            text-decoration: underline;
        }
        .course-table td {
            vertical-align: top;
            text-align: justify;
            justify-content: center;
            align-items: center;
        }
        /* Ajustando o tamanho das colunas */
        .course-table td:nth-child(1) {
            width: 20%;
        }
        .course-table td:nth-child(2) {
            width: 60%; /* Reduzindo o tamanho da descrição */
        }
        .course-table td:nth-child(3) {
            width: 20%;
            text-align: center; /* Centraliza o link na coluna PPC */
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
        <h1>Técnicos Concomitante ou Subsequentes</h1>

        <!-- Tabela de Cursos Técnicos -->
        <table class="course-table">
            <thead>
                <tr>
                    <th>Curso</th>
                    <th>Descrição</th>
                    <th>PPC</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Técnico em Edificações</td>
                    <td>
                        O Técnico em Edificações desenvolve e executa projetos de edificações conforme normas técnicas de segurança e de acordo com legislação específica. Planeja a execução e elabora o orçamento de obras; presta assistência técnica no estudo e desenvolvimento de projetos e pesquisas tecnológicas na área de edificações; orienta e coordena a execução de serviços de manutenção de equipamentos e de instalações em edificações; e orienta na assistência técnica para compra, venda e utilização de produtos e equipamentos especializados.
                    </td>
                    <td><a href="https://drive.ifsp.edu.br/s/ApCk3RsZ1AkgVIL" target="_blank">Ver PPC</a></td>
                </tr>
                <tr>
                    <td>Técnico em Eventos</td>
                    <td>
                        O Técnico em Eventos auxilia na prospecção, planejamento, organização, coordenação e execução de serviços de apoio técnico e logístico de eventos e cerimoniais. Utiliza protocolo e etiqueta formal, realiza procedimentos administrativos e operacionais, recepciona e promove serviços de eventos, planeja ornamentos decorativos, e coordena armazenamento e manuseio de gêneros alimentícios servidos em eventos.
                    </td>
                    <td><a href="https://drive.ifsp.edu.br/s/FRBzlpR7nXQvVt4" target="_blank">Ver PPC</a></td>
                </tr>
                <tr>
                    <td>Técnico em Hospedagem</td>
                    <td>
                        O Técnico em Hospedagem atua na recepção e governança em meios de hospedagem, além de hospitais, navios, trens, embarcações e shoppings. Executa atividades de recepção, atendimento ao cliente, serviços de andares, atendimento comercial e implementação de critérios de qualidade na prestação de serviços, prestando suporte ao hóspede durante sua estada.
                    </td>
                    <td><a href="https://drive.ifsp.edu.br/s/MzBY93sBWRLD7Ck" target="_blank">Ver PPC</a></td>
                </tr>
            </tbody>
        </table>
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