<!-- PHP on its own -->
<!DOCTYPE html> <!-- Tell browser what version of HTML to render document (HTML5) -->
<html lang='en'>

<head>
    <meta charset="utf-8"> <!-- Display special symbols or characters correctly -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Scaling Size -->
    <!--* Add External Style Sheet  -->
    <link rel="stylesheet" href="stylesheet.css">

    <!-- Title on Tab Bar -->
    <title>
        PHP
    </title>
</head>

<body>
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