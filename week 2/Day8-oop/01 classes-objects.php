<?php

class Product
{
    public $name;
    public $price;
    public $quantity;

    public function total()
    {
        return $this->price * $this->quantity;
    }
}

$product1 = new Product();
$product1->name = "Phone";
$product1->price = 1000;
$product1->quantity = 2;

$product2 = new Product();
$product2->name = "Laptop";
$product2->price = 1000;
$product2->quantity = 3;

echo $product1->total();
echo "<br>";
echo $product2->total();