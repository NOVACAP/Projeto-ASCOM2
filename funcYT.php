<?php $args = [
    'post_type' => 'videos',
    'post_status' => 'publish',
    'posts_per_page' => 5,
    'custom_fields' => 'link'
];

$i = 0; ?>

<?php
$my_posts = get_posts($args);
foreach ($my_posts as $post) {
    $i++ ?>
    <section>
        <?php $link = get_post_meta($post->ID, 'link', true); ?>
        <div class="gallery">
            <div class="gallery-container">
                <iframe
                    class="<?php echo "gallery-item-" . $i; ?> <?php echo "gallery-item" ?>"
                    src="<?php recebe($link); ?>" data-index="<?php echo $i; ?>"></iframe>
                <h3
                    class="<?php echo "textoH3-" . $i; ?> <?php echo "textoH3-"?> ">
                    <?php echo $post->post_title; ?>
                </h3>
            </div>
            <div class="gallery-controls"></div>
        </div>
    </section>
<?php } ?>
<script src="<?php echo get_stylesheet_directory_uri() . '/testeSliderjs/script.js' ?>"></script>