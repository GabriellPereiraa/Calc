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
                <i class="fas fa-folder"></i> 02.2 - Seleção de células, colunas, linhas e folhas
            </h2>
            <hr >

            <h2 class="font-bold AzulEstado">
                <i class="fas fa-folder"></i> 02.2.1 Células
            </h2>
            <hr class="hrAEstado">

            <p class="Texto">
                As células podem ser selecionadas de várias maneiras e combinações.
            </p>
            <p class="Texto">
                <strong>Célula única:</strong> clique com o botão esquerdo do mouse sobre a célula.
            </p>
            <p class="Texto">
                <strong>Grupo de células contíguas:</strong> você pode selecionar um grupo de células contíguas, utilizando o teclado ou o mouse.
            </p>

            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th class="BCorEad text-white textmiddle"><h5> Para selecionar um grupo de células arrastando o mouse </h5></th>
                        <td>
                            <p class="Texto">
                                <i class="fas fa-arrow-right LaranjaEstado"></i> Clique em uma célula;
                            </p>
                            <p class="Texto">
                                <i class="fas fa-arrow-right LaranjaEstado"></i> Pressione e segure o botão esquerdo do mouse;
                            </p>
                            <p class="Texto">
                                <i class="fas fa-arrow-right LaranjaEstado"></i> Mova o mouse através da tela com o botão ainda pressionado;
                            </p>
                            <p class="Texto">
                                <i class="fas fa-arrow-right LaranjaEstado"></i> Uma vez selecionado o bloco de células desejado, solte o botão do mouse.
                            </p>
                        </td>
                    </tr>
                    <tr><td></td></tr>
                    <tr>
                        <th class="BCorEad text-white textmiddle"><h5> Para selecionar um grupo de células arrastando o mouse </h5></th>
                        <td>
                            <p class="Texto">
                                <i class="fas fa-arrow-right LaranjaEstado"></i> Clique na célula que será um dos cantos do grupo a ser selecionado;
                            </p>
                            <p class="Texto">
                                <i class="fas fa-arrow-right LaranjaEstado"></i> Mova o mouse para o canto oposto do grupo a ser selecionado, sem pressionar o botão;
                            </p>
                            <p class="Texto">
                                <i class="fas fa-arrow-right LaranjaEstado"></i> Pressione e mantenha a tecla <strong>Shift</strong>;
                            </p>
                            <p class="Texto">
                                <i class="fas fa-arrow-right LaranjaEstado"></i> Clique na célula que será o canto oposto da seleção.
                            </p>
                        </td>
                    </tr>
                    <tr><td></td></tr>
                    <tr>
                        <th class="BCorEad text-white textmiddle"><h5> Para selecionar um grupo de células com o teclado </h5></th>
                        <td>
                        <p class="Texto">
                            <i class="fas fa-arrow-right LaranjaEstado"></i> Clique na célula que será um dos cantos do grupo a ser selecionado;
                        </p>
                        <p class="Texto">
                            <i class="fas fa-arrow-right LaranjaEstado"></i> Pressione e mantenha a tecla Shift;
                        </p>
                        <p class="Texto">
                            <i class="fas fa-arrow-right LaranjaEstado"></i> Utilizando as teclas de navegação do teclado (setas), movimente para selecionar as células.
                        </p>
                        </td>
                    </tr>
                    <tr><td></td></tr>
                    <tr>
                        <th class="BCorEad text-white textmiddle"><h5> Para selecionar células intercaladas </h5></th>
                        <td>
                        <p class="Texto">
                            <i class="fas fa-arrow-right LaranjaEstado"></i> Selecione a primeira célula;
                        </p>
                        <p class="Texto">
                            <i class="fas fa-arrow-right LaranjaEstado"></i> Pressione e mantenha a tecla "<strong>Ctrl</strong>";
                        </p>
                        <p class="Texto">
                            <i class="fas fa-arrow-right LaranjaEstado"></i> Clique nas demais células que desejar.
                        </p>
                        </td>
                    </tr>
                </table>
            </div>

            <h2 class="font-bold AzulEstado">
                <i class="fas fa-folder"></i> 02.2.2 - Colunas, linhas e folhas
            </h2>
            <hr class="hrAEstado">

            <p class="Texto">
                Colunas e linhas inteiras podem ser selecionadas de maneira muito rápida no LibreOffice.
            </p>
            <ul class="fa-ul">
                <li>
                    <p class="Texto">
                        <span class="fa-li"></span><i class="fas fa-arrow-right LaranjaEstado"></i> Para selecionar uma única coluna, clique na letra do identificador da coluna, por exemplo. Para selecionar a coluna <strong>D</strong>, clique sobre a letra <strong>D</strong> no cabeçalho de colunas;
                    </p>
                </li>
                <li>
                    <p class="Texto">
                        <span class="fa-li"></span><i class="fas fa-arrow-right LaranjaEstado"></i> Para selecionar uma única linha, clique no identificador do número da linha, por exemplo. Para selecionar a linha 1, clique sobre o número 1 no cabeçalho de linhas.
                    </p>
                </li>
            </ul>

            <div class="alert" role="alert" style="background-color:#4885AE;">
                <p class="Texto font-bold">Para selecionar múltiplas colunas ou linhas contíguas</p>
                <hr>
                <p class="Texto">
                    <i class="fas fa-arrow-right"></i> Clique na primeira coluna ou linha do grupo;
                </p>
                <p class="Texto">
                    <i class="fas fa-arrow-right"></i> Pressione e segure a tecla Shift;
                </p>
                <p class="Texto">
                    <i class="fas fa-arrow-right"></i> Clique na última coluna ou linha do grupo.
                </p>
            </div>
            <br>

            <div class="alert" role="alert" style="background-color:#4885AE;">
                <p class="Texto font-bold">Para selecionar múltiplas colunas ou linhas não contíguas</p>
                <hr>
                <p class="Texto">
                    <i class="fas fa-arrow-right"></i> Clique na primeira coluna ou linha do grupo;
                </p>
                <p class="Texto">
                    <i class="fas fa-arrow-right"></i> Pressione e segure a tecla Ctrl;
                </p>
                <p class="Texto">
                    <i class="fas fa-arrow-right"></i> Clique em todas as colunas ou linhas subsequente, enquanto segra a tecla Ctrl.
                </p>
            </div>
            <br>

            <p class="Texto">
                Para selecionar uma folha inteira, clique na pequena caixa entre o identificador da coluna "<strong>A</strong>" e o identificador da linha "<strong>1</strong>".
            </p>
            <p class="Texto">
                Você também pode pressionar <strong>Ctrl+A</strong> para selecionar folhas inteiras ou indo em <strong>Editar → Selecionar tudo</strong>.
            </p>


        
            
            <br><br>
            <div class="center">
                <div class="btn-group" id="btn-group">
                    <a href="Topico01.4.php" class="btn btn-outline-success btn-sm">Página Anterior</a>
                    <a href="Topico02.php" class="btn btn-outline-success btn-sm">Proxima Página</a>
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