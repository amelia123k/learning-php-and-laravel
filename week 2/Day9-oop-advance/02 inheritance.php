<?php

class Product
{
    public $name;
    public $price;
    public $quantity;

    public function __construct($name, $price, $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function displayInfo()
    {
        return "Name: {$this->name}, Price: {$this->price}, Quantity: {$this->quantity}";
    }
}

$product1 = new Product("Phone", 200000, 2);
$product2 = new Product("Laptop", 1200000, 5);

echo $product1->displayInfo();
echo "<br>";

echo $product2->displayInfo();