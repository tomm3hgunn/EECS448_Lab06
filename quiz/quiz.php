<!DOCTYPE html> <!-- Tell browser what version of HTML to render document (HTML5) -->
<html lang='en'>

<head>
    <meta charset="utf-8"> <!-- Display special symbols or characters correctly -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Scaling Size -->
    <!--* Add External Style Sheet  -->
    <link rel="stylesheet" href="/EECS448_Lab06/quiz/stylesheet_quiz.css">

    <!-- Title on Tab Bar -->
    <title>
        Quiz
    </title>
</head>

<body>
    <nav>
        <a href="/index.html">Home</a>
        <a href="/password.html">Password</a>
        <a href="/slides.html">Slides</a>
        <a href="/profile.html">Profile</a>
        <a href="/manipulate.html">Manipulate</a>
        <a href="/EECS448_Lab06/multiply/multiply.php">Multiplier</a>
        <a href="/EECS448_Lab06/quiz/quiz.html">Quiz</a>
        <a href="/EECS448_Lab06/store/customerFrontend.html">Store</a>
    </nav>
    <!-- create a global variable total that increments for every right answer -->
    <?php
    $total = 0;
    ?>

    <div class="question">
        <h2>Question 1</h2>
        <p name="ask">What year was Batman Begins, the first film of an eventual trilogy, released?</p>
        <!-- display what the user answered from the form from radio button q1 -->
        <!-- if q1 is empty, replace it with blank string -->
        <p name="answer">You answered: <?php echo $_POST["q1"] ?? "" ?></p>
        <p name="correct">Correct answer: 2005</p>
        <!-- if the user answered correctly and answer isn't empty, increment total -->
        <?php if (!empty($_POST["q1"]) && $_POST["q1"] == "2005") {
            $total++;
        } ?>

    </div>
    <div class="question">
        <h2>Question 2</h2>
        <p name="ask">Memento is recognised as one of Christopher Nolan's best films. Which of these actors starred
            in the
            film?</p>
        <!-- display what the user answered from the form from radio button q2 -->
        <p>You answered: <?php echo $_POST["q2"] ?? "" ?></p>
        <p name="correct">Correct answer: Guy Pearce</p>
        <!-- if the user answered correctly, increment total -->
        <?php if (!empty($_POST["q2"]) && $_POST["q2"] == "Guy Pearce") {
            $total++;
        } ?>
    </div>
    <div class="question">
        <h2>Question 3</h2>
        <p name="ask">What's the name of the composer who's a frequent collaborator with Nolan, working on the
            Batman films and
            Inception?</p>
        <!-- display what the user answered from the form from radio button q3 -->
        <p>You answered: <?php echo $_POST["q3"] ?? "" ?></p>
        <p name="correct">Correct answer: Hans Zimmer</p>
        <!-- if the user answered correctly, increment total -->
        <?php if (!empty($_POST["q3"]) && $_POST["q3"] == "Hans Zimmer") {
            $total++;
        } ?>
    </div>
    <div class="question">
        <h2>Question 4</h2>
        <p name="ask">Which of these films did he co-write the screenplay with his brother Jonathan?</p>
        <!-- display what the user answered from the form from radio button q4 -->
        <p>You answered: <?php echo $_POST["q4"] ?? "" ?></p>
        <p name="correct">Correct answer: All of the above</p>
        <!-- if the user answered correctly, increment total -->
        <?php if (!empty($_POST["q4"]) && $_POST["q4"] == "All of the above") {
            $total++;
        } ?>
    </div>
    <div class="question">
        <h2>Question 5</h2>
        <p name="ask">His new film - Tenet - has the son of a multi-Oscar winning actor in the lead role. Who's
            their famous
            father?</p>
        <!-- display what the user answered from the form from radio button q5 -->
        <p>You answered: <?php echo $_POST["q5"] ?? "" ?></p>
        <p name="correct">Correct answer: Denzel Washington</p>
        <!-- if the user answered correctly, increment total -->
        <?php if (!empty($_POST["q5"]) && $_POST["q5"] == "Denzel Washington") {
            $total++;
        } ?>
    </div>
    <!-- div to print the total-->
    <div class="total">
        <h2>Total</h2>
        <p> Score: <?php echo $total; ?> / 5 </p>
        <!-- percentage -->
        <p>Percentage: <?php echo $total / 5 * 100; ?>%</p>
    </div>

</body>

</html>