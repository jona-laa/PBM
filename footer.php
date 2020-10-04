</main>
<footer>
    <?php get_social_media(); ?>
    <div class="divider"></div>
    <div class="footer-contact">
        <?php get_contact_info(); ?>
    </div>
    <div class="divider"></div>
    <button class="to-top-btn" onclick="toTop()"><img src="<?php echo get_theme_file_uri( 'images/arrow.png' ); ?>"
                alt="To the top of the page icon" /></button>                    
    <div class="divider"></div>
    <div class="footer-copy-privacy">
        <?php echo '<a href="' . home_url() . '/privacy-policy" class="privacy-policy">' . 'Privacy Policy' . '</a>  |  '; ?>
        <span class="footer-copy">&copy; <?php bloginfo('name')?> 2020</span>
    </div>
</footer>
<script src="//code.jquery.com/jquery-latest.js"></script>
<?php wp_footer(); ?>
</body>
</html>