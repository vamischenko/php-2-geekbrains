<?php
/**
 * Шаблон каталога
 * =======================
 */
?>

<div class="products">
    <div class="breadcrumbs">
        <a href="./">Home</a><span>&nbsp;&gt;&gt;&nbsp;</span><span class="breadcrumbs-active">Catalog</span>
    </div>
    <?php
        if ($products) {
            foreach ($products as $product) {
                echo
                '<a href="?act=product&id='.$product['id'].'" class="product">'.
                    (is_null($product['is_new'])?'':'<div class="new"></div><span class="new-title">new</span>').
                    (is_null($product['is_hot'])?'':'<div class="hot"></div><span class="hot-title">hot</span>').
                    '<div class="product-image">
                        <img src="./img/'.$product['photo_name'].'" alt="'.$product['photo_name'].'">
                    </div>
                    <div class="product-info">
                        <p>'.$product['name'].'</p>
                    </div>
                    <div class="product-price">
                        <p>€.'.$product['price'].'</p>'.
                        (is_null($product['price_sale'])?'':'<p class="sale">€'.$product['price_sale'].'</p>').
                    '</div>
                </a>';
            }
        }
    ?>
    <!-- <a id="show_more" href="javascript:void(0);">More</a> -->
</div>