<footer class="site-footer">

    <div class="footer-left">
        <h5>Next-Gen AI Summit 2052</h5>
        <?php
            wp_nav_menu([
                'theme_location' => 'footer_menu',
                'container' => 'false',
                'menu_class' => 'footer-menu'
            ])
        ?>
        <p class="contact-paragraph">© <?php echo date('Y'); ?> Next-Gen AI Summit. All rights reserved.</p>
    </div>

    <div class="footer-right">
        <h5 class="contact-subtitle">Stay Updated</h5>
        <p class="contact-paragraph">Subscribe for event updates & exclusive content.</p>

        <?php echo do_shortcode('[wpforms id="154"]'); ?>

        <h5 class="contact-subtitle">Follow us</h5>
        <div class="social-icons">
            <?php
                echo file_get_contents(
                    get_stylesheet_directory() . '/assets/icons/icon-fb.svg'
                );
                echo file_get_contents(
                    get_stylesheet_directory() . '/assets/icons/icon-linkedin.svg'
                );
                echo file_get_contents(
                    get_stylesheet_directory() . '/assets/icons/icon-ig.svg'
                );
                echo file_get_contents(
                    get_stylesheet_directory() . '/assets/icons/icon-yt.svg'
                );
            ?>
        </div>
    </div>

</footer>
<?php wp_footer(); ?>
</body>
</html>