<?php
/*class Product{
    public $name;
    public $price;
    public $quantity;
   

function total(){
    return $this->price * $this->quantity;
} 
}
$product1 = new Product();
$product2 = new Product();

$product1->name = "phone";
$product1->price = "1000";
$product1->quantity = 2;


$product2->name = "laptop";
$product2->price = "1000";
$product2->quantity = 3;

echo $product1->total();
echo '<br>';
echo $product2->total();

class Student
{
    public $age;
    public $name;
    public $course;
    public function displayInfo()
    {
        return "Name: {$this->name}, Age: {$this->age}, Course: {$this->course}";
    }
}
$student = new Student();
$student->name = "Ayuk";
$student->course = "computer";
$student->age = "21";



$student1= new Student();
$student1->name = "Amelia";
$student1->course = "computer science";
$student1->age = "22";

$student2 = new Student();
$student2->name = "Agbor";
$student2->course = "computer lab";
$student2->age = "23";


echo $student->displayInfo();
echo '<br>';
echo $student1->displayInfo();
echo '<br>';
echo $student2->displayInfo();

class Product {
    public $name;
    public $price;
    public $quantity;


    public function total()
    {
        return 
         $this->price * $this->quantity;
    }
}
$product = new Product();
echo $product->name = 'phone'.'<br>';
$product->price = '150000';
$product->quantity = '2';
echo $product->total();

class Book
{
    public $title;
    public $author;
    public $price;
    public function displayInfo()
    {
        return $this->title . ', ' . $this->author . ', ' . $this->price;
    }
}
$book = new Book();
$book->title = 'gist';
$book->author = 'Ayuk Amelia';
$book->price = '1000cfa';

$book1 = new Book();
$book1->title = 'gister';
$book1->author = 'Ayuk Amel';
$book1->price = '2000cfa';



echo  $book->displayInfo();
echo '<br>';
echo  $book1->displayInfo();

class Book
{
    public $title;
    public $author;
    public $price;

    public function __construct($title, $author, $price=1000){
 $this->title = $title;
 $this->author = $author;
 $this->price = $price;

    }
    public function displayInfo()
    {
         return $this->title . ', ' . $this->author . ', ' . $this->price;
    }
    }

$book= new Book("gist","Ayuk");
$book1= new Book("lions den ","Amelia","5000cfa");
$book2= new Book("lions ","Amelia");
echo $book->displayInfo();
echo '<br>';
echo $book1->displayInfo();
echo '<br>';
echo $book2->displayInfo();


class Product {
    public $name;
    public $price;
    public $discount;
    public function __construct($name, $price, $discount)
    {
        $this->name = $name;
        $this->price = $price;
            $this->discount = $discount;
    }
public function totalDiscount(){
        return " Name:{$this->name} Total discount" .
           ( $this->price - ($this->price * $this->discount/100));
}
}
$product1=new Product("phone",200000,20);
$product2=new Product("laptop",1200000,50);
echo $product1->totalDiscount();
echo "<br>";
echo $product2->totalDiscount();

class Product {
    public $name;
    public $price;
    public $quantity;
    public function displayInfo()
    {
        return "Name:{$this->name},Price : {$this->price}, quantity{$this->quantity}";
    }

}
class Laptop extends Product
{
    public $ram;

    public function showRam()
    {
        return "ram:{$this->ram}";
        
    }
    public function displayInfo(){
        return "laptop:{$this->name}";
    }
}
class Phone extends Product
{
    public $ram;

    public function showRam()
    {
        return "ram:{$this->ram}";

    }
    public function displayInfo()
    {
        return "phone:{$this->name} Price : {$this->price}";
    }
}



$Laptop=new Phone();
 $Laptop->name= "HP";

 $Laptop->price=1200000;

$Laptop->quantity= 1;

 $Laptop->ram= "20GB";
echo $Laptop->displayInfo() . PHP_EOL;

interface payments {
    public function pay();
}
class CashPayments implements payments {
    public function pay(){
        return "payment made in cash ";
    }
}
$cash=new CashPayments();
echo $cash->pay();

interface payments {
    public function pay();
}
class MobilePayment implements payments {
    public function pay()
    {
        return "payment made with mobile money";
    }
}
$cash = new MobilePayment();
echo $cash->pay();
*/
interface payment{
    public function pay();
}
class MobilePayment implements payment{

    public $name;
    public $amount;
        public function __construct($name, $amount)
    {
        $this->name = $name;
        $this->amount = $amount;
    }
    public function pay(){
        return " Mobile money by Amelia:5000CFA";
    }
}
$payment = new MobilePayment("Amelia",5000);
echo $payment->pay();