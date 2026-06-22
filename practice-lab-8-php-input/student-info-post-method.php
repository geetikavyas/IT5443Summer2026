<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Submitted Student Information</title>
</head>
<body>

    <h1>Submitted Student Information</h1>

    <?php
    // Read submitted form values, method in HTML is POST therefore $_POST is used. PHP creates one $_POST array for the whole form submission. Each line is one key-value pair, commas separate those pairs inside the array.
    $studentName = trim($_POST["studentName"] ?? ""); // ?? is called the null coalescing operator in PHP.it means: Use $_POST["studentName"] if it exists; otherwise, use an empty string "". So PHP will not show an error if the form has not been submitted yet or if studentName is missing.
    $studentEmail = trim($_POST["studentEmail"] ?? ""); // PHP is only checking whether the email field is empty, the part that checks whether the email has an @ symbol and the remaining part is in the HTML form.
    $studentStatus = $_POST["studentStatus"] ?? "";
    $comment = trim($_POST["comment"] ?? "");

    // Store validation messages
    $errors = []; //$errors is an array[] because there can be more than one error at the same time.

    // Check required information
    if ($studentName == "") {
        $errors[] = "Student name is required.";
    }

    if ($studentEmail == "") {
        $errors[] = "Student email is required.";
    }

    if ($studentStatus == "") {
        $errors[] = "Please select a student status.";
    }

    if ($comment == "") {
        $errors[] = "Please enter a comment about why you are interested in the Shore Innovation Center.";
    }

    // Display errors or submitted information
    if (!empty($errors)) {
        echo "<h2>Please Fix the Following:</h2>";
        echo "<ul>";

        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }

        echo "</ul>";
        echo '<p><a href="student-info.html">Return to the form</a></p>';

    } else {
        echo "<p><strong>Student Name:</strong> " . $studentName . "</p>";
        echo "<p><strong>Student Email:</strong> " . $studentEmail . "</p>";
        echo "<p><strong>Student Status:</strong> " . $studentStatus . "</p>";
        echo "<p><strong>Interest in the Shore Innovation Center:</strong> " . $comment . "</p>";
        echo "<p>Your information was submitted successfully.</p>";
    }
    ?>

</body>
</html>
