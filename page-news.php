<?php
get_header();
?>
<div class="container">
<section class="news">
<h1 class="section-header"><?php the_title();?></h1>

<?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => 'News',
        'posts_per_page' => 4,
        'paged' => $paged
    );
    $arr_posts = new WP_Query( $args );
    if ($arr_posts->have_posts()) :
        while ($arr_posts->have_posts()) :
            $arr_posts->the_post(); ?>
                <article class="news-article">
                    <a href="<?php the_permalink(); ?>" class="article-heading"><?php the_title('<h2 class="article-heading">', '</h2>'); ?></a>
                    <?php 
                        the_excerpt(); 
                    ?>
                    <div class="pub-info">
                        <span class="pub-date"><?php the_modified_date(); ?></span> 
                        <span class="auth-name"><?php the_author(); ?></span>
                    </div>
                </article>
                <div class="section-divider"></div>
                <?php endwhile;
        wp_pagenavi(
            array(
            'query' => $arr_posts,
            )
            );
    endif;
?>
</section>
</div>
<?php
get_footer();
?>