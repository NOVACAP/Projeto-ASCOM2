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

    
    <!-- NOTICIAS -->
    <div>
<?php
// array with parameters
$args = array(
	'post_parent' => $post->ID,
	'post_type' => 'attachment',
	'orderby' => 'menu_order', // you can also sort images by date or be name
	'order' => 'ASC',
	'numberposts' => 5, // number of images (slides)
	'post_mime_type' => 'image'
);
if ( $images = get_children( $args ) ) {
	// if there are no images in post, don't display anything
	echo '<ul id="slider">';
	foreach( $images as $image ) {
		echo '<li>' . wp_get_attachment_image( $image->ID, 'my_slider' ) . '</li>';
	}
	echo '</ul>'; 
}
?>
************
<script>jQuery(function($){
	$('#slider').owlCarousel({
		items:1, // if you want a slider, not a carousel, specify "1" here
		loop:true,
		autoPlay:false,
		autoplayHoverPause:true, // if slider is autoplaying, pause on mouse hover
		autoplayTimeout:380,
		autoplaySpeed:800,
		navSpeed:500,
		dots:true, // dots navigation below the slider
		nav:true, // left and right navigation
		navText:['<','>']
	});
});</script>

**********

function noticias(){
    register_post_type(
        'noticias',
        array(
            'labels' => array('name' => 'Noticias'),
            'public' => true,
            'menu_position' => 1,
            'menu_icon' => 'dashicons-format-image',
            'supports' => array('title', 'editor', 'thumbnail')
        )
    );
}
add_action('init' , 'noticias');

function rudr_css_and_js_for_slider() {
	wp_enqueue_style( 'owlslider', get_stylesheet_directory_uri() . './css/owl.carousel.css', '', null );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'owlsliderjs', get_stylesheet_directory_uri() . './js/owl.carousel.min.js', array('jquery'), null, true );
} 


add_action('wp_enqueue_scripts', 'rudr_css_and_js_for_slider' );
add_image_size( 'my_slider', 640, 480, true );


?>
