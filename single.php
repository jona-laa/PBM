<?php get_header() ?>
<?php the_post() ?>
<div class="container">
  <section class="news">
    <article class="news-article single">
      <h1 class="section-header"><?php the_title();?></h1>
        <figure>
            <?php
                // If there is a thumbnail
                if (has_post_thumbnail()){
                    the_post_thumbnail('medium');
                }
            ?>
            <figcaption>
                <?php    
                    // If there is a caption
                    if (the_post_thumbnail_caption()) { 
                        the_post_thumbnail_caption(); 
                        }
                ?>
            </figcaption>
        </figure>
        <?php the_content(); ?>
        <div class="pub-info">
          <span class="pub-date"><?php the_modified_date(); ?></span> <span
              class="auth-name"><?php the_author(); ?></span>
        </div>
    </article>
  </section> 
</div>
<?php get_footer() ?>