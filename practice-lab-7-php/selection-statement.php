<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Selection Statements</title>
</head>
<body>

    <h1>PHP If Statement Activity</h1>

    <form method="post" action="">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>

        <br><br>

        <label for="text1">Enter first text value:</label>
        <input type="text" id="text1" name="text1" required>

        <br><br>

        <label for="text2">Enter second text value:</label>
        <input type="text" id="text2" name="text2" required>

        <br><br>

        <input type="submit" value="Check Results">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Get values entered in the form
        $number = (int) $_POST["number"];
        $text1 = $_POST["text1"];
        $text2 = $_POST["text2"];

        echo "<h2>Results</h2>";

        // Check whether the number is positive or negative
        if ($number >= 0) {
            echo "<p>The number $number is positive.</p>";
        } else {
            echo "<p>The number $number is negative.</p>";
        }

        // Check whether the two text values match
        if ($text1 == $text2) {
            echo "<p>The two text values match.</p>";
        } else {
            echo "<p>The two text values do not match.</p>";
        }
    }
    ?>

</body>
</html>
