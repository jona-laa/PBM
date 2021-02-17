</main>
<footer>
    <?php get_social_media(); ?>
    <div class="divider"></div>
    <div class="footer-contact">
        <?php get_contact_info(); ?>
    </div>
    <div class="divider"></div>
    <!-- To Top Button -->
    <button id="goTop" aria-label="To top of the page" class="btn-top" onclick="toTop()">
      <svg class="arrow up" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        viewBox="5 0 50 80" xml:space="preserve">
        <polyline fill="none" stroke="#FFFFFF" stroke-width="8" stroke-linecap="round" stroke-linejoin="round" points="
		        0.375, 35.375 28.375, 0.375 58.67, 35.375 " />
      </svg>
    </button>                   
    <div class="footer-copy-privacy">
        <?php echo '<a href="' . home_url() . '/privacy-policy" class="privacy-policy">' . 'Privacy Policy' . '</a>  |  '; ?>
        <span class="footer-copy">&copy; <?php bloginfo('name')?> 2020</span>
        <div style="text-align: center;"><span class="footer-copy">created by <a href="https://github.com/jona-laa" class="footer-copy" target="_blank">jona.laa.dev</a></span></div>
    </div>
</footer>
<script src="//code.jquery.com/jquery-latest.js"></script>
<?php wp_footer(); ?>
</body>
</html>