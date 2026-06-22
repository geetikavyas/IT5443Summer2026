<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Loops</title>
    <style>
        table {
            border-collapse: collapse;
        }

        td {
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</head>
<body>

    <h1>PHP Loop Activities</h1>

    <form method="post" action="">
        <label for="forNumber">Enter a number for the for loop:</label>
        <input type="number" id="forNumber" name="forNumber" min="1" required>

        <br><br>

        <label for="whileNumber">Enter a number for the while loop:</label>
        <input type="number" id="whileNumber" name="whileNumber" min="1" required>

        <br><br>

        <label for="x">Enter number of rows:</label>
        <input type="number" id="x" name="x" min="1" required>

        <br><br>

        <label for="y">Enter number of columns:</label>
        <input type="number" id="y" name="y" min="1" required>

        <br><br>

        <input type="submit" value="Show Results">
    </form>
    <p>When the user clicks the loop.php link, the browser sends a request to the server for that file. The server finds loop.php, runs the PHP code inside it, and sends the resulting HTML page back to the browser, which then displays the form. At this first stage, PHP runs but there may not be any form values yet. After the user fills out the form and clicks Submit, the browser sends another request to the server. PHP runs again using the submitted values and creates the output that appears on the page.</p>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Get values from the form
        $forNumber = (int) $_POST["forNumber"];
        $whileNumber = (int) $_POST["whileNumber"];
        $x = (int) $_POST["x"];
        $y = (int) $_POST["y"];

        // For loop: display numbers in an HTML list
        echo "<h2>Numbers From 1 to $forNumber</h2>";
        echo "<ul>";

        for ($i = 1; $i <= $forNumber; $i++) {
            echo "<li>$i</li>";
        }

        echo "</ul>";

        // While loop: calculate the sum
        $sum = 0;
        $number = 1;

        while ($number <= $whileNumber) {
            $sum = $sum + $number;
            $number++;
        }

        echo "<h2>Sum of Numbers From 1 to $whileNumber</h2>";
        echo "<p>The final sum is: $sum</p>";

        // Create table with x rows and y columns
        echo "<h2>Table With $x Rows and $y Columns</h2>";
        echo "<table>";

        for ($row = 1; $row <= $x; $row++) {
            echo "<tr>";

            for ($column = 1; $column <= $y; $column++) {
                echo "<td>Row $row, Column $column</td>";
            }

            echo "</tr>";
        }

        echo "</table>";
    }
    ?>

</body>
</html>
