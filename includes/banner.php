<?php
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'Banner Content',
    'posts_per_page' => 1,
);
$arr_posts = new WP_Query($args);

if ($arr_posts->have_posts()):
    while ($arr_posts->have_posts()):
        $arr_posts->the_post();
        $featured_img_url = get_the_post_thumbnail_url(null, 'media-thumb'); 
        ?>
            <div class="banner">
                <div class="banner-content" style="background-image: url('<?php echo header_image(); ?>');">
                    <div class="banner-text">
                        <?php the_content(); ?>
                        <?php the_title('<h1 class="banner-heading">', '</h1>'); ?>
                    </div>
                </div>
            </div>
    <?php
    endwhile;
endif;
?>



