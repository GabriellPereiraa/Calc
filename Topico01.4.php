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
                <i class="fas fa-folder"></i> 01.4 - Elementos básicos de uma planilha no Calc
            </h2>
            <hr >

            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th class="BCorEad text-white textmiddle"><h5> <i class="fas fa-bullseye "></i> Planilha </h5></th>
                        <td>
                            <p class="Texto">
                                <i class="fas fa-arrow-right LaranjaEstado"></i> É o arquivo completo, com todas as suas abas ou folhas de cálculo. Na primeira aba, podemos ter, por exemplo, o cálculo de despesas do seu escritório. Na segunda aba, as receitas e na terceira aba, um gráfico demonstrativo. 
                            </p>
                            <p class="Texto">
                                <i class="fas fa-arrow-right LaranjaEstado"></i> Cada planilha contém <strong>colunas</strong>, que são dispostas lado a lado, e <strong>linhas</strong> que correm de cima a baixo, lembrando um plano cartesiano, no qual as coordenadas são representadas pelos pares ordenados <strong>"x ; y"</strong>. No caso das planilhas <strong> "coluna ; linha"</strong>. As colunas são rotuladas com letras e as linhas são numeradas. Cada planilha possui 1.048.576 linhas e as colunas vão das letras A à AMJ.

                            </p>
                        </td>
                    </tr>
                    <tr><td></td></tr>
                    <tr>
                        <th class="BCorEad text-white textmiddle"><h5><i class="fas fa-bullseye"></i> Célula </h5></th>
                        <td>
                            <p class="Texto">
                                <i class="fas fa-arrow-right LaranjaEstado"></i> Elemento básico, primordial em uma planilha. É identificado como sendo a interseção entre dois vetores (retângulo que se forma do cruzamento de linha x coluna). Recebe a informação a ser processada, podendo ser textual, numérica, fórmula ou outros caracteres.
                            </p>
                            <p class="Texto">
                                <i class="fas fa-arrow-right LaranjaEstado"></i> No exemplo, a palavra <strong>“CEDIS”</strong> pertence a célula que se forma com o cruzamento da coluna <strong>B</strong> e a linha Logo, o Calc entende esta coordenada como <strong>“B2”</strong>. Ela representa então o que chamamos de <strong>endereço da célula</strong>. Em caso de números, as fórmulas serão baseadas nos endereços da célula, facilitando bastante nossos futuros trabalhos com funções.
                            </p>

                            <div class="text-center">
                                <p class="TituloFigura"><strong>Figura 1:</strong> Exemplo de Célula</p>
                                <a href="imagens/Figura01.png" data-toggle="lightbox" data-footer="Exemplo de Célula">
                                    <img class="img-fluid" src="imagens/Figura01.png" alt="Alt_da_Imagem">
                                </a>
                                <p class="FonteFigura"><stron>Fonte:</stron> EGPCE</p>
                            </div>
                            <br>

                            <p class="Texto">
                                <i class="fas fa-arrow-right LaranjaEstado"></i> Observe ainda que temos (no canto superior esquerdo) o que chamamos de <strong>caixa de endereço</strong>. Através dela podemos visualizar o endereço da célula selecionada.
                            </p>
                        </td>
                    </tr>
                    <tr><td></td></tr>
                    <tr>
                    <th class="BCorEad text-white textmiddle"><h5> <i class="fas fa-bullseye"></i> Valores </h5></th>
                        <td>
                            <p class="Texto">
                                <i class="fas fa-arrow-right LaranjaEstado"></i> Um valor pode representar um dado numérico ou textual inserido pelo usuário ou pode ser resultado de uma fórmula ou função (nativa ou do usuário).
                            </p>
                        </td>
                    </tr>
                    <tr><td></td></tr>
                    <tr>
                    <th class="BCorEad text-white textmiddle"><h5> <i class="fas fa-bullseye"></i> Fórmulas </h5></th>
                    <td>
                        <p class="Texto">
                            <i class="fas fa-arrow-right LaranjaEstado"></i> A fórmula é uma expressão matemática, inserida na célula pelo usuário para calcular um resultado. Os critérios podem ser:
                        </p>

                            <ul class="fa-ul">
                                <li>
                                    <p class="Texto">
                                        <span class="fa-li"></span><i class="fas fa-arrow-right LaranjaEstado"></i> célula;
                                    </p>
                                </li>
                                <li>
                                    <p class="Texto">
                                        <span class="fa-li"></span><i class="fas fa-arrow-right LaranjaEstado"></i> faixa de células; 
                                    </p>
                                </li>
                                <li>
                                    <p class="Texto">
                                        <span class="fa-li"></span><i class="fas fa-arrow-right LaranjaEstado"></i> resultado aritmético; 
                                    </p>
                                </li>
                                <li>
                                    <p class="Texto">
                                        <span class="fa-li"></span><i class="fas fa-arrow-right LaranjaEstado"></i> referência a outras planilhas etc.
                                    </p>
                                </li>
                            </ul>
                        
                        <p class="Texto">
                            A fórmula é a parte inteligente da planilha e sem as fórmulas a planilha. Seria somente um amontoado de textos e números.
                        </p>
                    </td>
                </tr>
                <tr><td></td></tr>
                <tr>
                    <th class="BCorEad text-white textmiddle"><h5><i class="fas fa-bullseye"></i> Funções </h5></th>
                    <td>
                        <p class="Texto">
                            <i class="fas fa-arrow-right"></i>São fórmulas pré-definidas (<strong>nativas</strong>) para pouparem tempo e trabalho na criação de uma equação. O Calc contém muitas funções nativas e o usuário é livre para implementar as suas próprias funções, há de se imaginar como sendo quase ilimitado o poder do usuário em estender a funcionalidade da planilha eletrônica.
                        </p>
                    </td>
                </tr>
                </table>
            </div>
            
            <br><br>
            <div class="center">
                <div class="btn-group" id="btn-group">
                    <a href="Topico01.3.php" class="btn btn-outline-success btn-sm">Página Anterior</a>
                    <a href="Topico01.5.php" class="btn btn-outline-success btn-sm">Proxima Página</a>
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