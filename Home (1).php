<?php
require_once 'header.php';
?>


<!--Navbar laranja e imagem-->

<?php
the_custom_logo();

$args = array(
    'post_type' => 'banners',
    'post_status' => 'publish',
    'posts_per_page' => 1,
    'category_name' => 'principal'
);

$query = new WP_Query($args);
if ($query->have_posts()):
    while ($query->have_posts()):
        $query->the_post();
?>
<div class="imagem-banner">
    <?php the_post_thumbnail(); ?>
</div>
<?php
    endwhile;
endif;
?>
</div>

<img id="wave" src="<?php echo get_stylesheet_directory_uri() . '/assets/img/wave-ai.svg' ?>" alt="">

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
            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/DIR-ADMINISTRATIVA-ai.svg' ?>" alt="">
            <h2>Diretoria Administrativa</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, quas ducimus? Velit, ipsum quasi
                quis dignissimos voluptatum, doloribus obcaecati unde alias perferendis hic voluptates impedit iusto
                delectus deserunt autem quo.</p>
            <div class="VejaMais">
                <a href="localhost/ASCOM/wordpress/diretoria-administrativa" target="_blank">Veja Mais...</a>
            </div>
        </div>
        <div class="col-sm" id="cardDir">
            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/DIR-FINANCEIRA-ai.svg' ?>" alt="">
            <h2>Diretoria Financeira</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, quas ducimus? Velit, ipsum quasi
                quis dignissimos voluptatum, doloribus obcaecati unde alias perferendis hic voluptates impedit iusto
                delectus deserunt autem quo.</p>
            <div class="VejaMais">
                <a href="localhost/ASCOM/wordpress/diretoria-financeira" target="_blank">Veja Mais...</a>
            </div>
        </div>
        <div class="col-sm" id="cardDir">
            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/DIR-EDIFICACOES-ai.svg' ?>" alt="">
            <h2>Diretoria de Edificações</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, quas ducimus? Velit, ipsum quasi
                quis dignissimos voluptatum, doloribus obcaecati unde alias perferendis hic voluptates impedit iusto
                delectus deserunt autem quo.</p>
            <div class="VejaMais">
                <a href="#" target="_blank">Veja Mais...</a>
            </div>
        </div>
        <div class="col-sm" id="cardDir">
            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/DIR-URBANIZACAO-ai.svg' ?>" alt="">
            <h2>Diretoria de Urbanização</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, quas ducimus? Velit, ipsum quasi
                quis dignissimos voluptatum, doloribus obcaecati unde alias perferendis hic voluptates impedit iusto
                delectus deserunt autem quo.</p>
            <div class="VejaMais">
                <a href="#" target="_blank">Veja Mais...</a>
            </div>
        </div>
        <div class="col-sm" id="cardDir">
            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/DIR-JURIDICA-ai.svg' ?>" alt="">
            <h2>Diretoria Jurídica</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, quas ducimus? Velit, ipsum quasi
                quis dignissimos voluptatum, doloribus obcaecati unde alias perferendis hic voluptates impedit iusto
                delectus deserunt autem quo.</p>
            <div class="VejaMais">
                <a href="#" target="_blank">Veja Mais...</a>
            </div>
        </div>
    </div>
    </div>
    </div>

    <div class="wor">
        <div class="col-auto classeT">
            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/NORMASGERAIS-ai.svg' ?>" alt="">
            <h2>Normas Gerais</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, quas ducimus? Velit, ipsum quasi
                quis dignissimos voluptatum, doloribus obcaecati unde alias perferendis hic voluptates impedit iusto
                delectus deserunt autem quo.</p>
            <div class="VejaMais-2">
                <a href="#">Veja Mais...</a>
            </div>
        </div>
        <div class="col-auto classeT">
            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/SECULLUMPONTOELETRONICO-ai.svg' ?>"
                alt="">
            <h2>Scrullum Ponto Eletrônico</h2>
            <p style="margin-bottom: 4rem; margin-top: 0.5rem;">Lorem ipsum dolor, sit amet consectetur adipisicing
                elit. Dolorem, quas ducimus? Velit, ipsum quasi
                quis dignissimos voluptatum, doloribus obcaecati unde alias perferendis hic voluptates impedit iusto
                delectus deserunt autem quo.</p>
            <div class="VejaMais-2">
                <a href="#">Veja Mais...</a>
            </div>
        </div>
        <div class="col-auto  classeT">
            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/DEGEP-DRH-ai.svg' ?>" alt="">
            <h2>DIGEP- DRH</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, quas ducimus? Velit, ipsum quasi
                quis dignissimos voluptatum, doloribus obcaecati unde alias perferendis hic voluptates impedit iusto
                delectus deserunt autem quo.</p>
            <div class="VejaMais-2">
                <a href="#">Veja Mais...</a>
            </div>
        </div>
        <div id="AP" class="col-auto  classeT">
            <br>
            <div id="circulo">
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/ACOESEPROJETOS-ai.svg' ?>" alt="">
            </div>
            <br>
            <br>
            <br>
            <br>

            <h2>Ações e projetos</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, quas ducimus? Velit, ipsum quasi
                quis dignissimos voluptatum, doloribus obcaecati unde alias perferendis hic voluptates impedit iusto
                delectus deserunt autem quo.</p>
            <div class="text-white-ps">
                <a class="text-white" href="#">Veja Mais...</a>
            </div>
        </div>
        <div class="col-auto mr-auto card-gif">
            <div class="gif">
                <?php $args = [
                    'post_type' => 'revista',
                    'post_status' => 'publish',
                    'post_per_page' => 1
                ];

                $my_posts = get_posts($args);
                foreach ($my_posts as $post) { ?>
                <?php the_post_thumbnail();
                } ?>
            </div>
        </div>
        <div class="button"><a href="">
                DOWNLOAD
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/DOWNLOAD (1)-ai.svg' ?>" alt=""></a>
        </div>
    </div>
</section>

<!-- ********************************************************************** -->
<!-- AVISO LEGAL -->

<div class="Avisos">
    <h1>Aviso Legal & Comunicados oficiais</h1>
    <section id="lps">
        <div id="linha-ps-1">
            <p class="linha-1"></p>
        </div>
        <div id="linha-ps-2">
            <p class="linha-2"></p>
        </div>
        <div id="linha-ps-3">
            <p class="linha-3"></p>
        </div>
    </section>
    <p>Fique atento aos avisos da Novacap</p>
</div>

<section class="container-fluid" id="containerAviso">

    <!--aviso 1-->
    <div id="Colum">
        <div>
            <?php $args = [
                'post_type' => 'aviso',
                'post_status' => 'publish',
                'posts_per_page' => 6
            ];

            $my_posts = get_posts($args);
            foreach ($my_posts as $post) { ?>

            <!-|Imagem aviso->
                <div class="imagem-aviso">
                    <?php the_post_thumbnail(); ?>
                </div>
                <!-Título do aviso->
                    <p id="p1">
                        <?php echo $post->post_title; ?>
                    </p>
        </div>
    </div>
    <?php } ?>
    </div>
    <a href="#" class="vejaTodos">Veja todos >>></a>
</section>


<div class="noticias">
    <h1>Notícias</h1>
    <section id="tps">
        <div id="trasso-ps-1">
            <h2 class="trasso-1"></h2>
        </div>
        <div id="trasso-ps-2">
            <h2 class="trasso-2"></h2>
        </div>
        <div id="trasso-ps-3">
            <h2 class="trasso-3"></h2>
        </div>
    </section>
    <p>Saiba todas as obras e ações que estão acontecendo em Brasília e no Distrito Federal com participação e
        fiscalização da Companhia Urbanizadora da Nova Capital</p>
</div>

<!-- aqui ficará o slider -->

<div class="row">

    <div class="col mb-5">

        <div id="carouselBSWP" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">

                <?php //args
                $args = [
                    'post_type' => 'noticias',
                    'post_status' => 'publish',
                    'posts_per_page' => 8,
                    'category_name' => 'destaque'
                ];
                $i = 0;

                ?>

                <?php $my_posts = get_posts($args);
                foreach ($my_posts as $post) { ?>

                <div class="carousel-item <?php $i++;
                    if ($i == 1) {
                        echo 'active';
                    } ?>">
                    <?php the_post_thumbnail(); ?>
                    <div class="carousel-title-box"></div>
                    <div>
                        <h3 class="tituloCarousel">
                            <?php
                    echo $post->post_title;
                            ?>
                        </h3>

                        <h5 class="infoCarousel">
                            <?php
                    echo $post->post_excerpt;
                            ?>
                        </h5>
                    </div>
                </div>
                <?php } ?>



            </div>

            <a class="carousel-control-prev" href="#carouselBSWP" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon seta-1"></span>
                <span class="sr-only">Anterior</span>
            </a>

            <a class="carousel-control-next" href="#carouselBSWP" role="button" data-slide="next">
                <span class="carousel-control-next-icon seta-2"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>

    </div>

</div>

<!-- loop de repetição dos blocos -->
<div class="row" id="Colum">
    <div class="col-sm" id="noticias">
        <?php $args = [
            'post_type' => 'noticias',
            'post_status' => 'publish',
            'posts_per_page' => 6,
            'category_name' => 'blocos'
        ];

        $my_posts = get_posts($args);
        foreach ($my_posts as $post) { ?>
        <!-- blocos -->
        <section id="noticiasCartao" class="container text-center containerC">
            <div id="noticiaCol" class="row row-cols-3">
                <div class="col" id="nCartao">
                    <?php the_post_thumbnail(); ?>
                    <p id="noticiaData">
                        <?php echo get_the_date(); ?>
                    </p>
                    <h3>
                        <?php echo $post->post_title; ?>
                    </h3>
                    <h4 class="h4">
                        <?php echo $post->post_excerpt; ?>
                    </h4>
                </div>
            </div>
        </section>
        <?php } ?>
        <!-- fim dos blocos -->
        <a class="noticiasVeja" href="#">Veja todos >>></a>

    </div>
    <!-- TV NOVACAP -->
    <section id="tvNovacap">
        <div id="tvTitulo">
            <img id="TvImg" src="<?php echo get_stylesheet_directory_uri() . '/assets/img/TV.png' ?>" alt="Logo TV NOVACAP">
            <h1>NOVACAP</h1>
            <div id="travessão-ps-1">
                <h2 class="travessão-1"></h2>
            </div>
            <div id="travessão-ps-2">
                <h2 class="travessão-2"></h2>
            </div>
            <div id="travessão-ps-3">
                <h2 class="travessão-3"></h2>
            </div>
        </div>
        <p id="tvSub">Saiba todas as obras e ações que estão acontecendo no Distrito Federal</p>
        <!-- carrossel -->
        <?php include 'funcYT.php'; ?>
    </section>

    <?php
    require_once 'footer.php';
    ?>