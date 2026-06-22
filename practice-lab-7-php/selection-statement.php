<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Selection Statements</title>
</head>
<body>

    <h1>PHP If Statement Activity</h1>

    <?php
        // Check whether a number is positive or negative
        $number = 8;

        if ($number >= 0) {
            echo "<p>The number $number is positive.</p>";
        } else {
            echo "<p>The number $number is negative.</p>";
        }

        // Check whether two strings match
        $password1 = "welcome123";
        $password2 = "welcome123";

        if ($password1 == $password2) {
            echo "<p>The two passwords match.</p>";
        } else {
            echo "<p>The two passwords do not match.</p>";
        }
    ?>

</body>
</html>
