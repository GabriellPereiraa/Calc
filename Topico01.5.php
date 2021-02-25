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
                <i class="fas fa-folder"></i> 01.5 - Interface do Calc
            </h2>
            <hr >

            <div class="text-center">
                <p class="TituloFigura"><strong>Figura 2:</strong> Interface do Calc</p>
                <a href="imagens/Figura02.png" data-toggle="lightbox" data-footer="Interface do Calc">
                    <img class="img-fluid" src="imagens/Figura02.png" alt="Alt_da_Imagem">
                </a>
                <p class="FonteFigura"><strong>Fonte:</strong> EGPCE</p>
            </div>

            <h3 class="font-bold AzulEstado">
                <i class="fas fa-angle-double-right"></i> 01.5.1 - Barra de título
            </h3>
            <hr class="hrAEstado">

            <p class="Texto">
                Localizada no alto da tela, mostra o nome do documento atual. Quando a planilha for recém-criada, seu nome será “Sem título X”, onde X é um número. Ao ser salva pela primeira vez, você será solicitado a dar um nome a essa planilha. Encontram-se ainda na barra: a logo do Calc (lado superior esquerdo) e os botões de minimizar, restaurar/maximizar e fechar (lado superior direito).
            </p>

            <h3 class="font-bold AzulEstado">
                <i class="fas fa-angle-double-right"></i> 01.5.2 - Barra de menu
            </h3>
            <hr class="hrAEstado">
            
            <p class="Texto">
                Localizada abaixo da barra de título, a Barra de menu é composta por vários menus e submenus, permitindo acesso rápido a uma série de funcionalidades. Você pode personalizar a Barra de menu conforme as suas necessidades. Para isso, vá em <strong>Ferramentas → Personalizar</strong> e vá na guia <strong>Menu</strong>.
            </p>

            <div class="text-center">
                <p class="TituloFigura"><strong>Figura 3:</strong> Personalizar</p>
                <a href="imagens/Figura03.png" data-toggle="lightbox" data-footer="Personalizar">
                    <img class="img-fluid" src="imagens/Figura03.png" alt="Alt_da_Imagem">
                </a>
                <p class="FonteFigura"><strong>Fonte:</strong> EGPCE</p>
            </div>
            <br>

            <h3 class="font-bold AzulEstado">
                <i class="fas fa-angle-double-right"></i> 01.5.3 - Barra de ferramentas
            </h3>
            <hr class="hrAEstado">

            <p class="Texto">
                A barra de ferramentas do LibreOffice inclui elementos comuns aos aplicativos, como os botões: salvar, imprimir, exportar como PDF, desfazer, tabelas etc.
            </p>

            <p class="Texto">
                Na Barra de ferramentas padrão estão várias opções, tais como:
            </p>
            <ul class="fa-ul">
                <li>
                    <p class="Texto">
                        <span class="fa-li"></span><i class="fas fa-arrow-right LaranjaEstado"></i> gráficos;
                    </p>
                </li>
                <li>
                    <p class="Texto">
                        <span class="fa-li"></span><i class="fas fa-arrow-right LaranjaEstado"></i> ajuda;
                    </p>
                </li>
                <li>
                    <p class="Texto">
                        <span class="fa-li"></span><i class="fas fa-arrow-right LaranjaEstado"></i> alinhamento;
                    </p>
                </li>
                <li>
                    <p class="Texto">
                        <span class="fa-li"></span><i class="fas fa-arrow-right LaranjaEstado"></i> numeração;
                    </p>
                </li>
                <li>
                    <p class="Texto">
                        <span class="fa-li"></span><i class="fas fa-arrow-right LaranjaEstado"></i> recuo;
                    </p>
                </li>
                <li>
                    <p class="Texto">
                        <span class="fa-li"></span><i class="fas fa-arrow-right LaranjaEstado"></i> cor da fonte etc.
                    </p>
                </li>
            </ul>


            
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