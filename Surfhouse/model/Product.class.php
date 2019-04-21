<?php
include_once "SQL.class.php";

Class Product extends SQL
{
    public function getNewProducts()
    {
        return parent::Select("SELECT id, name, photo_name, price, price_sale, is_new, is_hot FROM `products` ORDER BY id DESC LIMIT 6");
    }

    public function getTopProducts()
    {
        return parent::Select("SELECT id, name, photo_name, price, price_sale, show_count, is_new, is_hot FROM `products` ORDER BY show_count DESC LIMIT 3");
    }

    public function getSaleProducts()
    {
        return parent::Select("SELECT id, name, photo_name, price, price_sale, is_new, is_hot FROM `products` WHERE price_sale IS NOT NULL ORDER BY RAND() LIMIT 3");
    }

    public function getAllProducts()
    {
        return parent::Select("SELECT id, name, photo_name, price, price_sale, is_new, is_hot FROM `products`");
    }

    public function getProduct($id)
    {
        //parent::Select("UPDATE `products` SET show_count = show_count + 1 WHERE id=$id");
        return parent::Select("SELECT name, price, price_sale, overview, description FROM `products` WHERE id='$id'");
    }
}
