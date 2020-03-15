<?php

$all_categories = get_categories(array(
    'hide_empty' => 0
));
$category_link_array = array();
foreach( $all_categories as $single_cat ){
    $category_link_array[] ='<div class="filter__category-item"><span class="check-box"><input type="checkbox" name = "' . $single_cat->name . '" id= "' . $single_cat->slug . '" value="' . $single_cat->slug . '" class="category-checkinput"> </span>    
    <label for="' . $single_cat->slug . '" >' . $single_cat->name . ' </label> </div>' ;
}
?>

<div class="filter__category">
<?php
foreach ($category_link_array as $cat){
echo $cat; }
?>
</div>
<div class="filter__btn-wrap">
    <button class="filter__btn">Show all products</button>
</div>
