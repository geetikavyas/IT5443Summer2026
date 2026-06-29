<?php
// This page receives the form data after the user clicks Submit Application.

$errors = [];

// Get the values submitted from application.php.
$fullName = $_POST["fullName"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$age = $_POST["age"];
$membershipPlan = $_POST["membershipPlan"];
$experience = $_POST["experience"];
$fitnessGoal = $_POST["fitnessGoal"];

// Get the selected workout time.
// If no option is selected, use an empty value.
if (isset($_POST["workoutTime"])) {
    $workoutTime = $_POST["workoutTime"];
} else {
    $workoutTime = "";
}

// Get the selected fitness interests.
// If no interest is selected, use an empty array.
if (isset($_POST["interests"])) {
    $interests = $_POST["interests"];
} else {
    $interests = [];
}

// Check that required text fields are not empty.
if ($fullName == "") {
    $errors[] = "Please enter your full name.";
}

if ($email == "") {
    $errors[] = "Please enter your email address.";
}

if ($phone == "") {
    $errors[] = "Please enter your phone number.";
}

// Check that age is entered and is at least 16.
if ($age == "") {
    $errors[] = "Please enter your age.";
} elseif ($age < 16) {
    $errors[] = "You must be at least 16 years old to apply.";
}

// Check that an option was selected from each required control.
if ($membershipPlan == "") {
    $errors[] = "Please select a membership plan.";
}

if ($workoutTime == "") {
    $errors[] = "Please select a preferred workout time.";
}

if (count($interests) == 0) {
    $errors[] = "Please select at least one fitness interest.";
}

if ($experience == "") {
    $errors[] = "Please select your fitness experience level.";
}

if ($fitnessGoal == "") {
    $errors[] = "Please enter your main fitness goal.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gym Membership Confirmation</title>

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

    <h1>FitLife Gym Membership Application</h1>

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
            Thank you for submitting your gym membership application.
            The information below is shown for confirmation.
        </p>

        <table>
            <tr>
                <th>Application Item</th>
                <th>Member Response</th>
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
                <td>Phone Number</td>
                <td><?php echo htmlspecialchars($phone); ?></td>
            </tr>

            <tr>
                <td>Age</td>
                <td><?php echo htmlspecialchars($age); ?></td>
            </tr>

            <tr>
                <td>Membership Plan</td>
                <td><?php echo htmlspecialchars($membershipPlan); ?></td>
            </tr>

            <tr>
                <td>Preferred Workout Time</td>
                <td><?php echo htmlspecialchars($workoutTime); ?></td>
            </tr>

            <tr>
                <td>Fitness Interests</td>
                <td>
                    <?php
                    // Combine all selected interests into one line.
                    echo htmlspecialchars(implode(", ", $interests));
                    ?>
                </td>
            </tr>

            <tr>
                <td>Fitness Experience Level</td>
                <td><?php echo htmlspecialchars($experience); ?></td>
            </tr>

            <tr>
                <td>Main Fitness Goal</td>
                <td><?php echo htmlspecialchars($fitnessGoal); ?></td>
            </tr>
        </table>

        <a href="application.php">Submit Another Application</a>

    <?php
    }
    ?>

</body>
</html>
