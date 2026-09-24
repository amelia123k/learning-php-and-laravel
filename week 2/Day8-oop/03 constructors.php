<?php

class Book
{
    public $title;
    public $author;
    public $price;

    public function __construct($title, $author, $price = 1000)
    {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }

    public function displayInfo()
    {
        return "{$this->title}, {$this->author}, {$this->price}";
    }
}

$book = new Book("Gist", "Ayuk");
$book1 = new Book("Lions Den", "Amelia", 5000);
$book2 = new Book("Lions", "Amelia");

echo $book->displayInfo();
echo "<br>";

echo $book1->displayInfo();
echo "<br>";

echo $book2->displayInfo();