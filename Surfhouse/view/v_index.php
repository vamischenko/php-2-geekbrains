<?php
/**
 * Шаблон главной страницы
 * =======================
 */
?>

<div class="products">
    <div class="new-products">
        <h3>new products</h3>
        <?php
        if ($products_new) {
            foreach ($products_new as $product) {
                echo
                    '<a href="?act=product&id=' . $product['id'] . '" class="product">' .
                    (is_null($product['is_new']) ? '' : '<div class="new"></div><span class="new-title">new</span>') .
                    (is_null($product['is_hot']) ? '' : '<div class="hot"></div><span class="hot-title">hot</span>') .
                    '<div class="product-image">
                            <img src="./img/' . $product['photo_name'] . '" alt="' . $product['photo_name'] . '">
                        </div>
                        <div class="product-info">
                            <p>' . $product['name'] . '</p>
                        </div>
                        <div class="product-price">
                            <p>€.' . $product['price'] . '</p>' .
                    (is_null($product['price_sale']) ? '' : '<p class="sale">€' . $product['price_sale'] . '</p>') .
                    '</div>
                    </a>';
            }
        }
        ?>
    </div>
    <div class="top-products">
        <h3>top products</h3>
        <?php
        if ($products_top) {
            foreach ($products_top as $product) {
                echo
                    '<a href="?act=product&id=' . $product['id'] . '" class="product">' .
                    (is_null($product['is_new']) ? '' : '<div class="new"></div><span class="new-title">new</span>') .
                    (is_null($product['is_hot']) ? '' : '<div class="hot"></div><span class="hot-title">hot</span>') .
                    '<div class="product-image">
                            <img src="./img/' . $product['photo_name'] . '" alt="' . $product['photo_name'] . '">
                        </div>
                        <div class="product-info">
                            <p>' . $product['name'] . '</p>
                        </div>
                        <div class="product-price">
                            <p>€.' . $product['price'] . '</p>' .
                    (is_null($product['price_sale']) ? '' : '<p class="sale">€' . $product['price_sale'] . '</p>') .
                    '</div>
                    </a>';
            }
        }
        ?>
    </div>
    <div class="sale-products">
        <h3>sale products</h3>
        <?php
        if ($products_sale) {
            foreach ($products_sale as $product) {
                echo
                    '<a href="?act=product&id=' . $product['id'] . '" class="product">' .
                    (is_null($product['is_new']) ? '' : '<div class="new"></div><span class="new-title">new</span>') .
                    (is_null($product['is_hot']) ? '' : '<div class="hot"></div><span class="hot-title">hot</span>') .
                    '<div class="product-image">
                            <img src="./img/' . $product['photo_name'] . '" alt="' . $product['photo_name'] . '">
                        </div>
                        <div class="product-info">
                            <p>' . $product['name'] . '</p>
                        </div>
                        <div class="product-price">
                            <p>€.' . $product['price'] . '</p>' .
                    (is_null($product['price_sale']) ? '' : '<p class="sale">€' . $product['price_sale'] . '</p>') .
                    '</div>
                    </a>';
            }
        }
        ?>
    </div>
</div>
<div class="clr">
</div>
<div class="brands">
</div>
<div class="instagram">
    <div>
        <a href="#" class="fa fa-instagram fa-2x" aria-hidden="true">&nbsp;</a><span class="instagram-feed">Instagram feed:&nbsp;</span><a
                href="#" class="instagram-hashtag">#surfhouse</a>
    </div>
    <a href="#" class="instagram-photo">
        <img src="img/insta-pic1.png" alt="insta-pic1">
    </a>
    <a href="#" class="instagram-photo">
        <img src="img/insta-pic2.png" alt="insta-pic2">
    </a>
    <a href="#" class="instagram-photo">
        <img src="img/insta-pic3.png" alt="insta-pic3">
    </a>
    <a href="#" class="instagram-photo">
        <img src="img/insta-pic4.png" alt="insta-pic4">
    </a>
    <a href="#" class="instagram-photo">
        <img src="img/insta-pic5.png" alt="insta-pic5">
    </a>
    <a href="#" class="instagram-photo">
        <img src="img/insta-pic6.png" alt="insta-pic6">
    </a>
</div>