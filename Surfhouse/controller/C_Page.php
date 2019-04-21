<?php
//
// Контроллер главной страницы.
//
include_once('model/Product.class.php');

class C_Page extends C_Base
{

    public function action_index()
    {
        $product_obj = new Product();
        $products_new = $product_obj->getNewProducts();
        $products_top = $product_obj->getTopProducts();
        $products_sale = $product_obj->getSaleProducts();
        $this->action = 'index';
        $this->title .= ' | Main';
        $this->content = $this->Template('view/v_index.php', array('products_new' => $products_new, 'products_top' => $products_top, 'products_sale' => $products_sale));
    }

    public function action_catalog()
    {
        $product_obj = new Product();
        $products = $product_obj->getAllProducts();
        $this->title .= ' | Catalog';
        $this->content = $this->Template('view/v_catalog.php', array('products' => $products,));
    }

    public function action_product($id)
    {
        $product_obj = new Product();
        $product = $product_obj->getProduct($id);
        $this->title .= ' | Catalog | ' . $product[0]['name'];
        $this->content = $this->Template('view/v_product.php', array('product' => $product));
    }

    public function action_contact()
    {
        $this->action = 'contact';
        $this->title .= ' | Contact';
        $this->content = $this->Template('view/v_contact.php', array());
    }
}
