<?php
// This page receives the form data after the student clicks Submit Application.

$errors = [];

// Get the values submitted from application.php.
$fullName = $_POST["fullName"];
$email = $_POST["email"];
$major = $_POST["major"];
$gpa = $_POST["gpa"];
$researchLab = $_POST["researchLab"];
$workFormat = $_POST["workFormat"];
$availability = $_POST["availability"];
$interestStatement = $_POST["interestStatement"];

// Get the selected skills.
// If no skill is selected, use an empty array.
if (isset($_POST["skills"])) {
    $skills = $_POST["skills"];
} else {
    $skills = [];
}

// Check that required text fields are not empty.
if ($fullName == "") {
    $errors[] = "Please enter your full name.";
}

if ($email == "") {
    $errors[] = "Please enter your email address.";
}

if ($major == "") {
    $errors[] = "Please enter your major.";
}

// Check that GPA is entered and is between 0 and 4.
if ($gpa == "") {
    $errors[] = "Please enter your current GPA.";
} elseif ($gpa < 0 || $gpa > 4) {
    $errors[] = "GPA must be between 0 and 4.";
}

// Check that an option was selected from each required control.
if ($researchLab == "") {
    $errors[] = "Please select a research lab.";
}

if ($workFormat == "") {
    $errors[] = "Please select a work format.";
}

if (count($skills) == 0) {
    $errors[] = "Please select at least one research skill.";
}

if ($availability == "") {
    $errors[] = "Please select your weekly availability.";
}

if ($interestStatement == "") {
    $errors[] = "Please explain why you are interested in this opportunity.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Application Confirmation</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }

        table {
            width: 700px;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: lightgray;
        }

        .error-box {
            color: red;
        }

        a {
            display: inline-block;
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <h1>Student Research Assistant Application Intake</h1>

    <?php
    // If PHP found errors, show them instead of the confirmation table.
    if (count($errors) > 0) {
    ?>

        <div class="error-box">
            <h2>Please correct these items:</h2>

            <ul>
                <?php
                // Display every validation message.
                for ($i = 0; $i < count($errors); $i++) {
                    echo "<li>" . $errors[$i] . "</li>";
                }
                ?>
            </ul>
        </div>

        <a href="application.php">Return to Application Form</a>

    <?php
    } else {
    ?>

        <h2>Application Submitted Successfully</h2>

        <p>
            Thank you for submitting your research assistant application.
            The information below is shown for confirmation.
        </p>

        <table>
            <tr>
                <th>Application Item</th>
                <th>Student Response</th>
            </tr>

            <tr>
                <td>Full Name</td>
                <td><?php echo htmlspecialchars($fullName); ?></td>
            </tr>

            <tr>
                <td>Email Address</td>
                <td><?php echo htmlspecialchars($email); ?></td>
            </tr>

            <tr>
                <td>Major</td>
                <td><?php echo htmlspecialchars($major); ?></td>
            </tr>

            <tr>
                <td>Current GPA</td>
                <td><?php echo htmlspecialchars($gpa); ?></td>
            </tr>

            <tr>
                <td>Selected Research Lab</td>
                <td><?php echo htmlspecialchars($researchLab); ?></td>
            </tr>

            <tr>
                <td>Preferred Work Format</td>
                <td><?php echo htmlspecialchars($workFormat); ?></td>
            </tr>

            <tr>
                <td>Research Skills and Interests</td>
                <td>
                    <?php
                    // Combine all selected skills into one line.
                    echo htmlspecialchars(implode(", ", $skills));
                    ?>
                </td>
            </tr>

            <tr>
                <td>Weekly Availability</td>
                <td><?php echo htmlspecialchars($availability); ?></td>
            </tr>

            <tr>
                <td>Research Interest Statement</td>
                <td><?php echo htmlspecialchars($interestStatement); ?></td>
            </tr>
        </table>

        <a href="application.php">Submit Another Application</a>

    <?php
    }
    ?>

</body>
</html>