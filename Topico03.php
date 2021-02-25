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
                <i class="fas fa-folder"></i> 3 - Sintaxe, formatações e comandos
            </h2>

            <p class="Texto"><strong>Objetivo:</strong>  Apresentar a sintaxe padrão do Calc através da utilização de comandos de operações básicas e formatações de fórmulas simples.
            </p>
            
            <hr class="hrLaranja">

            <h2 class="font-bold LaranjaEstado">
                <i class="fas fa-folder"></i> 03.1 - Sintaxe
            </h2>
            <hr >

            <p class="Texto">
                Em uma planilha, nós utilizamos as operações básicas para instruí-la sobre os nossos cálculos, e nos valemos de fórmulas simples para as operações mais sofisticadas.
            </p>

            <div class="text-center">
                <p class="TituloFigura"><strong>Figura 11:</strong> Exemplo de fórmula</p>
                <a href="imagens/Figura11.png" data-toggle="lightbox" data-footer="Texto_Imagem_Modal">
                    <img class="img-fluid" src="imagens/Figura11.png" alt="Exemplo de fórmula">
                </a>
                <p class="FonteFigura">Legenda_da_Imagem</p>
            </div>

            <p class="Texto">
                Observe a fórmula acima para efeito de exemplos de sintaxe. Note que há parênteses, sinais de operadores aritméticos <strong>(+, -, / ,*)</strong>, além de ponto e vírgula e dois pontos.
            </p>

            <h3 class="font-bold AzulEstado">
                <i class="fas fa-angle-double-right"></i> 03.1.1 - Operadores Aritméticos
            </h3>
            <hr class="hrAEstado">

            <section id="quadroConteudo">
                <div class="table-responsive">
                    <table class="table table-hover" style="color: white;">
                        <thead class="table-ead">
                            <tr style="background-color: #4885AE;">
                                <th scope="col">
                                    <h5><strong>Operador</strong></h5>
                                </th>
                                <th scope="col">
                                    <h5><strong>Nome</strong></h5>
                                </th>
                                <th scope="col">
                                    <h5><strong>Exemplo</strong></h5>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <ul class="list-unstyled">
                                        <li class="Texto">
                                        + (mais)
                                        </li>
                                        <li class="Texto">
                                        - (menos) 
                                        </li>
                                        <li class="Texto">
                                        - (menos)
                                        </li>
                                        <li class="Texto">
                                        * (asterisco)
                                        </li>
                                        <li class="Texto">
                                        / (barra)
                                        </li>
                                        <li class="Texto">
                                        % (porcentagem)
                                        </li>
                                        <li class="Texto">
                                        ^ (circunflexo)
                                        </li>
                                    </ul>
                                </td>
                                <td scope="col">
                                    <ul class="list-unstyled">
                                        <li class="Texto">
                                        Adição
                                        </li>
                                        <li class="Texto">
                                        Subtração   
                                        </li>
                                        <li class="Texto">
                                        Negação 
                                        </li>
                                        <li class="Texto">
                                        Multiplicação
                                        </li>
                                        <li class="Texto">
                                        Divisão
                                        </li>
                                        <li class="Texto">
                                        Porcentagem
                                        </li>
                                        <li class="Texto">
                                        Exponenciação
                                        </li>
                                    </ul>
                                </td>
                                <td scope="col">
                                    <ul class="list-unstyled">
                                        <li class="Texto">
                                        1+1
                                        </li>
                                        <li class="Texto">
                                        1-1   
                                        </li>
                                        <li class="Texto">
                                        -5 
                                        </li>
                                        <li class="Texto">
                                        2 * 2
                                        </li>
                                        <li class="Texto">
                                        6/3,1  
                                        </li>
                                        <li class="Texto">
                                        15,00%
                                        </li>
                                        <li class="Texto">
                                        2 ^ 2
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr>
            </section>
            <br>

            <h3 class="font-bold AzulEstado">
                <i class="fas fa-angle-double-right"></i> 03.1.2 - Operadores de Comparação
            </h3>
            <hr class="hrAEstado">

            <section id="quadroConteudo">
                <div class="table-responsive">
                    <table class="table table-hover" style="color: white;">
                        <thead class="table-ead">
                            <tr style="background-color: #4885AE;">
                                <th scope="col">
                                    <h5><strong>Operador</strong></h5>
                                </th>
                                <th scope="col">
                                    <h5><strong>Nome</strong></h5>
                                </th>
                                <th scope="col">
                                    <h5><strong>Exemplo</strong></h5>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <ul class="list-unstyled">
                                        <li class="Texto">
                                        = (sinal de igual)
                                        </li>
                                        <li class="Texto">
                                        > (maior que)
                                        </li>
                                        <li class="Texto">
                                        < (menor que) 
                                        </li>
                                        <li class="Texto">
                                        >= (maior ou igual a)
                                        </li>
                                        <li class="Texto">
                                        <= (menor ou igual a)
                                        </li>
                                        <li class="Texto">
                                        <> (diferente)
                                        </li>
                                    </ul>
                                </td>
                                <td scope="col">
                                    <ul class="list-unstyled">
                                        <li class="Texto">
                                        Igualdade
                                        </li>
                                        <li class="Texto">
                                        Maior que   
                                        </li>
                                        <li class="Texto">
                                        Menor que 
                                        </li>
                                        <li class="Texto">
                                        Maior ou igual a
                                        </li>
                                        <li class="Texto">
                                        Menor ou igual a
                                        </li>
                                        <li class="Texto">
                                        Desigualdade
                                        </li>
                                    </ul>
                                </td>
                                <td scope="col">
                                    <ul class="list-unstyled">
                                        <li class="Texto">
                                        A1 = B1
                                        </li>
                                        <li class="Texto">
                                        A1 > B1
                                        </li>
                                        <li class="Texto">
                                        A1 < B1
                                        </li>
                                        <li class="Texto">
                                        A1 >= B1
                                        </li>
                                        <li class="Texto">
                                        A1 <= B1
                                        </li>
                                        <li class="Texto">
                                        A1 <> B1
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr>
            </section>
            <br>

            <h3 class="font-bold AzulEstado">
                <i class="fas fa-angle-double-right"></i> 03.1.2 - Operadores de Comparação
            </h3>
            <hr class="hrAEstado">

            <section id="quadroConteudo">
                <div class="table-responsive">
                    <table class="table table-hover" style="color: white;">
                        <thead class="table-ead">
                            <tr style="background-color: #4885AE;">
                                <th scope="col">
                                    <h5><strong>Operador</strong></h5>
                                </th>
                                <th scope="col">
                                    <h5><strong>Nome</strong></h5>
                                </th>
                                <th scope="col">
                                    <h5><strong>Exemplo</strong></h5>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <ul class="list-unstyled">
                                        <li class="Texto">
                                        : (dois-pontos)
                                        </li>
                                    </ul>
                                </td>
                                <td scope="col">
                                    <ul class="list-unstyled">
                                        <li class="Texto">
                                        Intervalo
                                        </li>
                                    </ul>
                                </td>
                                <td scope="col">
                                    <ul class="list-unstyled">
                                        <li class="Texto">
                                        A1 : C108
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <ul class="list-unstyled">
                                        <li class="Texto">
                                        ! (ponto de exclamação)
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <ul class="list-unstyled">
                                        <li class="Texto">
                                        Interseção
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <ul class="list-unstyled">
                                        <li class="Texto">
                                        
                                        SOMA (A1 : B6 ! B5 : C12)<br>
                                        Calcula a soma de todas as células na interseção.<br>
                                        Neste exemplo, o resultado traz a soma das células B5 e B6.
                                            
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <ul class="list-unstyled">
                                        <li class="Texto">
                                        ~(til)
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <ul class="list-unstyled">
                                        <li class="Texto">
                                        Concatenação ou união
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <ul class="list-unstyled">
                                        <li class="Texto">
                                            Toma duas referências e retorna uma lista de referência, <br>
                                            que é a concatenação da referência à esquerda seguida da referência à direita.<br>Entradas duplas são referenciadas duplamente.
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr>
            </section>
            <br>



            <br><br>
            <div class="center">
                <div class="btn-group" id="btn-group">
                    <a href="Topico02.5.php" class="btn btn-outline-success btn-sm">Página Anterior</a>
                    <a href="Topico03.2.php" class="btn btn-outline-success btn-sm">Proxima Página</a>
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