<!-- PHP on its own -->
<!DOCTYPE html> <!-- Tell browser what version of HTML to render document (HTML5) -->
<html lang='en'>

<head>
    <meta charset="utf-8"> <!-- Display special symbols or characters correctly -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Scaling Size -->
    <!--* Add External Style Sheet  -->
    <link rel="stylesheet" href="/~t790n230/css/stylesheet.css">

    <!-- Title on Tab Bar -->
    <title>
        PHP
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
    <!-- header that says a 100x100 Multiplication Table -->
    <div class="header">
        <h1>100x100 Multiplication Table</h1>
    </div>
    <!-- make a table with first row and column from 1 to 100 -->

    <?php
    echo "<table>";
    // add first row of numbers 1 to 100
    echo "<tr>";
    echo "<td></td>";
    for ($i = 1; $i <= 100; $i++) {
        echo "<td>$i</td>";
    }
    echo "</tr>";
    // add first column of numbers 1 to 100
    for ($i = 1; $i <= 100; $i++) {
        echo "<tr>";
        echo "<td>$i</td>";
        // add multiplication of row and column
        for ($j = 1; $j <= 100; $j++) {
            echo "<td>" . $i * $j . "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
    ?>



</body>

</html>