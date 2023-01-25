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
    'posts_per_page' => 1,
    'category_name' => 'principal'
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



    <?php echo "teste de exibição" ?>
