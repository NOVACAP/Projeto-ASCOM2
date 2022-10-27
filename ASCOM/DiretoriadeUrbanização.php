<?php 
require_once 'header.php';
?>

<?php masterslider(1); ?>

        <!--body-->
        <div class="container">
        <!--Foto do presidente e título-->
        <div class="row justify-content-center">
            <div class="item col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-4">
                <div class="img_presidente">
                    <img id="fotoPresidente" src="img/foto_presidente.jpg" alt="">
                </div>
                <div class="paralelograma text-white">
                    <ul>
                        <li id="titulo">Diretor de Urbanização</li>
                        <li id="xxx">XXXXXXXXXXXXXXXXX</li>
                        <li id="conteudo">Formação: ----</li>
                    </ul>
                </div>

                <!--texto lado esquerdo-->
                <div id="texto">
                    <h2 class="trasso" id="T1">O que faz a Diretoria de Urbanização?</h2>
                    <p id="P1">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus eos adipisci quos
                        obcaecati eaque, quae ab omnis debitis eveniet laudantium veniam error voluptatem molestiae
                        pariatur, illo natus nam necessitatibus laboriosam.</p>
                    <div id="NRP">
                        <h2 class="trasso" id="T2"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="48"
                                fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path
                                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                            </svg> Normativos, Relatórios e Procedimentos </h2>
                        <ul>
                            <ul>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                            </ul>
                        </ul>
                    </div>
                </div>
            </div>
            <!--Lado Direito-->

            <!--Organograma-->
            <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-4" id="ladoDir">
                <div id="organogramaDU">
                    <div id="DiretU">
                        <p>DIRETORIA DE <br>URBANIZAÇÃO</p>
                    </div>
                    <div id="DEINFRA">
                        <p>DEINFRA</p>
                        <ul>
                            <li>NUASAF</li>
                            <li>DIPROJ</li>
                            <li>DIOB</li>
                            <li>DIMAD</li>
                            <li>DIMAV</li>
                            <li>DIOD</li>
                            <li>DIATEC</li>
                            <li>DIMAM</li>
                        </ul>
                    </div>

                    <div id="DPJ">
                        <p>DPJ</p>
                        <ul>
                            <li>DIAGRO</li>
                            <li>DIPROP</li>
                            <li>DIAVE</li>
                            <li>DIMAVE</li>
                            <li>DIOC</li>
                        </ul>
                    </div>
                </div>
                <!--Fim do Organograma-->

                <!--Normas gerais-->
                <div id="NormasGerais">
                    <h2 class="trasso3" id="T3">Normas gerais</h2>
                    <ul>
                        <li><a href="./documentos/Codigo_de_Etica_Conduta_e_Integridade.pdf">Código de ética</a></li>
                        <li><a href="./documentos/Organograma-2022.jpeg">Organograma</a></li>
                        <li><a href="./documentos/Politica_de_Transacoes_com_Partes_Relacionadas.pdf">Política de
                                Transação</a></li>
                        <li><a href="">Prestação de Contas</a></li>
                        <li><a href="./documentos/Regimento-Interno-2019-2020.pdf">Regimento Interno</a></li>
                        <li><a href="./documentos/Regimento_Interno_Elegibilidade.pdf">Regimento do Comitê de
                                Elegibilidade</a></li>
                        <li><a href="./documentos/REGULAMENTO_DE_LICITACOES_E_CONTRATOS.pdf">Regulamento de Licitações e
                                Contratos</a></li>
                    </ul>
                    <br>
                    <br>
                    <br>
                    <a id="VJ" href="">Veja Todos >>></a>
                </div>
            </div>
        </div>
    </div>
    <div id="TelefoneSessão">
        <h1>Telefone da sessão:</h1>
        <p>3403-2330</p>
    </div>
    
<?php
require_once 'footer.php';
?>