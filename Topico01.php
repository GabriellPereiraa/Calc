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
                <i class="fas fa-folder"></i> 1 – Conhecendo a interface do Calc
            </h2>

            <p class="Texto"><strong>Objetivo:</strong>  Apresentar o editor de planilhas Calc e seus elementos básicos.
            </p>
            
            <hr class="hrLaranja">

            <h2 class="font-bold LaranjaEstado">
                <i class="fas fa-folder"></i> 01.1 - Suíte LibreOffice
            </h2>
            <hr >

            <p class="Texto">
                Potente suíte de escritório, sua interface limpa. Suas poderosas ferramentas libertam a criatividade e melhoram a produtividade. O LibreOffice incorpora várias aplicações que a tornam uma da mais avançada suíte de escritório livre e de código aberto do mercado. O Calc permite abrir arquivos de outras suítes de escritório, como, por exemplo, o Pacote Office da Microsoft. Isso, graças à utilização do formato Open Document (ODF – OpenDocument Format).  
            </p>

            <p class="Texto">
                A Suíte conta com editor de texto (<strong>Writer</strong>), editor de planilhas (<strong>Calc</strong>), criador de apresentações (<strong>Impress</strong>), editor de desenho e fluxogramas (<strong>Draw</strong>), banco de dados (<strong>Base</strong>) e editor de equações (<strong>Math</strong>)
            </p>

            <p class="Texto">
                Trabalharemos durante nosso curso com a versão 5.4.2.2 do LibreOffice, mas você poderá utilizar qualquer outra versão.
            </p>

            
            <br><br>
            <div class="center">
                <div class="btn-group" id="btn-group">
                    <a href="Apresentacao.php" class="btn btn-outline-success btn-sm">Página Anterior</a>
                    <a href="Topico01.2.php" class="btn btn-outline-success btn-sm">Proxima Página</a>
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