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
                <div class="page-title">
                    
                <hr>
                    <!-- Título -->
                    <h2 class="font-bold">Titulo</h2>
                <hr>
                    <!-- Sub Título -->
                    <p class="SubTitulo">Sub_Titulo</p>
                <hr>
                    <!-- Sub Sub Título -->
                    <p class="SubSubTitulo">Sub_Sub_Titulo</p>
                <hr>
                    <!-- Texto -->
                    <p class="Texto">Texto</p>
                <hr>
                <!-- Importante -->
                <div>
                    <p class="ImportanteTitulo"> Importante</p>
                    <p class="ImportanteTexto">Texto_do_Importante</p>
                </div>
                <hr>
                <!-- Titulo Figura -->
                <div class="text-center">
                    <p class="TituloFigura"><strong>Figura 1:</strong> Titulo_da_Figura</p>
                    <a href="imagens/Figura01.png" data-toggle="lightbox" data-footer="Texto_Imagem_Modal">
                        <img class="img-fluid" src="imagens/Figura01.png" alt="Alt_da_Imagem">
                    </a>
                    <p class="FonteFigura">Legenda_da_Imagem</p>
                </div>
                <hr>
                <!-- Fique Atento -->
                <div>
                    <p class="FiqueAtentoTitulo"> Fique Atento</p>
                    <p class="FiqueAtentoTexto">Texto_do_Fique_Atento</p>
                </div>
                <hr>
                <!-- Curiosidade -->
                <div>
                    <p class="CuriosidadeTitulo"> Curiosidade</p>
                    <p class="CuriosidadeTexto">Texto_do_Curiosidade</p>
                </div>
                <hr>
                <!-- Nota de Rodapé -->
                <p class="NotaDeRodape"> Nota_de_Rodapé_fica_aqui</p>
                <hr>    
                <!-- Atividade -->
                <div>
                    <p class="AtividadeTitulo"> <br>Atividade</p>
                    <p class="AtividadeTexto">Texto_do_Atividade</p>
                </div>
                <hr>
                <!-- Saiba Mais -->
                <div>
                    <p class="SaibaMaisTitulo"> Saiba Mais</p>
                    <p class="SaibaMaisTexto">Texto_do_Saiba Mais</p>
                </div>
                <hr>
                <!-- **** Citações *****-->
                <div class="col-md-12">
                    <blockquote class="blockquoteEad">
                        <p class="mb-0">“O homem é um ser que não tem garantido de antemão seu próprio ser, mas deve conquistá-lo por empenho de sua própria liberdade.”</p>
                        <footer class="blockquote-footer">(OLIVEIRA, 1993, p.11))</footer>
                    </blockquote>
                </div>
                <!-- Fim Citações -->

                    
                <!-- SCRIPT LIGHTBOX -->
                <script>
                    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                        event.preventDefault();
                        $(this).ekkoLightbox();
                    });                    
                </script>

                </div> <!-- CLASS PAGE TITLE FIM -->
            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
