<?php
get_header();
?>
<div class="container">
    <section class="art-categories">
        <h1 class="section-header"><?php the_title() ?></h1>
        <?php
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => 'Art Categories',
            'posts_per_page' => 1,
        );
        $arr_posts = new WP_Query( $args );
        if ($arr_posts->have_posts()) :
            while ($arr_posts->have_posts()) :
                $arr_posts->the_post();
                the_content();
            endwhile;
            wp_reset_postdata();
        endif;
    ?>
    </section>
</div>
<?php
get_footer();
?>