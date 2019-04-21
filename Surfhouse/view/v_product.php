<?php
/**
 * Шаблон страницы товара
 * =======================
 */
?>

<div class="product-page">
    <div class="breadcrumbs">
        <a href="./">Home</a><span>&nbsp;&gt;&gt;&nbsp;</span><a href="?act=catalog">Catalog</a><span>&nbsp;&gt;&gt;&nbsp;</span><span
                class="breadcrumbs-active"><?= $product[0]['name'] ?></span>
    </div>
    <div class="product-page-images">
        <div class="product-image-big"></div>
        <a href="#" class="product-image-small"></a>
        <a href="#" class="product-image-small"></a>
        <div class="product-image-small product-image-small-active"></div>
    </div>
    <div class="product-page-info">
        <h3><?= $product[0]['name'] ?></h3>
        <h4>€.&nbsp;<?= $product[0]['price'] ?></h4>
        <h5>QUICK OVERVIEW:</h5>
        <p><?= $product[0]['overview'] ?></p>
        <a href="#" class="add-to-cart">add to cart</a>
    </div>
    <span class="product-description-tab">Product description</span>
    <div class="product-description">
        <?= $product[0]['description'] ?>
    </div>
</div>