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

        echo "<p><strong>Student Name:</strong> " . htmlspecialchars($studentName) . "</p>";
        echo "<p><strong>Student Email:</strong> " . htmlspecialchars($studentEmail) . "</p>";
        echo "<p><strong>Program:</strong> " . htmlspecialchars($program) . "</p>";
    ?>

</body>
</html>
