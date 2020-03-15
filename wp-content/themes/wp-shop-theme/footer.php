<footer class="footer">
    <div class="content-container">
        <div class="footer-container">
            <div class="footer-info footer-item">
                <h1><?php echo get_theme_mod('display_footer_info_title'); ?></h1>
                <p><?php echo get_theme_mod('display_footer_textarea'); ?></p>
            </div>
            <div class="footer-menu footer-item">
                <?php  dynamic_sidebar('footer_sidebar');?>
                <h1>Created by Volodymyr Korol</h1>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>

<body>

