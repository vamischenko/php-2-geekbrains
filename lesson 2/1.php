<?php

abstract class Product
{
    private $price;

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function income()
    {
        return $this->calculation() * 0.2;
    }

    abstract public function calculation();

}


class ProductWeight extends Product
{
    private $weight;

    public function calculation()
    {
        return $this->getPrice() * $this->getWeight();
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

}

class ProductDigital extends Product
{
    public function calculation()
    {
        return $this->getPrice() / 2;
    }
}

class ProductStandard extends Product
{
    public function calculation()
    {
        return $this->getPrice();
    }
}