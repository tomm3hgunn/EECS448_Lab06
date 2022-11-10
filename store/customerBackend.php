<!DOCTYPE html> <!-- Tell browser what version of HTML to render document (HTML5) -->
<html lang='en'>

<head>
    <meta charset="utf-8"> <!-- Display special symbols or characters correctly -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Scaling Size -->
    <!--* Add External Style Sheet  -->
    <link rel="stylesheet" href="/~t790n230/EECS448_Lab06/store/stylesheet.css">

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
        <a href="/~t790n230/EECS448_Lab06/multiply/multiply.php">Multiplier</a>
        <a href="/~t790n230/EECS448_Lab06/quiz/quiz.html">Quiz</a>
        <a href="/~t790n230/EECS448_Lab06/store/customerFrontend.html">Store</a>
    </nav>
    <!-- div Purchase complete header -->
    <div class="purchaseComplete">
        <h1>Purchase Complete!</h1>
    </div>
    <!-- get input name item 1 -->
    <p>Item 1: <?php echo $_POST["item1"] ?? "" ?></p>
    <!-- get input name item 2 -->
    <p>Item 2: <?php echo $_POST["item2"] ?? "" ?></p>
    <!-- get input name item 3 -->
    <p>Item 3: <?php echo $_POST["item3"] ?? "" ?></p>
</body>

</html>