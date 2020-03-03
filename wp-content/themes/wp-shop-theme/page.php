<?php
get_template_part('template-parts/header/header', 'page');
?>
<style>
    body {
        background: #cccccc;
    }
</style>
<?php

$slide_list = [];
$i = 1;
while($i<=3){
    if (get_theme_mod("bg_image_$i")) {
        $slide_list[] = get_theme_mod("bg_image_$i");
    }
    $i++;
}

?>
<div id="carouselExampleControls" style="<?php if (count($slide_list)===0){echo 'display:none;';}?>" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <?php for ($i = 1; $i< count($slide_list)+1; ++$i) {
            ?>
        <div class="carousel-item <?php if ($i === 1) echo 'active'?>">
            <div class="carousel__slide-item" style="background-image: url('<?php echo $slide_list[$i-1];
            ?>');"></div>
        </div>
        <?php }; ?>

    </div>
    <div class="carousel__blackout"><p class="page-title"><?php wp_title('',true); ?>
        </p></div>

    <a class="carousel-control-prev arrow-slider" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next arrow-slider" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<?php
get_footer();
?>
