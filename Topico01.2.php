<?php
// HEADER
include('layout/header.php');
?>

<body>
    <!-- PLUGIN DO FADE IN -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- MENU -->
    <?php include('layout/menu.php') ?>

    <div id="main">
        <!-- NAV TOP -->
        <?php include('layout/nav.php') ?>
        <!-- CONTEUDO INICIO -->
        <div class="main-content container-fluid">
            <h2 class="font-bold LaranjaEstado">
                <i class="fas fa-folder"></i> 01.2 -  O que é o Calc?
            </h2>
            <hr >

            <p class="Texto">
                O Calc é um dos componentes da Suíte LibreOffice e que tem como função trabalhar com planilhas eletrônicas, permitindo ao usuário realizar cálculos diversos, indo de um simples cálculo de orçamento doméstico a planilhas corporativas complexas. Dentre os recursos de uma planilha está a possibilidade de apresentar graficamente os dados selecionados pelo usuário.
            </p>

            <p class="Texto">
                Outras funcionalidades oferecidas pelo Calc:
            </p>

            <p class="Texto">
                Trabalharemos durante nosso curso com a versão 5.4.2.2 do LibreOffice, mas você poderá utilizar qualquer outra versão.
            </p>

            <p class="Texto">
            Outras funcionalidades oferecidas pelo Calc:
            </p>
            <p class="Texto">
            <i class="fas fa-arrow-right LaranjaEstado"></i> Funções que podem ser utilizadas para criar fórmulas, a fim de executar cálculos complexos;
            </p>
            <p class="Texto">
            <i class="fas fa-arrow-right LaranjaEstado"></i> Funções de banco de dados, para organizar, armazenas e filtrar dados;
            </p>
            <p class="Texto">
            <i class="fas fa-arrow-right LaranjaEstado"></i> Gráficos dinâmicos: um grande número de opções de gráficos em 2D e 3D; 
            </p>
            <p class="Texto">
            <i class="fas fa-arrow-right LaranjaEstado"></i> Macros: para a gravação e a execução de tarefas repetitivas;
            </p>
            <p class="Texto">
            <i class="fas fa-arrow-right LaranjaEstado"></i> Capacidade de abrir, editar e salvar planilhas no formato <strong> .xls e .xlsx</strong> (Microsoft Excel);
            </p>
            <p class="Texto">
            <i class="fas fa-arrow-right LaranjaEstado"></i> Importação e exportação de planilhas em vários formatos, incluindo HTML, CSV, PDF e PostScript.
            </p>

            <p class="Texto">
                Por ser um software do tipo livre, o LibreOffice.org garante que qualquer pessoa pode utilizá-lo e/ou modificá-lo sem a necessidade de autorização prévia
            </p>

            
            <br><br>
            <div class="center">
                <div class="btn-group" id="btn-group">
                    <a href="Topico01.php" class="btn btn-outline-success btn-sm">Página Anterior</a>
                    <a href="Topico01.3.php" class="btn btn-outline-success btn-sm">Proxima Página</a>
                </div>
            </div>

            <script>
                $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                    event.preventDefault();
                    $(this).ekkoLightbox();
                });                    
            </script>

        </div> <!-- CONTEUDO FIM -->

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>