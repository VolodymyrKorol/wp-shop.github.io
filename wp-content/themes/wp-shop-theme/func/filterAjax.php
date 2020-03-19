<?php
/**
 * Template name: ajaxFilter
 */
$fromPrice = $_POST['fromPrice'];
$toPrice = $_POST['toPrice'];


/**
 * Фильтр по стоимости
 */
if (isset($_POST['fromPrice']) && isset($_POST['toPrice'])):
    $params = array(
        'posts_per_page' => 5,
        'post_type' => array('product', 'product_variation'),
        'meta_query' => array(
            'relation' => 'OR',
            array(
                array(
                    'key' => '_price',
                    'value' => $fromPrice,
                    'compare' => '>=',
                    'type' => 'NUMERIC'
                ),
                array(
                    'key' => '_price',
                    'value' => $toPrice,
                    'compare' => '<=',
                    'type' => 'NUMERIC'
                )
            ),
            array(
                array(
                    'key' => '_sale_price',
                    'value' => $fromPrice,
                    'compare' => '>=',
                    'type' => 'NUMERIC'
                ),
                array(
                    'key' => '_sale_price',
                    'value' => $toPrice,
                    'compare' => '<=',
                    'type' => 'NUMERIC'
                )
            )
        )
    );
    $loop = new WP_Query($params);

    if ($loop->have_posts()):
        while ($loop->have_posts()): $loop->the_post();
            ?>
                <div class="shop__item">
                    <div class="shop__item-properties">
                        <div class="shop__item-size"><p><?php echo get_post_meta(get_the_ID(), 'atr', 1) ?></p></div>
                        <div class="shop__item-color"><span></span><span></span><span></span></div>
                    </div>
                    <div class="shop__item-img">
                        <?php echo the_post_thumbnail("thumbnail-215x300") ?>
                    </div>
                    <div class="shop__item-content">
                        <h4 class="shop__item-title">
                            <a href="<?php echo the_permalink() ?>">
                                <?php echo the_title() ?>
                            </a>
                        </h4>
                        <p class="shop__item-price">
                            <?php echo woocommerce_template_loop_price() ?>
                        </p>
                    </div>
                </div>
        <?php
        endwhile;
    else:
        ?>
        <div class="failure-prods"><h1>There is no products</h1></div>
    <?php
    endif;
    wp_reset_postdata();

else:
    $loop = new WP_Query(array(
        'post_type' => 'product',
        'posts_per_page' => 10,
        'orderby' => 'menu_order',
        'order' => 'ASC',
    ));
    if ($loop->have_posts()):
        while ($loop->have_posts()): $loop->the_post();
            ?>

                <div class="shop__item">
                    <div class="shop__item-properties">
                        <div class="shop__item-size"><p><?php echo get_post_meta(get_the_ID(), 'atr', 1) ?></p></div>
                        <div class="shop__item-color"><span></span><span></span><span></span></div>
                    </div>
                    <div class="shop__item-img">
                        <?php echo the_post_thumbnail("thumbnail-215x300") ?>
                    </div>
                    <div class="shop__item-content">
                        <h4 class="shop__item-title">
                            <a href="<?php echo the_permalink() ?>">
                                <?php echo the_title() ?>
                            </a>
                        </h4>
                        <p class="shop__item-price">
                            <?php echo woocommerce_template_loop_price() ?>
                        </p>
                    </div>
                </div>

        <?php
        endwhile;
    else:
        ?>
        <div class="failure-prods"><h1>There is no products</h1></div>
    <?php
    endif;


endif;

