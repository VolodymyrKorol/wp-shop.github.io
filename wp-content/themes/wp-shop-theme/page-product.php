<?php
/**
 * Template Name: Production
 */
get_template_part('template-parts/header/header', 'page');
get_template_part('template-parts/sliders/top-page', 'slider');
?>
<div class="content-page">
    <div class="product">
        <div class="product-container">
            <?php get_template_part('template-parts/sidebars/page-sidebar', 'left'); ?>
            <?php get_template_part('template-parts/product/product', 'panel'); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>