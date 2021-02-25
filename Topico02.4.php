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
                <i class="fas fa-folder"></i> 02.4 - Exclusão de colunas ou linhas
            </h2>
            <hr >

            <h3 class="font-bold AzulEstado">
                <i class="fas fa-angle-double-right"></i> 02.4.1 - Coluna ou linha única
            </h3>
            <hr class="hrAEstado">

            <p class="Texto">
                Uma única coluna ou linha pode ser apagada, utilizando-se o mouse:
            </p>
            <ul class="fa-ul">
                <li>
                    <span class="fa-li"></span><i class="fas fa-arrow-right LaranjaEstado"></i> Selecione a coluna ou linha a ser apagada;
                </li>
                <li>
                    <span class="fa-li"></span><i class="fas fa-arrow-right LaranjaEstado"></i> Clique com o botão direito do mouse no identificador da coluna ou linha;
                </li>
                <li>
                    <span class="fa-li"></span><i class="fas fa-arrow-right LaranjaEstado"></i> Selecione <strong>Excluir Colunas</strong> ou <strong>Excluir Linhas</strong> no menu de contexto.
                </li>
            </ul>

            <h3 class="font-bold AzulEstado">
                <i class="fas fa-angle-double-right"></i> 02.4.2 - Múltiplas colunas ou linhas
            </h3>
            <hr class="hrAEstado">

            <p class="Texto">
                Você pode apagar várias colunas ou linhas de uma vez, ao invés de apagá-las uma por uma.
            </p>
            <ul class="fa-ul">
                <li>
                    <span class="fa-li"></span><i class="fas fa-arrow-right LaranjaEstado"></i> Selecione as colunas que deseja apagar, pressionando o botão esquerdo do mouse na primeira, e arraste o número necessário de identificadores;

                </li>
                <li>
                    <span class="fa-li"></span><i class="fas fa-arrow-right LaranjaEstado"></i> Proceda como se fosse apagar uma única coluna ou linha acima.
                </li>
            </ul>

            <div class="text-center">
                <p class="TituloFigura"><strong>Figura 8:</strong> Excluindo 3(três) linhas abaixo da linha 1 </p>
                <a href="imagens/Figura08.png" data-toggle="lightbox" data-footer="Excluindo 3(três) linhas abaixo da linha 1">
                    <img class="img-fluid" src="imagens/Figura08.png" alt="Alt_da_Imagem">
                </a>
                <p class="FonteFigura"><strong>Fonte:</strong> EGPCE</p>
            </div>

            <br><br>
            <div class="center">
                <div class="btn-group" id="btn-group">
                    <a href="Topico02.3.php" class="btn btn-outline-success btn-sm">Página Anterior</a>
                    <a href="Topico02.5.php" class="btn btn-outline-success btn-sm">Proxima Página</a>
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