<?php 
require_once 'header.php';
?>


<!--Navbar laranja e imagem-->
<div class="view2 intro hm-purple-light" id="starter" style="z-index: 2;">

    <?php 
        the_custom_logo();
        
        $args = array(
    'post_type' => 'banners',
    'post_status' => 'publish',
    'posts_per_page' => 1
);

$query = new WP_Query($args);
if($query -> have_posts()):
    while($query -> have_posts()): $query -> the_post();
    ?>
            <div class="imagem-banner">
                <?php the_post_thumbnail();?>
            </div>
    <?php
    endwhile;   
endif;

    ?>

        <nav id='menu'>
            <input type='checkbox' id='responsive-menu' onclick='updatemenu()' style="z-index: 1;"><label></label>
            <ul class="dropdownmenus">
                <li><a href='#'>A NOVACAP</a>
                    <ul class="submenu1">
                        <li><a href="https://www.novacap.df.gov.br/acervo/">ACERVO</a></li>
                        <li><a href="https://www.novacap.df.gov.br/dpj/">ÁREA VERDE</a></li>
                        <li><a href="https://www.novacap.df.gov.br/objetivo/">OBJETIVO</a></li>
                    </ul>
                </li>

                <li><a href='#'>SERVIÇOS</a>
                    <ul class="submenu1-2">
                        <li><a href="http://intranet/intranet/achados-perdidos/">ACHADOS E PERDIDOS</a></li>
                        <li><a href="https://www.gdfnet.df.gov.br/Autenticacao/Login?ReturnUrl=%2f">CONTRACHEQUE</a></li>
                        <li><a href="http://intranet/intranet/classificados/">ESPAÇO SERVIDOR</a></li>
                        <li><a href="https://www.novacap.df.gov.br/objetivo/">SUPORTE TÉCNICO</a>
                            <ul class="submenu2">
                                <li><a href="http://10.115.1.35/glpi">Abertura de chamado</a></li>
                                <li><a href="ftp://nsv04/intranet/Documentos/manual_glpi_suporte.pdf">Manual de abertura de chamado</a></li>
                            </ul>
                        </li>
                        <li><a href="http://intranet/intranet/wp-content/uploads/2022/02/RAMAIS_ATUALIZADOS_EM_PAPEL_TIMBRADO_IV.pdf">TELEFONES</a></li>
                        <li class="hover-sub"><a href="https://www.novacap.df.gov.br/objetivo/">TICKET E VALESHOP</a>
                            <ul class="submenu2">
                                <li><a href="http://intranet/intranet/wp-content/uploads/2021/03/Redes-que-aceitam-o-vale.pdf">Relação das Redes credenciais</a></li>
                                <li><a href="http://intranet/intranet/wp-content/uploads/2020/05/Rede-de-postos-Credenciados.pdf">Lista de postos</a></li>
                                <li><a href="https://www.valeshop.com.br/site/">Valeshop</a></li>
                            </ul>
                        </li>
                        <li><a href="http://intranet/intranet/vocesabia/">VOCÊ SABIA?</a></li>
                        <li><a href="https://www.novacap.df.gov.br/objetivo/">WEB</a>
                            <ul class="submenu2">
                                <li><a href="https://www.novacap.df.gov.br/">Novacap</a></li>
                                <li><a href="http://www.transparencia.df.gov.br/#/">Transparência</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li><a href='http://intranet/intranet/wp-content/uploads/2021/02/TOP-10.pdf'>INOVACAP</a></li>


                <li><a href='#'>SISTEMAS</a>
                    <ul class="submenu1-2-2">
                        <li><a href="https://sei.df.gov.br/sip/login.php?sigla_orgao_sistema=GDF&sigla_sistema=SEI">SEI GDF</a></li>
                        <li><a href="#">PONTO ELETRÔNICO</a>
                            <ul class="submenu2">
                                <li><a href="https://centraldofuncionario.com.br/30902">Empregado</a></li>
                                <li><a href="https://www.secullum.com.br/pt/produtos/ponto">Gestor</a></li>
                            </ul>
                        </li>
                        <li><a href="http://sistemas.novacap.df.gov.br/sisgcon/">SISGCON</a></li>
                        <li><a href="#">GESTÃO RH</a>
                            <ul class="submenu2">
                                <li><a href="http://appin.novacap.df.gov.br/gestaorh/">Gestão RH</a></li>
                                <li><a href="http://sistemas.novacap.df.gov.br/sisferias/">SISFÉRIAS</a></li>
                                <li><a href="http://appin.novacap.df.gov.br/sissaude/">SISSAÚDE</a></li>
                                <li><a href="http://sistemas.novacap.df.gov.br/vcomb/">Vale Combustível</a></li>
                                <li><a href="http://sistemas.novacap.df.gov.br/vtransp/">Vale Transporte</a></li>
                                <li><a href="https://app.powerbi.com/view?r=eyJrIjoiMmVmZWJlNDItZTY4OC00NjhmLWE5YzgtMzZkZjFiZmU0MjNkIiwidCI6ImY2NWJhNWU5LWZlOWItNGU4NS05YWRkLTA1ODI5ODc5NGI1MSJ9&pageName=ReportSection">Painel de Acompanhamento ASO</a></li>
                            </ul>
                        </li>
                        <li><a href="https://www.infobras.so.df.gov.br/login.xhtml">INFOBRAS</a></li>
                        <li><a href="http://appin.novacap.df.gov.br/sislicitadm/">LICITAÇÕES</a></li>
                        <li><a href="https://www.autovisionweb.ddns.com.br/v3/">MONITORAMENTO VEÍCULOS</a></li>
                        <li><a href="http://sistemas.novacap.df.gov.br/obrasmadmin/">OBRAS NOVACAP</a></li>
                        <li><a href="http://sistemas.novacap.df.gov.br/sisprot/">PROTOCOLO</a></li>
                        <li><a href="http://sistemas.novacap.df.gov.br/sgpo">SGPO</a></li>
                        <li><a href="http://appin.novacap.df.gov.br/sisbalanca/public/">SISBALANCA</a></li>
                        <li><a href="http://appin.novacap.df.gov.br/sisepi/">SISEPI</a></li>
                        <li><a href="http://sig.novacap.df.gov.br/portal/">SIG NOVACAP</a></li>
                        <li><a href="http://sicop.df.gov.br/sicopweb/">SICOP WEB</a></li>
                        <li><a href="http://sigmanet.segad.df.gov.br/asi/apresentacao/IndexASI.html">SIGMANET PIM</a></li>
                        <li><a href="http://appin.novacap.df.gov.br/sisdio/index.php/login?redirect=">SISDIO</a></li>
                        <li><a href="http://appin.novacap.df.gov.br/sisfaturamento/">SISFATURAMENTO</a></li>
                        <li><a href="http://sistemas.novacap.df.gov.br/sisjur/">SISJUR</a></li>
                        <li><a href="http://sistemas.novacap.df.gov.br/sispatrimonio/">SISPATRIMONIO</a></li>
                        <li><a href="http://sistemas.novacap.df.gov.br/sispodas/">SISPODAS</a></li>
                        <li><a href="http://sistemas.novacap.df.gov.br/sislicencas/">LICENÇAS AMBIENTAIS</a></li>
                        <li><a href="http://sistemas.novacap.df.gov.br/sisviveiro/">SISVIVEIRO</a></li>
                        <li><a href="https://cas.gdfnet.df.gov.br/owa/auth/logon.aspx?replaceCurrent=1&url=https%3a%2f%2fcas.gdfnet.df.gov.br%2fowa%2f">WEBMAIL</a></li>
                        <li><a href="http://wiki.novacap.sede/mediawiki/index.php/P%C3%A1gina_principal">NOVACAPWIKI</a></li>
                    </ul>
                </li>
                <li><a href='#'>GOVERNANÇA</a>
                    <ul class="submenu1-2-2-2">
                        <li><a href="#">LEGISLAÇÃO</a>
                            <ul class="submenu2">
                                <li><a href="#">Leis</a></li>
                                <li><a href="#">Decretos</a></li>
                                <li><a href="#">Instruções</a></li>
                            </ul>
                        </li>
                        <li><a href="#">SALA DE ESTUDOS</a>
                            <ul class="submenu2">
                                <li><a href="https://www.youtube.com/watch?v=ZoYscA5jpD8">IV Café com Governança</a></li>
                                <li><a href="https://www.youtube.com/watch?v=idP57h-ggvk">V Café com Covernança e Complience - CGDF</a></li>
                                <li><a href="https://www.youtube.com/watch?v=zxIA5MfmW9o">VI Café com Governaça e Complience</a></li>
                                <li><a href="https://www.youtube.com/watch?v=ypbbg0l35TA">Entrevista do diretor-presidente da ANPO</a></li>
                                <li><a href="https://www.onetrust.com/br/blog/dia-internacional-da-protecao-de-dados/">Dia Internacional da Proteção de Dados</a></li>
                            </ul>
                        </li>
                        <li><a href="#">NOTÍCIAS</a>
                            <ul class="submenu2">
                                <li><a href="#">NOTICIA PLACEHOLDER</a></li>
                                <li><a href="#">NOTICIA PLACEHOLDER</a></li>
                                <li><a href="#">NOTICIA PLACEHOLDER</a></li>
                            </ul>
                        </li>
                        <li><a href="#">GESTÃO DE RISCO</a>
                            <ul class="submenu2">
                                <li><a href="http://intranet/intranet/wp-content/uploads/2021/02/Plano-de-Trabalho-4%C2%B0-Trimestre-2020.pdf">Plano de trabalho</a></li>
                                <li><a href="http://intranet/intranet/wp-content/uploads/2021/02/Cronograma-4%C2%B0-Trimestre-2020.pdf">Cronograma</a></li>
                                <li><a href="http://intranet/intranet/wp-content/uploads/2021/02/Apresenta%C3%A7%C3%A3o-%C3%A0-CGDF-dez-2020.pdf">Apresentação à CGDF(Gestão de Riscos)</a></li>
                                <li><a href="http://intranet/intranet/wp-content/uploads/2021/02/Cronograma-Proposto-CGDF-Gest%C3%A3o-de-Riscos.pdf">Cronograma Proposto CGDF(Integridade)</a></li>
                                <li><a href="http://intranet/intranet/wp-content/uploads/2022/01/RESUMO-EXECUTIVO-Met-de-GR-Final-CONSAD-08.12.2021.pdf">Escopo Contexto e Criterio Contratos de Obras (aprovado DIREX 31.03.2021)</a></li>
                                <li><a href="http://intranet/intranet/wp-content/uploads/2021/09/Escopo-Contexto-e-Criterio-Contratos-de-Obras-aprovado-DIREX-31.03.2021.pdf">RESUMO EXECUTIVO- Metodologia e Gestão de Riscos (20.10.2021)</a></li>
                            </ul>
                        </li>
                        <li><a href="#">INTEGRIDADE</a>
                            <ul class="submenu2">
                                <li><a href="https://www.novacap.df.gov.br/wp-content/uploads/2019/12/Codigo_de_Etica_Conduta_e_Integridade.pdf">Código de Ética e Conduta</a></li>
                                <li><a href="http://intranet/intranet/wp-content/uploads/2022/02/POL%C3%8DTICA-DE-DIVULGA%C3%87%C3%83O-DE-INFORMA%C3%87%C3%95ES.pdf">Política de divulgação de informações</a></li>
                                <li><a href="https://www.novacap.df.gov.br/wp-content/uploads/2019/12/Politica_de_Transacoes_com_Partes_Relacionadas.pdf">Política de Transação com Partes Relacionadas</a></li>
                                <li><a href="http://intranet/intranet/wp-content/uploads/2021/06/POLITICA-DE-DISTRIBUICAO-DE-DIVIDENDOS-E-JUROS-SOBRE-O-CAPITAL-PROPRIO.pdf">Política de Distribuição de Dividendos</a></li>
                                <li><a href="http://intranet/intranet/wp-content/uploads/2021/11/Pol%C3%ADtica-de-Gest%C3%A3o-de-Riscos-aprovada-DIREX_CONSAD.pdf">Política de Gestão de Risco(aprovada DIREX- 29.07.2021)</a></li>
                                <li><a href="http://intranet/intranet/wp-content/uploads/2021/11/Pol%C3%ADtica-de-Governan%C3%A7a-Organizacional-aprovada-DIREX_CONSAD.pdf">Política de Governança Organizacional(aprovada DIREX - 29.07.2021)</a></li>
                                <li><a href="http://intranet/intranet/wp-content/uploads/2021/10/Escopo-Contexto-e-Criterio-Contratos-de-Obras-aprovado-DIREX-31.03.2021.pdf">Escopo COntexto e Critério Contratos de Obras (aprovado DIREX -31.03.2021)</a></li>
                                <li><a href="http://intranet/intranet/wp-content/uploads/2022/01/RESUMO-EXECUTIVO-Met-de-GR-Final-CONSAD-08.12.2021.pdf">Resumo Executivo - Metodologia de Gestão de Riscos- para DIREX (10.11.2021)</a></li>
                                <li><a href="http://intranet/intranet/wp-content/uploads/2022/01/RESUMO-EXECUTIVO-Met-de-GR-Final-CONSAD-08.12.2021.pdf">Programa de integridade 2022</a></li>
                            </ul>
                        </li>
                        <li><a href="">TRANSPARÊNCIA</a>
                            <ul class="submenu2">
                                <li><a href="https://www.novacap.df.gov.br/wp-content/uploads/2019/09/CARTA_DE_GOVERNANCA_Publicacao__04.03.2020_.pdf">Carta Anual de Políticas Publicas 2020</a></li>
                                <li><a href="https://www.novacap.df.gov.br/wp-content/uploads/2019/09/Carta-Anual-de-Politicas-Publicas-e-Governanca-Corporativa-2021.pdf">Carta Anual de Políticas Públicas 2021</a></li>
                                <li><a href="http://intranet/intranet/wp-content/uploads/2022/03/CARTA-DE-GOVERNAN%C3%87A-FINAL-ap%C3%B3s-altera%C3%A7%C3%B5es-para-CONSAD-28.03.2022-1.pdf">Carta Anual de Políticas Públicas 2022</a></li>
                                <li><a href="https://www.novacap.df.gov.br/wp-content/uploads/2021/02/Relatorio-de-Sustentabilidade-2020.pdf">Relatório de Sustentabilidade 2020</a></li>
                                <li><a href="https://www.novacap.df.gov.br/wp-content/uploads/2021/02/Relatorio-de-Gestao-2020-resize.pdf">Relatório de Gestão 2020</a></li>
                                <li><a href="http://intranet/intranet/wp-content/uploads/2022/05/Plano-de-A%C3%A7%C3%A3o-da-Ouvidoria-Exerc%C3%ADcio-2021-2022-v2.pdf">Plano de Ação Anual 2021-2022 OUVIDORIA</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href='https://www.novacap.df.gov.br/a-lei-de-acesso/'>LAI</a></li>
                <li><a href='#'>ASCOM</a></li>
            </ul>
        </nav>
    </div>
    <img id="wave" src="<?php echo get_stylesheet_directory_uri(). '/assets/img/wave-ai.svg'?>" alt="">

    <!--Fim da Navbar laranja e imagem-->

    <!--body-->

    <!--libras-->
    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
    
    <!-- CARTOES INICIAIS -->
    <section class="container-fluid" id="containerFluid__cards">
        <div class="row">
            <div class="col-sm" id="cardDir">
                <img src="<?php echo get_stylesheet_directory_uri(). '/assets/img/DIR-ADMINISTRATIVA-ai.svg'?>" alt="">
                <h2>Diretoria Administrativa</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, quas ducimus? Velit, ipsum quasi
                    quis dignissimos voluptatum, doloribus obcaecati unde alias perferendis hic voluptates impedit iusto
                    delectus deserunt autem quo.</p>
                    <a href="#">Veja Mais >>></a>
            </div>
            <div class="col-sm" id="cardDir">
                <img src="<?php echo get_stylesheet_directory_uri(). '/assets/img/DIR-FINANCEIRA-ai.svg'?>" alt="">
                <h2>Diretoria Financeira</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, quas ducimus? Velit, ipsum quasi
                    quis dignissimos voluptatum, doloribus obcaecati unde alias perferendis hic voluptates impedit iusto
                    delectus deserunt autem quo.</p>
                    <a href="#">Veja Mais >>></a>
            </div>
            <div class="col-sm" id="cardDir">
                <img src="<?php echo get_stylesheet_directory_uri(). '/assets/img/DIR-EDIFICACOES-ai.svg'?>" alt="">
                <h2>Diretoria de Edificações</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, quas ducimus? Velit, ipsum quasi
                    quis dignissimos voluptatum, doloribus obcaecati unde alias perferendis hic voluptates impedit iusto
                    delectus deserunt autem quo.</p>
                    <a href="#">Veja Mais >>></a>
            </div>
            <div class="col-sm" id="cardDir">
                <img src="<?php echo get_stylesheet_directory_uri(). '/assets/img/DIR-URBANIZACAO-ai.svg'?>" alt="">
                <h2>Diretoria de Urbanização</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, quas ducimus? Velit, ipsum quasi
                    quis dignissimos voluptatum, doloribus obcaecati unde alias perferendis hic voluptates impedit iusto
                    delectus deserunt autem quo.</p>
                    <a href="#">Veja Mais >>></a>
            </div>
            <div class="col-sm" id="cardDir">
                <img src="<?php echo get_stylesheet_directory_uri(). '/assets/img/DIR-JURIDICA-ai.svg'?>" alt="">
                <h2>Diretoria Jurídica</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, quas ducimus? Velit, ipsum quasi
                    quis dignissimos voluptatum, doloribus obcaecati unde alias perferendis hic voluptates impedit iusto
                    delectus deserunt autem quo.</p>
                    <a href="#">Veja Mais >>></a>
            </div>
        </div>

        <div class="row">
            <div class="col-auto mr-auto classeT">
                <img src="<?php echo get_stylesheet_directory_uri(). '/assets/img/NORMASGERAIS-ai.svg'?>" alt="">
                <h2>Normas Gerais</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, quas ducimus? Velit, ipsum quasi
                    quis dignissimos voluptatum, doloribus obcaecati unde alias perferendis hic voluptates impedit iusto
                    delectus deserunt autem quo.</p>
                <a href="#">Veja Mais >>></a>
            </div>
            <div class="col-auto mr-auto classeT">
                <img src="<?php echo get_stylesheet_directory_uri(). '/assets/img/SECULLUMPONTOELETRONICO-ai.svg'?>" alt="">
                <h2>Scrullum Ponto Eletrônico</h2>
                <p style="margin-bottom: 4rem; margin-top: 0.5rem;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, quas ducimus? Velit, ipsum quasi
                    quis dignissimos voluptatum, doloribus obcaecati unde alias perferendis hic voluptates impedit iusto
                    delectus deserunt autem quo.</p>
                    <a href="#">Veja Mais >>></a>
            </div>
            <div class="col-auto mr-auto classeT">
                <img src="<?php echo get_stylesheet_directory_uri(). '/assets/img/DEGEP-DRH-ai.svg'?>" alt="">
                <h2>DIGEP- DRH</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, quas ducimus? Velit, ipsum quasi
                    quis dignissimos voluptatum, doloribus obcaecati unde alias perferendis hic voluptates impedit iusto
                    delectus deserunt autem quo.</p>
                    <a href="#">Veja Mais >>></a>
            </div>
            <div id="AP" class="col-auto mr-auto classeT">
                <br>
                <div id="circulo">
                <img src="<?php echo get_stylesheet_directory_uri(). '/assets/img/ACOESEPROJETOS-ai.svg'?>" alt="">
                </div>
                <br>
                <br>
                <br>
                <br>

                <h2>Ações e projetos</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, quas ducimus? Velit, ipsum quasi
                    quis dignissimos voluptatum, doloribus obcaecati unde alias perferendis hic voluptates impedit iusto
                    delectus deserunt autem quo.</p>
                    <a class="text-white" href="#">Veja Mais >>></a>
            </div>

            <div id="DaNovacap" class="col-auto mr-auto classeT">

            
                <div class="button">
                    DOWNLOAD
                    <img src="<?php echo get_stylesheet_directory_uri(). '/assets/img/DOWNLOAD (1)-ai.svg'?>" alt="">
                    <p>Lorem ipsum dolor sit amet clit nam? </p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- ********************************************************************** -->
                <!-- AVISO LEGAL -->

    <div class="Avisos">
        <h1>Aviso Legal & Comunicados oficiais</h1>
        <p>Fique atento aos avisos da Novacap</p>
    </div>

    <section class="container-fluid" id="containerAviso">

        <!--aviso 1-->
        <div class="row" id="Colum">
            <div class="col-sm" id="aCartao">
                <?php  $args = [
                'post_type' => 'aviso',
                'post_status' => 'publish',
                'posts_per_page' => 6
                ];

                $my_posts = get_posts($args);
                foreach ($my_posts as $post){ ?>

                <!-|Imagem aviso->
                <div class="imagem-aviso">
                    <?php the_post_thumbnail();?>
                </div>
            <!-Título do aviso->
                    <p id="p1"><?php echo $post-> post_title;?></p>
                    <p id="p2"><?php echo $post-> post_content; ?></p>
                </div>
            </div>
                <?php } ?>
        </div>
        <a href="#" class="vejaTodos">Veja todos >>></a>
    </section>


    <div class="noticias">
        <h1>Notícias</h1>
        <p>Saiba todas as obras e ações que estão acontecendo em Brasília e no Distrito Federal com participação e fiscalização da Companhia Urbanizadora da Nova Capital</p>
    </div>

        <div> <?php include 'slide.php'; ?> </div>
    <div class="row" id="Colum">
            <div class="col-sm" id="noticias">
                <?php  $args = [
                'post_type' => 'noticias',
                'post_status' => 'publish',
                'posts_per_page' => 1
                ];

                $my_posts = get_posts($args);
                foreach ($my_posts as $post){ ?>

                <!--|Imagem aviso-->
                <div class="imagem-noticia">
                    <?php the_post_thumbnail();?>
                </div>
            <!--Título do aviso-->
                    <p id="p1"><?php echo $post-> post_title;?></p>
                    <p id="p2"><?php echo $post-> post_content; ?></p>
            </div>
                <?php } ?>
        </div>

    <section id="noticiasCartao" class="container text-center containerC">
        <div id="noticiaCol" class="row row-cols-3">
            <div class="col" id="nCartao">
                <img src="<?php echo get_stylesheet_directory_uri(). '/assets/img/caminhao.png'?>" alt="">
                <p id="noticiaData">june 30,2018</p>
                <h3>Recuperação do Anel Viário</h3>
                <h4>O objetivo da obra é captar as águas das chuva e lançá-las mais à frente, sem comprometer o meio ambiente e a população que mora na região.</h4>
            </div>
            <div class="col" id="nCartao">
                <img src="<?php echo get_stylesheet_directory_uri(). '/assets/img/caminhao.png'?>" alt="">
                <p id="noticiaData">june 30,2018</p>
                <h3>Recuperação do Anel Viário</h3>
                <h4>O objetivo da obra é captar as águas das chuva e lançá-las mais à frente, sem comprometer o meio ambiente e a população que mora na região.</h4>
            </div>
            <div class="col" id="nCartao">
                <img src="<?php echo get_stylesheet_directory_uri(). '/assets/img/caminhao.png'?>" alt="">
                <p id="noticiaData">june 30,2018</p>
                <h3>Recuperação do Anel Viário</h3>
                <h4>O objetivo da obra é captar as águas das chuva e lançá-las mais à frente, sem comprometer o meio ambiente e a população que mora na região.</h4>
            </div>
        </div>
        <div id="noticiaCol" class="row row-cols-3">
            <div class="col" id="nCartao">
                <img src="<?php echo get_stylesheet_directory_uri(). '/assets/img/caminhao.png'?>" alt="">
                <p id="noticiaData">june 30,2018</p>
                <h3>Recuperação do Anel Viário</h3>
                <h4>O objetivo da obra é captar as águas das chuva e lançá-las mais à frente, sem comprometer o meio ambiente e a população que mora na região.</h4>
            </div>
            <div class="col" id="nCartao">
                <img src="<?php echo get_stylesheet_directory_uri(). '/assets/img/caminhao.png'?>" alt="">
                <p id="noticiaData">june 30,2018</p>
                <h3>Recuperação do Anel Viário</h3>
                <h4>O objetivo da obra é captar as águas das chuva e lançá-las mais à frente, sem comprometer o meio ambiente e a população que mora na região.</h4>
            </div>
            <div class="col" id="nCartao">
                <img src="<?php echo get_stylesheet_directory_uri(). '/assets/img/caminhao.png'?>" alt="">
                <p id="noticiaData">june 30,2018</p>
                <h3>Recuperação do Anel Viário</h3>
                <h4>O objetivo da obra é captar as águas das chuva e lançá-las mais à frente, sem comprometer o meio ambiente e a população que mora na região.</h4>
            </div>
        </div>
    </section>
    <a class="noticiasVeja" href="#">Veja todos >>></a>

    <!-- TV NOVACAP -->
    <section id="tvNovacap">
        <div id="tvTitulo">
            <img src="<?php echo get_stylesheet_directory_uri(). '/assets/img/TV.png'?>" alt="Logo TV NOVACAP"> 
            <h1>NOVACAP</h1>
        </div>
        <p id="tvSub">Saiba todas as obras e ações que estão acontecendo no Distrito Federal</p>
        <!-- carrossel -->
        <div class="containerCarrossel">
            <div id="planet1" class="planet">
                <iframe id="tvVideo" src="https://www.youtube.com/embed/15kxrEVpt6k" frameborder="0"></iframe>
                <h3 id="tvVidTitulo">NOVACAP instala travessia segura no Sol Nascente</h3>
                <h4 id="tvDescricao">Parceria entre DER e NOVACAP cosntrói passarela na região</h4>
            </div>
            <div id="planet2" class="planet">
                <iframe id="tvVideo" src="https://www.youtube.com/embed/15kxrEVpt6k" frameborder="0"></iframe>
                <h3 id="tvVidTitulo">NOVACAP instala travessia segura no Sol Nascente</h3>
                <h4 id="tvDescricao">Parceria entre DER e NOVACAP cosntrói passarela na região</h4>
            </div>
            <div id="planet3" class="planet">
                <iframe id="tvVideo" src="https://www.youtube.com/embed/15kxrEVpt6k" frameborder="0"></iframe>
                <h3 id="tvVidTitulo">NOVACAP instala travessia segura no Sol Nascente</h3>
                <h4 id="tvDescricao">Parceria entre DER e NOVACAP cosntrói passarela na região</h4>
            </div>
        </div>
    </section>


<?php
require_once 'footer.php';
?>