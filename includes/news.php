<?php
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => 'News',
        'posts_per_page' => 1,
    );
    $arr_posts = new WP_Query( $args );
    if ($arr_posts->have_posts()) :
        while ($arr_posts->have_posts()) :
            $arr_posts->the_post(); ?>
            <section class="news">
                <h2 class="section-header">News</h2>
                <article class="news-article">
                    <?php
                        the_title('<h2 class="article-heading">', '</h2>');  
                        the_content(); 
                        echo 'Published ' . get_the_date();
                    ?>
                </article>
                <div class="section-divider"></div>
            </section>
        <?php endwhile;
        wp_reset_postdata();
    endif;
?>
