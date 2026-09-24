<?php

class Product
{
    public $name;
    public $price;

    public function displayInfo()
    {
        return "Product: {$this->name}";
    }
}

class Laptop extends Product
{
    public function displayInfo()
    {
        return "Laptop: {$this->name}, Price: {$this->price}";
    }
}

$laptop = new Laptop();

$laptop->name = "HP";
$laptop->price = 1200000;

echo $laptop->displayInfo();