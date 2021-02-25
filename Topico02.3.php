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
                <i class="fas fa-folder"></i> 02.3 - Inserção de colunas ou linhas
            </h2>
            <hr >

            <h3 class="font-bold AzulEstado">
                <i class="fas fa-angle-double-right"></i> 02.3.1 - Coluna ou linha única
            </h3>
            <hr class="hrAEstado">

            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th class="BCorEad text-white textmiddle"><h5> Utilizando o menu Inserir </h5></th>
                        <td>
                            <p class="Texto">
                                <i class="fas fa-arrow-right LaranjaEstado"></i> Selecione a célula, coluna ou linha em que você quer inserir a nova coluna ou linha;
                            </p>
                            <p class="Texto">
                                <i class="fas fa-arrow-right LaranjaEstado"></i> Clique em “Planilha → Inserir Colunas” ou “Planilha → Inserir → Linhas”.
                            </p>
                        </td>
                    </tr>
                    <tr><td></td></tr>
                    <tr>
                        <th class="BCorEad text-white textmiddle"><h5> Utilizando o mouse </h5></th>
                        <td>
                            <p class="Texto">
                                <i class="fas fa-arrow-right LaranjaEstado"></i> Selecione a célula, coluna ou linha em que você quer inserir a nova coluna ou linha;
                            </p>
                            <p class="Texto">
                                <i class="fas fa-arrow-right LaranjaEstado"></i> Clique com o botão direito do mouse no cabeçalho da coluna ou da linha;
                            </p>
                            <p class="Texto">
                                <i class="fas fa-arrow-right LaranjaEstado"></i> Escolha entre: <strong>inserir linhas acima, inserir linhas abaixo, inserir colunas à esquerda ou inserir colunas à direita.</strong>
                            </p>
                            <div class="text-center">
                                <p class="TituloFigura"><strong>Figura 5:</strong> Inserindo coluna </p>
                                <a href="imagens/Figura05.png" data-toggle="lightbox" data-footer="Inserindo coluna">
                                    <img class="img-fluid" src="imagens/Figura05.png" alt="Alt_da_Imagem">
                                </a>
                                <p class="FonteFigura"><strong>Fonte:</strong> EGPCE</p>
                            </div>
                            <br><br>
                            
                            <div class="text-center">
                                <p class="TituloFigura"><strong>Figura 6:</strong> Inserindo linha </p>
                                <a href="imagens/Figura06.png" data-toggle="lightbox" data-footer="Inserindo linha">
                                    <img class="img-fluid" src="imagens/Figura06.png" alt="Alt_da_Imagem">
                                </a>
                                <p class="FonteFigura"><strong>Fonte:</strong> EGPCE</p>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>


            <h3 class="font-bold AzulEstado">
                <i class="fas fa-angle-double-right"></i> 02.3.2 - Múltiplas colunas ou linhas
            </h3>
            <hr class="hrAEstado">

            <p class="Texto">
                Você pode também inserir várias colunas ou linhas de uma só vez.
            </p>
            
            <ul class="fa-ul">
                <li>
                    <p class="Texto">
                        <span class="fa-li"></span><li class="fas fa-arrow-right"></li> Selecione o número de colunas ou de linhas pressionando e segurando o botão esquerdo do mouse na primeira, e arraste o número necessário de identificadores.
                    </p>
                </li>
                <li>
                    <p class="Texto">
                        <span class="fa-li"></span><li class="fas fa-arrow-right"></li> Proceda da mesma forma, como fosse inserir uma única linha ou coluna, conforme descrito acima.
                    </p>
                </li>
            </ul>

            <div class="text-center">
                <p class="TituloFigura"><strong>Figura 7:</strong> Inserindo 3 linhas abaixo da linha 1 </p>
                <a href="imagens/Figura07.png" data-toggle="lightbox" data-footer="Inserindo 3 linhas abaixo da linha 1">
                    <img class="img-fluid" src="imagens/Figura07.png" alt="Alt_da_Imagem">
                </a>
                <p class="FonteFigura"><strong>Fonte:</strong> EGPCE</p>
            </div>

            
            <br><br>
            <div class="center">
                <div class="btn-group" id="btn-group">
                    <a href="Topico02.2.php" class="btn btn-outline-success btn-sm">Página Anterior</a>
                    <a href="Topico02.4.php" class="btn btn-outline-success btn-sm">Proxima Página</a>
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