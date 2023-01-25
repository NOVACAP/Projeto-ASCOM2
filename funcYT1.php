<style>

*{
    margin: 0;
    padding: 0;
}

body{
    padding: 20px;
    background: #eee;
    user-select: none;
}

/* remove os indicadores de posição */
[type=radio]{
    display: none;
}

#slider{
    height: 35vw;
    position: relative;
    perspective: 1000px;
    transform-style: preserve-3d;
}

#slider label{
    margin: auto;
    width: 60%;
    height: 100%;
    border-radius: 4px;
    position: absolute;
    left: 0;
    right: 0;
    cursor: pointer;
    transition: transform 0.4s ease;
}

/* posição do slider esquerdo */
#s1:checked ~ #slide2, 
#s2:checked ~ #slide3,
#s3:checked ~ #slide1{
    box-shadow: 0 1px 4px 0 rgba(0, 0, 0, .37);
    transform: translate3d(-55%,0,-200px);
}

/*posição do slider central */
#s1:checked ~ #slide1, 
#s2:checked ~ #slide2,
#s3:checked ~ #slide3{
    box-shadow: 0 13px 25px 0 rgba(0, 0, 0, .3), 0 11px 7px 0 rgba(0, 0, 0, .19);
    transform: translate3d(0,0,0);
}

/*posição do slider direito */
#s1:checked ~ #slide3, 
#s2:checked ~ #slide1,
#s3:checked ~ #slide2{
    box-shadow: 0 6px 10px 0 rgba(0, 0, 0, .3), 0 2px 2px 0 rgba(0, 0, 0, .2);
    transform: translate3d(45%,0,-100px);
}
</style>


<?php $args = [
    'post_type' => 'videos',
    'post_status' => 'publish',
    'posts_per_page' => 3,
    'custom_fields' => 'link'
];

$i = 0;?>

<!-- definindo os slides -->
<section id="slider">
    <input type="radio" name="slider" id="s1">
        <input type="radio" name="slider" id="s2" checked>
            <input type="radio" name="slider" id="s3">

<?php
$my_posts = get_posts($args);
foreach($my_posts as $post) { 
    $i++?>

    <?php $link = get_post_meta($post->ID, 'link',true);?>
<div class="containerCarrossel">
    <label for="<?php echo "s".$i?>" id="<?php echo "slide".$i?>">
        <iframe id="tvVideo" src="<?php recebe($link);?>" frameborder="0"></iframe>
        <h3 id="tvVidTitulo"><?php echo $post->post_title;?></h3>
    </label>
</div>
<?php } ?>
</section>