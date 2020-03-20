<?php
/**
 * Template name: ajaxFilter
 */

/**
 * Данные получаемые с фильтра
 */
$fromPrice = $_POST['fromPrice'];
$toPrice = $_POST['toPrice'];
$catsJson = stripcslashes($_POST['categories']);

/**
 * формирование салгов
 */
$cats_Slugs = array();
$cats = json_decode($catsJson,true);
foreach ($cats as $key => $value)
  $value?$cats_Slugs[] = $key: "";
/**
 * @param loop объект классса WP_Query, запрос
 * Функция выводящая посты
 */
function post_echo($loop)
{

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

}

/**
 * формирование запроса постов
 */
if (isset($_POST['fromPrice']) || isset($_POST['toPrice']) || isset($_POST['categories'])):
        $params = array(
            'posts_per_page' => 5,
            'post_type' => 'product',
            'tax_query'=>$cats_Slugs?array(      // The taxonomy query
                array(
                    'taxonomy'  => 'product_cat',
                    'field'     => 'slug', // Can be omitted, default parameter, can also be 'slug' or 'name' (name should be avoided as @Pieter Goosen says)
                    'terms'     => $cats_Slugs ,
                    'operator' => 'IN'// You can use an array to include multiples terms i.e. array(280,281)
                )
            ):'',
            'meta_query' => array(
                'relation' => 'OR',
                array(
                    array(
                        'key' => '_price',
                        'value' => $fromPrice?$fromPrice: 0,
                        'compare' => '>=',
                        'type' => 'NUMERIC'
                    ),
                    array(
                        'key' => '_price',
                        'value' => $toPrice?$toPrice: 99999,
                        'compare' => '<=',
                        'type' => 'NUMERIC'
                    )
                ),
                array(
                    array(
                        'key' => '_sale_price',
                        'value' => $fromPrice?$fromPrice: 0,
                        'compare' => '>=',
                        'type' => 'NUMERIC'
                    ),
                    array(
                        'key' => '_sale_price',
                        'value' => $toPrice?$toPrice: 99999,
                        'compare' => '<=',
                        'type' => 'NUMERIC'
                    )
                )
            )
        );

        $loop = new WP_Query($params);
        post_echo($loop);





else:
    $loop = new WP_Query(array(
        'post_type' => 'product',
        'posts_per_page' => 10,
        'orderby' => 'menu_order',
        'order' => 'ASC',
    ));
    post_echo($loop);


endif;

