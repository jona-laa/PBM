<?php get_header() ?>
<?php get_banner() ?>
<div class="container">
    <div class="home-content">
        <?php get_news() ?>
        <?php
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'category_name' => 'Front Page Categories',
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
    </div>
    <div class="section-divider"></div>
    <?php get_contact_form() ?>
    <div class="section-divider"></div>
    <?php echo wdi_feed(array('id'=>'2')); ?>
</div>
<?php get_footer() ?>