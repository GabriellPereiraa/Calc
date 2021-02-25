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
                <i class="fas fa-folder"></i> 02.5 - Trabalho com folhas de cálculo
            </h2>
            <hr >

            <h3 class="font-bold AzulEstado">
                <i class="fas fa-angle-double-right"></i> 02.5.1 - Inserir novas folhas
            </h3>
            <hr class="hrAEstado">

            <p class="Texto">
                Há várias maneiras de inserir uma folha na planilha: 
            </p>
            <ul class="fa-ul">
                <li>
                    <span class="fa-li"></span><i class="fas fa-arrow-right LaranjaEstado"></i>  Clique em Planilha → <strong> Clique em Planilha</strong> na Barra de menu;
                </li>
                <li>
                    <span class="fa-li"></span><i class="fas fa-arrow-right LaranjaEstado"></i> Ou clique com o botão direito do mouse e escolha a opção <strong> Inserir Planilha</strong> no menu de contexto;
                </li>
                <li>
                    <span class="fa-li"></span><i class="fas fa-arrow-right LaranjaEstado"></i> Ou clique no sinal "<strong>+</strong>" localizado na parte inferior esquerda da tabela.
                </li>
            </ul>

            <div class="text-center">
                <p class="TituloFigura"><strong>Figura 9:</strong> Inserir planilha </p>
                <a href="imagens/Figura09.png" data-toggle="lightbox" data-footer="Inserir planilha">
                    <img class="img-fluid" src="imagens/Figura09.png" alt="Alt_da_Imagem">
                </a>
                <p class="FonteFigura"><strong>Fonte:</strong> EGPCE</p>
            </div>
            <br>

            <p class="Texto">
                Veja na imagem 10, a caixa de diálogo <strong>Inserir Planilha</strong>. Nela, você pode escolher se as novas folhas serão inseridas antes ou depois da folha selecionada, e quantas folhas quer inserir. Se você for inserir apenas uma folha, existe a opção de dar-lhe um nome.
            </p>

            <h3 class="font-bold AzulEstado">
                <i class="fas fa-angle-double-right"></i> 02.5.2 - Apagar folhas
            </h3>
            <hr class="hrAEstado">

            <p class="Texto">
                As folhas podem ser apagadas individualmente ou em grupos.
            </p>
            <p class="Texto">
                <strong>Folha única:</strong> clique com o botão direito na aba da folha que quer apagar e clique em Excluir Planilha no menu de contexto, ou clique em <strong>Planilha → Excluir planilha</strong> na barra de menu.
            </p>
            <p class="Texto">
                <strong>Múltiplas folhas:</strong> selecione-as utilizando o botão esquerdo do mouse e a tecla <strong>CTRL</strong>, e clique com o botão direito do mouse sobre uma das abas e escolha a opção "<strong>Excluir Planilha</strong>" no menu de contexto, ou <strong>clique em</strong> "<strong>Planilha→ Excluir planilha</strong>" na barra de menu.
            </p>

            <h3 class="font-bold AzulEstado">
                <i class="fas fa-angle-double-right"></i> 02.5.3 - Renomear folhas
            </h3>
            <hr class="hrAEstado">
            
            <p class="Texto">
                O nome padrão para uma folha nova é <strong>PlanilhaX</strong>, onde <strong>X</strong> é um número.
            </p>
            <p class="Texto">
                Apesar disso funcionar para pequenas planilhas com poucas folhas, pode tornar-se complicado quando temos muitas folhas.
            </p>
            <p class="Texto">
                Para colocar um nome mais conveniente a uma folha, você pode:
            </p>
            <ul class="fa-ul">
                <li>
                    <p class="Texto">
                        <span class="fa-li"></span><i class="fas fa-arrow-right"></i> Digitar o nome na caixa Nome, quando você criar a folha, ou;
                    </p>
                </li>
                <li>
                    <p class="Texto">
                        <span class="fa-li"></span><i class="fas fa-arrow-right"></i> Clicar com o botão direito do mouse e escolher a opção <strong>Renomear Planilha</strong> no menu de contexto e trocar o nome atual por um de sua escolha.
                    </p>
                </li>
                <li>
                    <p class="Texto">
                        <span class="fa-li"></span><i class="fas fa-arrow-right"></i> Clicar duas vezes na aba da folha para abrir a caixa de diálogo <strong>Renomear Planilha</strong>.
                    </p>
                </li>
            </ul>

            <h3 class="font-bold AzulEstado">
                <i class="fas fa-angle-double-right"></i> 02.5.4 - Excluir (deletar) conteúdo de uma planilha
            </h3>
            <hr class="hrAEstado">

            <p class="Texto">
                Para <strong>apagar</strong> a célula, basta pressionar a tecla "<strong>Delete</strong>". Será apagado <u>somente</u> o conteúdo da célula e não a formatação existente nela.
            </p>
            <p class="Texto">
            Para escolher as opções de exclusão de conteúdo (formatação), selecione a(s) célula(s) desejada(s) e clique com o botão direito do mouse. Escolha a opção de "<strong>Limpar conteúdo</strong>", surgirá então uma nova janela com as opções:
            </p>

            <ul class="fa-ul">
                <li>
                    <span class="fa-li"></span><i class="fas fa-arrow-right"></i> <strong>Excluir tudo:</strong> exclui todo o conteúdo da célula, independentemente de qual seja;
                </li>
                <li>
                    <span class="fa-li"></span><i class="fas fa-arrow-right"></i> <strong>Números:</strong> apenas os números serão excluídos;
                </li>
                <li>
                    <span class="fa-li"></span><i class="fas fa-arrow-right"></i> <strong>Texto:</strong> se houver letras e números selecionados, apenas as “letras” serão excluídas;
                </li>
                <li>
                    <span class="fa-li"></span><i class="fas fa-arrow-right"></i> <strong>Fórmulas:</strong> apenas fórmulas serão excluídas;
                </li>
                <li>
                    <span class="fa-li"></span><i class="fas fa-arrow-right"></i> <strong>Formatos:</strong> apenas a formatação (tipo de letra, tamanho de letra, cor etc) será excluída;
                </li>
                <li>
                    <span class="fa-li"></span><i class="fas fa-arrow-right"></i> <strong>Objetos:</strong> exclui apenas objetos (figuras, formas ou botões);
                </li>
                <li>
                    <span class="fa-li"></span><i class="fas fa-arrow-right"></i> <strong>Datas e horas:</strong> apenas formatos de data e horas serão excluídos.
                </li>
            </ul>





            <br><br>
            <div class="center">
                <div class="btn-group" id="btn-group">
                    <a href="Topico02.4.php" class="btn btn-outline-success btn-sm">Página Anterior</a>
                    <a href="Topico03.php" class="btn btn-outline-success btn-sm">Proxima Página</a>
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