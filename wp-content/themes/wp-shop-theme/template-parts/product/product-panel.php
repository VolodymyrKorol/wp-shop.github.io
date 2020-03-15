<?php
$loop = new WP_Query(array(
    'post_type' => 'product',
    'posts_per_page' => 10,
    'orderby' => 'menu_order',
    'order' => 'ASC',
));
?>

<div class="product-panel page-item">
        <div class="shop">
                <div class="shop-wrap">
                    <?php
                    while ($loop->have_posts()): $loop->the_post(); ?>

                        <div class="shop__item">
                            <div class="shop__item-properties">
                                <div class="shop__item-size"><p><?php echo get_post_meta(get_the_ID(), 'atr', 1); ?></p></div>
                                <div class="shop__item-color"><span></span><span></span><span></span></div>
                            </div>
                            <div class="shop__item-img">
                                <?php the_post_thumbnail("thumbnail-215x300"); ?>
                            </div>
                            <div class="shop__item-content">
                                <h4 class="shop__item-title">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h4>
                                <!--                    --><?php //the_content(); ?>
                                <p class="shop__item-price">
                                    <!--                        --><?php //_e("Price:", "examp"); ?>
                                    <?php woocommerce_template_loop_price(); ?>
                                </p>
                                <!--                    --><?php //woocommerce_template_loop_add_to_cart(); ?>
                            </div>
                        </div>

                    <?php endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
        </div>
</div>