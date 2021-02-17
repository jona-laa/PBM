<?php
get_header();
?> 
<div class="container">
    <section class="about-container">
        <h1 class="section-header"><?php the_title() ?></h1>
        <?php
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'category_name' => 'About Bio',
                'posts_per_page' => 1,
            );
            $arr_posts = new WP_Query( $args );
            if ($arr_posts->have_posts()) :
                while ($arr_posts->have_posts()) :
                    $arr_posts->the_post();
                    ?>
                    <article class="bio-article">
                        <div class="bio-article-content">
                            <div class="bio-text">
                                <?php the_title('<h2 class="article-heading">', '</h2>'); ?>
                                <?php the_content() ?>
                            </div>
                            <figure class="bio-figure">
                                <?php
                                    if ( has_post_thumbnail()){
                                        the_post_thumbnail('media-thumb');
                                    }
                                ?>
                            </figure>
                        </div>
                    </article>
                    <?php
                endwhile;
                wp_reset_postdata();
            endif;
        ?>

        <?php
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'category_name' => 'About Events',
                'posts_per_page' => 1,
            );
            $arr_posts = new WP_Query( $args );
            if ($arr_posts->have_posts()) :
                while ($arr_posts->have_posts()) :
                    $arr_posts->the_post();
                    ?>
                    <div class="events">
                        <?php the_content() ?>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            endif;
        ?>
    </section>
</div> <!-- End container-->
<?php
get_footer();
?>