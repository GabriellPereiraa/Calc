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
                <i class="fas fa-folder"></i> 2 - Trabalhando com células, colunas, linhas e folhas de cálculo
            </h2>

            <p class="Texto"><strong>Objetivo:</strong>  Conhecer alguns dos elementos básicos relacionados as células, colunas, linhas e folhas de cálculo.
            </p>
            
            <hr class="hrLaranja">

            <h2 class="font-bold LaranjaEstado">
                <i class="fas fa-folder"></i> 02.1 - Intervalo de Célula    
            </h2>
            <hr >

            <p class="Texto">
            Saber a diferença entre o uso do ponto-e-vírgula e o uso dos dois pontos nas operações realizadas tanto no MSExcel quanto no LibreOffice Calc é de importância fundamental.  
            </p>

            <p class="Texto">
                Imagine os seguintes dados: <strong>A4</strong> = 1; <strong>A5</strong> = 2; <strong>A6</strong> = 3.
            </p>

            <p class="Texto">
                O uso dos <strong>DOIS PONTOS</strong> “:” em planilhas eletrônicas equivale ao intervalo de um número <strong>a</strong> outro.
            </p>

            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th class="BCorEad text-white textmiddle"><h5> Exemplo </h5></th>
                        <td>
                            <p class="Texto">
                                =SOMA(A4:A6)
                            </p>
                        </td>
                    </tr>
                    <tr><td></td></tr>
                </table>
            </div>

            <p class="Texto">
                Com essa fórmula dizemos para a planilha que efetue a soma dos valores contidos no intervalo entre as célula4 e A6.
            </p>
            <p class="Texto">
                <strong>Em resumo, o cálculo realizado será: A4 + A5 + A6 = 1+2+3 = 6</strong>
            </p>
            <p class="Texto">
                Ao utilizar <strong>PONTO E VÍRGULA</strong> "<strong>;</strong>" dizemos para a planilha que devem ser somados os números, e somente eles, contidos nas respectivas células citadas:
            </p>

            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th class="BCorEad text-white textmiddle"><h5> Exemplo </h5></th>
                        <td>
                            <p class="Texto">
                                =SOMA(A4; A6)
                            </p>
                        </td>
                    </tr>
                    <tr><td></td></tr>
                </table>
            </div>

            <p class="Texto">
                <strong>Em resumo, o cálculo realizado será: A4 + A6 = 1+3 = 4</strong>
            </p>

            <div class="Dica">
                <p class="CuriosidadeTitulo"> Dica</p>
                <p class="CuriosidadeTexto">
                Vale lembrar que se quisermos selecionar as células A1, A2, A3, A4, A5, A6 e A7 para somar seu conteúdo, podemos fazer assim:
                </p>
                <p class="CuriosidadeTexto">
                    <strong>=SOMA(A1;A2;A3;A4;A5;A6;A7)</strong> Ou de uma maneira mais simples: <strong>=SOMA(A1:A7)</strong>
                </p>
            </div>

            
            <br><br>
            <div class="center">
                <div class="btn-group" id="btn-group">
                    <a href="Topico01.5.php" class="btn btn-outline-success btn-sm">Página Anterior</a>
                    <a href="Topico02.2.php" class="btn btn-outline-success btn-sm">Proxima Página</a>
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