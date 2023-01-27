<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php bloginfo('name'); ?>
    </title>
    <?php wp_head(); ?>
    <!-- RESET -->
    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/reset.css' ?>">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- LINKS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/bootstrap.css' ?>">
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/css/styless.css' ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/css/dropdown.css' ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/css/caroselteste.css' ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/testeSliderjs/style.css' ?>">
</head>

<body>

    <!--nav azul-->
    <header class="p-3 text-white">
        <div class="d-flex flex-row-reverse">
            <div class="p-2 d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>
                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                    <input type="search" class="form-control form-control-dark text-white" aria-label="Search"
                        style="width: 197px !important;">
                    <i class="align-items-center fa fa-search icon branco"></i>
                </form>
                <div id="oi" class="p-2">
                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li>
                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/flickr (1)-ai.svg' ?>"
                                alt="ÍconeBolinha">
                        </li>
                        <li>
                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/instagram (1)-ai.svg' ?>"
                                alt="ÍconeInstagram">
                        </li>
                        <li>
                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/facebook (1)-ai.svg' ?>"
                                alt="ÍconeFacebook">
                        </li>
                        <li>
                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/twitter (1)-ai.svg' ?>"
                                alt="Ícone">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div>
        </div>
    </header>

<!-- menu-laranja -->

    <div class="view2 intro hm-purple-light" id="starter" style="z-index: 2;">

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
                            <li><a href="ftp://nsv04/intranet/Documentos/manual_glpi_suporte.pdf">Manual de abertura de
                                    chamado</a></li>
                        </ul>
                    </li>
                    <li><a
                            href="http://intranet/intranet/wp-content/uploads/2022/02/RAMAIS_ATUALIZADOS_EM_PAPEL_TIMBRADO_IV.pdf">TELEFONES</a>
                    </li>
                    <li class="hover-sub"><a href="https://www.novacap.df.gov.br/objetivo/">TICKET E VALESHOP</a>
                        <ul class="submenu2">
                            <li><a
                                    href="http://intranet/intranet/wp-content/uploads/2021/03/Redes-que-aceitam-o-vale.pdf">Relação
                                    das Redes credenciais</a></li>
                            <li><a
                                    href="http://intranet/intranet/wp-content/uploads/2020/05/Rede-de-postos-Credenciados.pdf">Lista
                                    de postos</a></li>
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
                    <li><a href="https://sei.df.gov.br/sip/login.php?sigla_orgao_sistema=GDF&sigla_sistema=SEI">SEI
                            GDF</a></li>
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
                            <li><a
                                    href="https://app.powerbi.com/view?r=eyJrIjoiMmVmZWJlNDItZTY4OC00NjhmLWE5YzgtMzZkZjFiZmU0MjNkIiwidCI6ImY2NWJhNWU5LWZlOWItNGU4NS05YWRkLTA1ODI5ODc5NGI1MSJ9&pageName=ReportSection">Painel
                                    de Acompanhamento ASO</a></li>
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
                    <li><a
                            href="https://cas.gdfnet.df.gov.br/owa/auth/logon.aspx?replaceCurrent=1&url=https%3a%2f%2fcas.gdfnet.df.gov.br%2fowa%2f">WEBMAIL</a>
                    </li>
                    <li><a href="http://wiki.novacap.sede/mediawiki/index.php/P%C3%A1gina_principal">NOVACAPWIKI</a>
                    </li>
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
                            <li><a href="https://www.youtube.com/watch?v=idP57h-ggvk">V Café com Covernança e Complience
                                    - CGDF</a></li>
                            <li><a href="https://www.youtube.com/watch?v=zxIA5MfmW9o">VI Café com Governaça e
                                    Complience</a></li>
                            <li><a href="https://www.youtube.com/watch?v=ypbbg0l35TA">Entrevista do diretor-presidente
                                    da ANPO</a></li>
                            <li><a href="https://www.onetrust.com/br/blog/dia-internacional-da-protecao-de-dados/">Dia
                                    Internacional da Proteção de Dados</a></li>
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
                            <li><a
                                    href="http://intranet/intranet/wp-content/uploads/2021/02/Plano-de-Trabalho-4%C2%B0-Trimestre-2020.pdf">Plano
                                    de trabalho</a></li>
                            <li><a
                                    href="http://intranet/intranet/wp-content/uploads/2021/02/Cronograma-4%C2%B0-Trimestre-2020.pdf">Cronograma</a>
                            </li>
                            <li><a
                                    href="http://intranet/intranet/wp-content/uploads/2021/02/Apresenta%C3%A7%C3%A3o-%C3%A0-CGDF-dez-2020.pdf">Apresentação
                                    à CGDF(Gestão de Riscos)</a></li>
                            <li><a
                                    href="http://intranet/intranet/wp-content/uploads/2021/02/Cronograma-Proposto-CGDF-Gest%C3%A3o-de-Riscos.pdf">Cronograma
                                    Proposto CGDF(Integridade)</a></li>
                            <li><a
                                    href="http://intranet/intranet/wp-content/uploads/2022/01/RESUMO-EXECUTIVO-Met-de-GR-Final-CONSAD-08.12.2021.pdf">Escopo
                                    Contexto e Criterio Contratos de Obras (aprovado DIREX 31.03.2021)</a></li>
                            <li><a
                                    href="http://intranet/intranet/wp-content/uploads/2021/09/Escopo-Contexto-e-Criterio-Contratos-de-Obras-aprovado-DIREX-31.03.2021.pdf">RESUMO
                                    EXECUTIVO- Metodologia e Gestão de Riscos (20.10.2021)</a></li>
                        </ul>
                    </li>
                    <li><a href="#">INTEGRIDADE</a>
                        <ul class="submenu2">
                            <li><a
                                    href="https://www.novacap.df.gov.br/wp-content/uploads/2019/12/Codigo_de_Etica_Conduta_e_Integridade.pdf">Código
                                    de Ética e Conduta</a></li>
                            <li><a
                                    href="http://intranet/intranet/wp-content/uploads/2022/02/POL%C3%8DTICA-DE-DIVULGA%C3%87%C3%83O-DE-INFORMA%C3%87%C3%95ES.pdf">Política
                                    de divulgação de informações</a></li>
                            <li><a
                                    href="https://www.novacap.df.gov.br/wp-content/uploads/2019/12/Politica_de_Transacoes_com_Partes_Relacionadas.pdf">Política
                                    de Transação com Partes Relacionadas</a></li>
                            <li><a
                                    href="http://intranet/intranet/wp-content/uploads/2021/06/POLITICA-DE-DISTRIBUICAO-DE-DIVIDENDOS-E-JUROS-SOBRE-O-CAPITAL-PROPRIO.pdf">Política
                                    de Distribuição de Dividendos</a></li>
                            <li><a
                                    href="http://intranet/intranet/wp-content/uploads/2021/11/Pol%C3%ADtica-de-Gest%C3%A3o-de-Riscos-aprovada-DIREX_CONSAD.pdf">Política
                                    de Gestão de Risco(aprovada DIREX- 29.07.2021)</a></li>
                            <li><a
                                    href="http://intranet/intranet/wp-content/uploads/2021/11/Pol%C3%ADtica-de-Governan%C3%A7a-Organizacional-aprovada-DIREX_CONSAD.pdf">Política
                                    de Governança Organizacional(aprovada DIREX - 29.07.2021)</a></li>
                            <li><a
                                    href="http://intranet/intranet/wp-content/uploads/2021/10/Escopo-Contexto-e-Criterio-Contratos-de-Obras-aprovado-DIREX-31.03.2021.pdf">Escopo
                                    COntexto e Critério Contratos de Obras (aprovado DIREX -31.03.2021)</a></li>
                            <li><a
                                    href="http://intranet/intranet/wp-content/uploads/2022/01/RESUMO-EXECUTIVO-Met-de-GR-Final-CONSAD-08.12.2021.pdf">Resumo
                                    Executivo - Metodologia de Gestão de Riscos- para DIREX (10.11.2021)</a></li>
                            <li><a
                                    href="http://intranet/intranet/wp-content/uploads/2022/01/RESUMO-EXECUTIVO-Met-de-GR-Final-CONSAD-08.12.2021.pdf">Programa
                                    de integridade 2022</a></li>
                        </ul>
                    </li>
                    <li><a href="">TRANSPARÊNCIA</a>
                        <ul class="submenu2">
                            <li><a
                                    href="https://www.novacap.df.gov.br/wp-content/uploads/2019/09/CARTA_DE_GOVERNANCA_Publicacao__04.03.2020_.pdf">Carta
                                    Anual de Políticas Publicas 2020</a></li>
                            <li><a
                                    href="https://www.novacap.df.gov.br/wp-content/uploads/2019/09/Carta-Anual-de-Politicas-Publicas-e-Governanca-Corporativa-2021.pdf">Carta
                                    Anual de Políticas Públicas 2021</a></li>
                            <li><a
                                    href="http://intranet/intranet/wp-content/uploads/2022/03/CARTA-DE-GOVERNAN%C3%87A-FINAL-ap%C3%B3s-altera%C3%A7%C3%B5es-para-CONSAD-28.03.2022-1.pdf">Carta
                                    Anual de Políticas Públicas 2022</a></li>
                            <li><a
                                    href="https://www.novacap.df.gov.br/wp-content/uploads/2021/02/Relatorio-de-Sustentabilidade-2020.pdf">Relatório
                                    de Sustentabilidade 2020</a></li>
                            <li><a
                                    href="https://www.novacap.df.gov.br/wp-content/uploads/2021/02/Relatorio-de-Gestao-2020-resize.pdf">Relatório
                                    de Gestão 2020</a></li>
                            <li><a
                                    href="http://intranet/intranet/wp-content/uploads/2022/05/Plano-de-A%C3%A7%C3%A3o-da-Ouvidoria-Exerc%C3%ADcio-2021-2022-v2.pdf">Plano
                                    de Ação Anual 2021-2022 OUVIDORIA</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href='https://www.novacap.df.gov.br/a-lei-de-acesso/'>LAI</a></li>
            <li><a href='#'>ASCOM</a></li>
        </ul>
    </nav>

    <!--fim da nav azul-->