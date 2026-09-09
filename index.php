<?php
session_start(); ?>
<h1>Mini Inventory</h1>
<form action="#" method="POST">
    <label>product</label>
    <input type="text" name="product_name">
    <br><br>
    <label>price</label>
    <input type="text" name="price">
    <br><br>
    <label>quantity</label>
    <input type="text" name="quantity">
    <br><br>
    <label>search a product </label>
    <input type="text" name="search">
    <br><br>

    <button>submit</button><br>
</form>

<?php //validate form inputs
if (isset($_POST['product_name'])) {
    if (
        !empty($_POST['product_name']) &&
        !empty($_POST['price']) &&
        $_POST['price'] > 0 &&
        !empty($_POST['quantity']) &&
        $_POST['quantity'] > 0
    ) {
        //calculate the total
        $total = $_POST['price'] * $_POST['quantity'];

        echo $total . '<br>';
        //Adding product to the inventory
        $products = ['phone', 'laptop', 'mouse'];

        if (in_array($_POST['product_name'], $products)) {
            echo 'product exist' . '<br>';
        } else {
            echo 'product added' . '<br>';

            array_push($products, $_POST['product_name']);
            // saving product information to the file
            file_put_contents(
                'stock.txt',
                $_POST['product_name'] .
                    ' ' .
                    $_POST['price'] .
                    ' ' .
                    $_POST['quantity'] .
                    ' ' .
                    $total .
                    PHP_EOL,
                FILE_APPEND,
            );

            $contents = file_get_contents('stock.txt');

            echo $contents . '<br>';
        }

        foreach ($products as $product) {
            echo $product . '<br>';
        }

        // searching a product
        if (empty($_POST['search'])) {
            echo 'search is empty' . '<br>';
        } elseif (in_array($_POST['search'], $products)) {
            echo 'product found' . '<br>';
        } else {
            echo 'product not found' . '<br>';
        }
        // starting user sessions
        $_SESSION['username'] = 'Amelia';
        echo $_SESSION['username'] . '<br>';
    } else {
        echo 'Please enter valid product information.';
    }
}
?>
