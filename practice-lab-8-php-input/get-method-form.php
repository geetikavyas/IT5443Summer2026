<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GET Form Results</title>
</head>
<body>

    <h1>Submitted Information</h1>

    <?php
        $studentName = $_GET["studentName"] ?? "";
        $studentEmail = $_GET["studentEmail"] ?? "";
        $program = $_GET["program"] ?? "";

        echo "<p><strong>Student Name:</strong> " . $studentName. "</p>"; //the concatenation operator (.) joins pieces of text together.
        echo "<p><strong>Student Email:</strong> " . $studentEmail. "</p>";
        echo "<p><strong>Program:</strong> " . $program . "</p>";
    ?>

</body>
</html>
