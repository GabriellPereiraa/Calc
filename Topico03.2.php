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
                <i class="fas fa-folder"></i> 03.2 - Formatação de dados
            </h2>
            <hr class="hrLaranja">

            <p class="Texto">
            Os dados no Calc podem ser formatados de várias maneiras. Eles tanto podem ser editados como parte do estilo da célula, e assim a formatação é aplicada automaticamente, quanto podem ser aplicados manualmente à célula. Algumas formatações manuais podem ser aplicadas utilizando-se os ícones da barra de ferramentas. Para um controle maior e opções extras, selecione a célula e clique com o botão direito sobre ela, e selecione Formatar células. Todas as opções de formatação serão tratadas abaixo.
            </p>


            <i class="far fa-lightbulb"></i>
            <strong>Clique nos botões abaixo</strong>

            <section id="MesclarCelulas">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-item" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-success btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                    <h3>Mesclar células</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse1" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                    Um recurso útil do Calc é a possibilidade de mesclar várias células contíguas para formar um título de uma folha de planilha, por exemplo. Para isso, selecione as células contíguas a serem mescladas e vá em “Formatar → Mesclar células → Mesclar células” <strong>ou</strong> “Formatar → Mesclar células → Mesclar e centralizar células”, para centralizar e mesclar.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>


            <div>
                <p class="AtividadeTitulo"> Pratique</p>
                <p class="AtividadeTexto">Uma maneira rápida e fácil de aplicar o recurso de mesclagem de células é procurar o atalho<img class="img-fluid" src="imagens/atalho.png">, localizado na barra de formatação. Por padrão, ele mescla e centraliza o conteúdo.</p> 
                <p class="Texto">
                    <small><i class="fa fa-info-circle fa-lg Azul" aria-hidden="true"></i> Essa atividade é apenas para fins de exercitar o conteúdo já visto, não será avaliada pela equipe no final do curso, portanto, não precisa ser enviada para correção.</small>
                </p>

            </div>
            <br>


            <i class="far fa-lightbulb"></i> 
            <strong>Clique nos botões abaixo</strong>

            <section id="FerramentaPinceldeEstilo">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-item" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-success btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    <h3>Ferramenta pincel de estilo</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse2" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                    Serve para copiar a formatação para outras células da mesma folha da planilha ou para outras folhas.
                                </p>
                                <p class="Texto">
                                    Para copiar o estilo de uma célula, clique uma vez no,<img class="img-fluid" src="imagens/pincel.png">localizado na barra de formatação. Em seguida, clique na célula a ser formatada.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>

            <section id="InserirumaAnotacao">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-item" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-success btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    <h3>Inserir uma anotação (comentário)</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse2" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                    As células podem conter observações de outros usuários ou lembretes que ficam ocultos, isto é, não são impressos. Uma célula contendo uma anotação apresenta um pequeno <span style="color:#FC6B30"> triângulo vermelho </span>no canto superior direito. 
                                </p>
                                <p class="Texto">
                                    Para inserir uma anotação, clique com o botão direito do mouse na célula que conterá a anotação e selecione a opção <strong>Inserir anotação</strong> ou pressione <strong>Ctrl + Alt + C</strong>. Em seguida, digite o texto e clique fora da caixa de texto quando tiver terminado.
                                </p>
                                <p class="Texto">
                                    Para visualizar a anotação, basta posicionar o ponteiro do mouse em cima do <span style="color:#FC6B30"> triângulo vermelho</span>. Você pode ainda clicar com o botão direito sobre a célula que possui a anotação e clicar em "<strong>Mostrar anotação</strong>" para deixá-la sempre a amostra ou clicar em <strong>Excluir anotação</strong> para excluí-la.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>


            <h3 class="font-bold AzulEstado">
                <i class="fas fa-angle-double-right"></i> 03.2.1 Formatação de linhas de texto
            </h3>
            <hr class="hrAEstado">

            <p class="Texto">
                Múltiplas linhas de texto podem ser inseridas em uma única célula, utilizando a quebra automática de texto, ou quebras manuais de linha. Cada um desses métodos é útil em diferentes situações.
            </p>

            <div class="text-center">
                <p class="TituloFigura"><strong>Figura 12:</strong> Quebra de linha em células</p>
                <a href="imagens/Figura12.png" data-toggle="lightbox" data-footer="Quebra de linha em células">
                    <img class="img-fluid" src="imagens/Figura12.png" alt="Alt_da_Imagem">
                </a>
                <p class="FonteFigura"><strong>Fonte:</strong> Guia de Introdução às Funções do LibreOffice Calc</p>
            </div>


            <h4 class="font-bold AzulEstado">
                <i class="fas fa-angle-right"></i> 03.2.1.1 Utilizando a quebra automática de texto
            </h4>
            <hr class="hrAEstado">

            <p class="Texto">
                Para configurar a quebra automática no final da célula, clique com o botão direito nela e selecione a opção <strong>Formatar Células</strong> (ou clique em <strong>Formatar → Células</strong> na barra de menu, ou pressione <strong>Ctrl+1</strong>). Na aba <strong>Alinhamento</strong> embaixo de <strong>Propriedades</strong>, selecione <strong>Disposição automática de texto</strong> e clique em <strong>OK</strong>.
            </p>

            <div>
                <p class="CuriosidadeTitulo"> Curiosidade</p>
                <p class="CuriosidadeTexto">Ainda dentro da caixa de formatação de células, ao selecionar a aba "<strong>Alinhamento</strong>", em propriedades, selecione a caixa "<strong>Disposição automática de texto</strong>". Ficará disponível então, o recurso <strong>Hifenização ativa</strong>que adiciona um "-" quebrando além da linha, também a palavra, quando ela não couber toda de uma vez.</p>
            </div>
            <br>

            <div class="Dica">
                <p class="CuriosidadeTitulo"> Dica</p>
                <p class="CuriosidadeTexto">Uma maneira rápida e fácil de aplicar o recurso recurso de quebra de linha automática, é procurar o atalho,<img class="img-fluid" src="imagens/atalho2.png">localizado na barra de formatação. Por padrão, ele quebra a linha mas não hifeniza.</p>
            </div>
            <br>

            <div class="text-center">
                <p class="TituloFigura"><strong>Figura 13:</strong> Formatar células</p>
                <a href="imagens/Figura13.png" data-toggle="lightbox" data-footer="Formatar células">
                    <img class="img-fluid" src="imagens/Figura13.png" alt="Alt_da_Imagem">
                </a>
                <p class="FonteFigura"><strong>Fonte:</strong> EGPCE</p>
            </div>
            <br>


            <h4 class="font-bold AzulEstado">
                <i class="fas fa-angle-right"></i> 03.2.1.2 Utilizar quebras manuais de linha
            </h4>
            <hr class="hrAEstado">


            <p class="Texto">
                Para inserir uma quebra manual de linha, enquanto digita dentro de uma célula, pressione <strong>Ctrl+Enter</strong>. Quando for editar o texto, primeiro clique duas vezes na célula, depois clique na posição em que você quer quebrar a linha. Quando uma quebra manual de linha é inserida, a largura da célula não é alterada.
            </p>


            <h4 class="font-bold AzulEstado">
                <i class="fas fa-angle-right"></i> 03.2.1.3 Encolher o texto para caber na célula
            </h4>
            <hr class="hrAEstado">

            <p class="Texto">
                O tamanho da fonte pode ser ajustado automaticamente para caber na célula. Para isso, clique com o botão direito na célula a ser formatada e clique em <strong>Formatar Células → na aba Alinhamento</strong>. Marque então o campo <strong>Reduzir para caber na célula</strong>.
            </p>


            <h3 class="font-bold AzulEstado">
                <i class="fas fa-angle-double-right"></i> 03.2.2 Formatação de largura da coluna
            </h3>
            <hr class="hrAEstado">

            <p class="Texto">
                A largura da coluna pode ser ajustada automaticamente, para que consigamos visualizar todo o conteúdo da célula. Para isso, clique com o botão direito na coluna a ser formatada e clique em <strong>Largura ideal da coluna</strong>. Aceite, clicando em <strong>OK</strong>.
            </p>

            <div class="text-center">
                <p class="TituloFigura"><strong>Figura 12:</strong> Largura da coluna</p>
                <a href="imagens/Figura14.png" data-toggle="lightbox" data-footer="Largura da coluna">
                    <img class="img-fluid" src="imagens/Figura14.png" alt="Alt_da_Imagem">
                </a>
                <p class="FonteFigura"><strong>Fonte:</strong> Guia de Introdução às Funções do LibreOffice Calc</p>
            </div>
            <br>
            
            <div>
                <p class="CuriosidadeTitulo"> Curiosidade</p>
                <p class="CuriosidadeTexto">Uma outra maneira de ajustar a largura da coluna é dar um duplo clique com o mouse na linha que separa as colunas:</p>
                <p class="CuriosidadeTexto text-center"><img class="img-fluid" src="imagens/coluna.png"></p>
            </div>
            <br>

            <div class="Dica">
                <p class="CuriosidadeTitulo"> Dica</p>
                <p class="CuriosidadeTexto">
                    <strong>Você realizou seu cálculo e na célula selecionada, ao receber o resultado, se deparou com um conjunto de "#########"? O que será que houve? Será que a fórmula foi digitada de maneira incorreta?</strong>
                </p>
                <p class="CuriosidadeTexto">
                    <strong>Calma, você provavelmente digitou a fórmula correta sim! Esse conjunto de "########" aparece quando a largura da célula está menor do que o resultado final. Para corrigir, basta alterar a largura da coluna para um valor maior.</strong>
                </p>
            </div>
            <br>


            <h3 class="font-bold AzulEstado">
                <i class="fas fa-angle-double-right"></i> 03.2.3 - Formatação de números
            </h3>
            <hr class="hrAEstado">

            <p class="Texto">
                Vários formatos diferentes de números podem ser aplicados às células através dos ícones da Barra de ferramentas de formatação. Selecione a célula, e clique no ícone desejado.
            </p>


            <div class="text-center">
                <p class="TituloFigura"><strong>Figura 15:</strong> Ícones de formatação numérica. Da esquerda para a direita: moeda, porcentagem, data, exponencial, padrão, adiciona casa decimal, exclui casa decimal.</p>
                <a href="imagens/Figura15.png" data-toggle="lightbox" data-footer="Ícones de formatação numérica. Da esquerda para a direita: moeda, porcentagem, data, exponencial, padrão, adiciona casa decimal, exclui casa decimal.">
                    <img class="img-fluid" src="imagens/Figura15.png" alt="Alt_da_Imagem">
                </a>
                <p class="FonteFigura"><strong>Fonte:</strong> EGPCE</p>
            </div>
            <br>

            <p class="Texto">
                Para um melhor controle ou para selecionar outros formatos numéricos, utilize a <strong>aba Números</strong> da caixa de diálogo <strong>Formatar Células:</strong>
            </p>
            <ul class="fa-ul">
                <li class="Texto">
                    <span class="fa-li"></span><i class="fas fa-arrow-right"></i> Aplique qualquer um dos tipos de dados na lista Categoria aos dados;
                </li>
                <li class="Texto">
                    <span class="fa-li"></span><i class="fas fa-arrow-right"></i> Controle o número de casas decimais e de zeros à esquerda;
                </li>
                <li class="Texto">
                    <span class="fa-li"></span><i class="fas fa-arrow-right"></i> Entre com um formato numérico personalizado.
                </li>
            </ul>

            <div class="text-center">
                <p class="TituloFigura"><strong>Figura 16:</strong> Formatação de células no formato de números.</p>
                <a href="imagens/Figura16.png" data-toggle="lightbox" data-footer="Formatação de células no formato de números.">
                    <img class="img-fluid" src="imagens/Figura16.png" alt="Alt_da_Imagem">
                </a>
                <p class="FonteFigura"><strong>Fonte:</strong> EGPCE</p>
            </div>
            <br>


            <h3 class="font-bold AzulEstado">
                <i class="fas fa-angle-double-right"></i> 03.2.4 - Formatação de fontes
            </h3>
            <hr class="hrAEstado">

            <p class="Texto">
                Para escolher rapidamente a fonte a ser utilizada na célula, selecione a célula, e clique na seta próxima à caixa <strong>Nome da Fonte</strong> na Barra de Ferramentas de Formatação e escolha uma fonte da lista.
            </p>
            <p class="Texto">
                Para escolher o tamanho da fonte, clique na seta, ao lado da caixa <strong>Tamanho da Fonte</strong>, na <strong>a Barra de Ferramentas de Formatação</strong> . Para outras formatações, você pode utilizar os ícones de <strong>Negrito</strong>, <span style="font-style: italic;">Italico</span> ou <u>Sublinhado</u>.
            </p>
            <p class="Texto">
                Para escolher a cor da fonte, clique na seta ao lado do ícone "<strong>Cor da Fonte</strong>" para exibir a paleta de cores. Clique na cor desejada.
            </p>
            <p class="Texto">
            Para especificar um idioma para a célula (útil, pois permite que diferentes idiomas possam compartilhar o mesmo documento e ser verificados ortograficamente de maneira correta), utilize a aba <strong>Fonte</strong> da caixa de diálogo <strong>Formatar Células</strong>. Utilize a aba <strong>a Efeitos da Fonte</strong> para ajustar outras características.
            </p>

            <div>
                <p class="CuriosidadeTitulo"> Curiosidade</p>
                <p class="CuriosidadeTexto">Na barra de ferramentas do Calc, você consegue realizar as principais formatações como: mudança de fonte, tamanho, cor, etc.</p>
                <div class="text-center">
                    <p class="TituloFigura"><strong>Figura 17:</strong> Formação de células.</p>
                    <a href="imagens/Figura17.png" data-toggle="lightbox" data-footer="Formação de células.">
                        <img class="img-fluid" src="imagens/Figura17.png" alt="Alt_da_Imagem">
                    </a>
                    <p class="FonteFigura"><strong>Fonte:</strong> EGPCE</p>
                </div>
            </div>
            <br>
            

            <h3 class="font-bold AzulEstado">
                <i class="fas fa-angle-double-right"></i> 03.2.5 - Formatação de bordas da célula
            </h3>
            <hr class="hrAEstado">

            <p class="Texto">
                Para adicionar uma borda a uma célula (ou grupo de células selecionadas), clique no ícone de <strong>Bordas na Barra de ferramentas</strong> de formatação, e selecione uma das opções de bordas mostradas na paleta.
            </p>
            <p class="Texto">
                Para escolher rapidamente um estilo de linha para a borda da célula, clique na pequena seta próxima aos ícones de Estilo da Linha e Cor da Linha, na Barra de ferramentas de formatação. Nos dois casos, uma paleta de opções será exibida.
            </p>
            <p class="Texto">
                Para mais controles, incluindo o espaçamento entre as bordas das células e o texto, utilize a aba <strong>a Bordas na caixa de diálogo Formatar Células</strong>. Lá, também, é possível <u>definir uma sombra</u>.
            </p>

            <div class="text-center">
                <p class="TituloFigura"><strong>Figura 18:</strong> Formatando bordas das células.</p>
                <a href="imagens/Figura18.png" data-toggle="lightbox" data-footer="Formatando bordas das células.">
                    <img class="img-fluid" src="imagens/Figura18.png" alt="Alt_da_Imagem">
                </a>
                <p class="FonteFigura"><strong>Fonte:</strong> EGPCE</p>
            </div>
            <br>

            <h3 class="font-bold AzulEstado">
                <i class="fas fa-angle-double-right"></i> 03.2.6 - Formatação do plano de fundo da célula
            </h3>
            <hr class="hrAEstado">
            <p class="Texto">
                Para escolher rapidamente uma cor para o plano de fundo da célula, clique na pequena seta ao lado do ícone "<strong>Cor do plano de fundo</strong>", na Barra de ferramentas de formatação. Uma paleta de opções de cores, semelhante à paleta de Cores da fonte, é exibida. É possível, também utilizar a aba Plano de fundo da caixa de diálogo "<strong>Formatar Células</strong>"
            </p>
            <br>

            <div>
                <p class="ImportanteTitulo"> Importante</p>
                <p class="ImportanteTexto">
                    <strong>Salvar um documento</strong>
                </p>
                <p class="ImportanteTexto">
                    O "<strong>Salvar</strong>" e o "<strong>Salvar Como</strong>" existem na maioria dos programas como: Office, Corel Draw, Photoshop, entre outros.
                </p>
                <p class="ImportanteTexto">
                    Para <strong>salvar</strong> a planilha temos três opções: a primeira é clicar no menu "<strong>Arquuivo</strong>" e em seguida "<strong>Salvar</strong>". Já a segunda opção é por meio do botão da barra padrão, com o ícone. A terceira é com a tecla de atalho "<strong>CTRL+S</strong>"
                </p>
                <p class="ImportanteTexto">
                    "<strong>Salvar</strong>" e "<strong>Salva Como</strong>" têm a finalidade de salvar, mas o uso dessas funções vai depender da situação:
                </p>
                <p class="ImportanteTexto">
                    Utilizamos o "<strong>Salvar Como</strong>" quando precisamos dar um nome ao arquivo (ou substituir o nome) e dizer ao programa onde este arquivo será gravado (pasta, unidade ou diretório). Usamos o Salvar (<strong>Arquivo – Salvar</strong>) para atualizar as alterações feitas em seu arquivo.
                </p>
            </div>
            <br><br>
            
            <div>
                <p class="AtividadeTitulo"> Atividade</p>
                <p class="AtividadeTexto">Vamos agora colocar em prática os conceitos aprendidos até o momento. Abra seu LibreOffice Calc e digite a planilha abaixo:</p>

                <div class="text-center">
                    <p class="TituloFigura"><strong>Figura 19:</strong> Exercício 1.</p>
                    <a href="imagens/Figura19.png" data-toggle="lightbox" data-footer="Exercício 1.">
                        <img class="img-fluid" src="imagens/Figura19.png" alt="Alt_da_Imagem">
                    </a>
                    <p class="FonteFigura"><strong>Fonte:</strong> EGPCE</p>
                </div>
                <br>

                <p class="Texto">
                    <small><i class="fa fa-info-circle fa-lg Azul" aria-hidden="true"></i> Essa atividade é apenas para fins de exercitar o conteúdo já visto, não será avaliada pela equipe no final do curso, portanto, não precisa ser enviada para correção.</small>
                </p>
            </div>
            <br>

            <p class="Texto">
                <strong> próxima aula, abordaremos as funções que estão disponíveis no Calc. Não acumule conteúdo e mantenha seus estudos em dia!</strong>
            </p>
            

            <br><br>
            <div class="center">
                <div class="btn-group" id="btn-group">
                    <a href="Topico03.php" class="btn btn-outline-success btn-sm">Página Anterior</a>
                    <a href="Referencias.php" class="btn btn-outline-success btn-sm">Proxima Página</a>
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