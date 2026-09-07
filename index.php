// Creating a form

<form action="#" method="POST">
    <input type="text" name="car">
    <input type="text" name="price">
    <input type="text" name="quantity">
    <button>submit</button>
</form>

<?php

// Stores products in an array, counts them, and displays the number of products
$product = ['laptops', 'mouse', 'touch pen'];
echo count($product) . '<br>';

// Checks if the form was submitted and validates whether the input fields are empty
if (isset($_POST['car'])) {

    if (empty($_POST['car'])) {
        echo 'car required' . '<br>';
    }

    if (empty($_POST['price'])) {
        echo 'price required' . '<br>';
    }

    if (empty($_POST['quantity'])) {
        echo 'quantity required' . '<br>';
    }

    if ($_POST['price'] > 0 && $_POST['quantity'] > 0) {
        $total = $_POST['price'] * $_POST['quantity'];
        echo $total . '<br>';
    }
}

// Function that calculates the total using price and quantity
// and displays the result when the function is called
function calculatePrice($price, $quantity) {
    $result = $price * $quantity;
    echo $result . '<br>';
}

calculatePrice(100, 10);

// Starts the session and stores a username in the session
session_start();
$_SESSION['username'] = 'Amelia';

// Checks if the username exists in the session
if (isset($_SESSION['username'])) {
    echo $_SESSION['username'] . '<br>';
} else {
    echo 'username does not exist' . '<br>';
}

// Checks if the product file exists and reads its contents
if (file_exists('product.txt')) {
    echo file_get_contents('product.txt') . '<br>';
} else {
    echo 'file not found' . '<br>';
}

?>