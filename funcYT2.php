
<?php $args = [
    'post_type' => 'videos',
    'post_status' => 'publish',
    'posts_per_page' => 3,
    'custom_fields' => 'link'
];

$i = 0;?>


<?php
$my_posts = get_posts($args);
foreach($my_posts as $post) { 
    $i++?>

    <?php $link = get_post_meta($post->ID, 'link',true);?>
<div class="containerCarrossel">
            <div id=<?php echo "planet".$i ?> class="planet">

                <iframe id="tvVideo" src="<?php 
                recebe($link);
                ?>" frameborder="0"></iframe>

                <h3 id="tvVidTitulo"><?php
                echo $post->post_title;
                ?></h3>

                <h4 id="tvDescricao"><?php
                echo $post->post_content;
                ?></h4>

            </div>
            
        </div>
        
<?php } ?>