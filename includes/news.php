<?php
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => 'News Flash',
        'posts_per_page' => 1,
    );
    $arr_posts = new WP_Query( $args );
    if ($arr_posts->have_posts()) :
        while ($arr_posts->have_posts()) :
            $arr_posts->the_post(); ?>
            <section class="news">
                <a href="news"><h2 class="section-header">News</h2></a>
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
            </section>
        <?php endwhile;
        wp_reset_postdata();
    endif;
?>
