<!DOCTYPE html> <!-- Tell browser what version of HTML to render document (HTML5) -->
<html lang='en'>

<head>
    <meta charset="utf-8"> <!-- Display special symbols or characters correctly -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Scaling Size -->
    <!--* Add External Style Sheet  -->
    <link rel="stylesheet" href="./stylesheet.css">

    <!-- Title on Tab Bar -->
    <title>
        Purchase Complete!
    </title>
</head>

<body>
    <nav>
        <a href="/~t790n230/index.html">Home</a>
        <a href="/~t790n230/password.html">Password</a>
        <a href="/~t790n230/slides.html">Slides</a>
        <a href="/~t790n230/profile.html">Profile</a>
        <a href="/~t790n230/manipulate.html">Manipulate</a>
        <a href="/~t790n230/EECS448_Lab06/multiply.php">Multiplier</a>
        <a href="/~t790n230/EECS448_Lab06/quiz.html">Quiz</a>
        <a href="/~t790n230/EECS448_Lab06/customerFrontend.html">Store</a>
    </nav>
    <!-- div Purchase complete header -->
    <div class="purchaseComplete">
        <h1>Purchase Complete!</h1>
    </div>
    <!-- print user name and pass -->
    <!-- div for php -->
    <div class="php">
        <?php
        $name = $_POST["username"];
        $pass = $_POST["password"];
        echo "<p>Thank you for your purchase, $name!</p>";
        echo "<p>Your password is $pass.</p>";
        ?>
    </div>
    <!-- table with columns quantity, cost per item, and sub total. rows for item 1, item 2, item 3, shipping, and total cost -->
    <div class="table">
        <table>
            <tr>
                <th></th>
                <th>Quantity</th>
                <th>Cost Per Item</th>
                <th>Sub Total</th>
            </tr>
            <tr>
                <td>Shirt</td>
                <td>
                    <?php
                    $item1 = $_POST["item1"];
                    echo $item1;
                    ?>
                </td>
                <td>$3</td>
                <td>
                    <?php
                    $item1 = $_POST["item1"];
                    $item1Cost = $item1 * 3;
                    echo "$" . $item1Cost;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Pants</td>
                <td>
                    <?php
                    $item2 = $_POST["item2"];
                    echo $item2;
                    ?>
                </td>
                <td>$4</td>
                <td>
                    <?php
                    $item2 = $_POST["item2"];
                    $item2Cost = $item2 * 4;
                    echo "$" . $item2Cost;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Shoes</td>
                <td>
                    <?php
                    $item3 = $_POST["item3"];
                    echo $item3;
                    ?>
                </td>
                <td>$10</td>
                <td>
                    <?php
                    $item3 = $_POST["item3"];
                    $item3Cost = $item3 * 10;
                    echo "$" . $item3Cost;
                    ?>
                </td>
            </tr>
            <tr>
                <!-- two cells merged -->
                <td>Shipping</td>
                <td colspan="2">
                    <?php
                    $shipping = $_POST["shipping"];
                    echo $shipping;
                    ?>
                </td>
                <!-- if shipping is overnight, shipping cost is 50. if shipping is three day, shipping cost is 5 -->
                <td>
                    <?php
                    $shippingCost = 0;
                    if ($shipping == "Overnight") {
                        $shippingCost = 50;
                    } else if ($shipping == "Three-Day") {
                        $shippingCost = 5;
                    }
                    echo "$" . $shippingCost;
                    ?>

            </tr>
            <tr>
                <td colspan="3">Total Cost</td>
                <td>
                    <?php
                    $totalCost = $item1Cost + $item2Cost + $item3Cost + $shippingCost;
                    echo "$" . $totalCost;
                    ?>
                </td>
            </tr>
        </table>


</body>


</html>