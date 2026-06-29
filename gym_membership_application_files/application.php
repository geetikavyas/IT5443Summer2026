<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gym Membership Application</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }

        form {
            width: 600px;
        }

        fieldset {
            margin-bottom: 20px;
            padding: 15px;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"],
        select,
        textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            box-sizing: border-box;
        }

        .option {
            margin-top: 8px;
        }

        button {
            padding: 10px 15px;
            margin-top: 10px;
        }

        .error-box {
            color: red;
            margin-bottom: 15px;
        }

        .hidden {
            display: none;
        }
    </style>
</head>

<body>

    <h1>FitLife Gym Membership Application</h1>

    <p>
        Complete this form to apply for a gym membership.
    </p>

    <div id="clientErrorBox" class="error-box hidden"></div>

    <form id="applicationForm" action="process_application.php" method="post" novalidate>

        <fieldset>
            <legend>Member Information</legend>

            <label for="fullName">Full Name</label>
            <input type="text" id="fullName" name="fullName">

            <label for="email">Email Address</label>
            <input type="email" id="email" name="email">

            <label for="phone">Phone Number</label>
            <input type="text" id="phone" name="phone">

            <label for="age">Age</label>
            <input type="number" id="age" name="age" min="16">
        </fieldset>

        <fieldset>
            <legend>Membership Preference</legend>

            <label for="membershipPlan">Select a Membership Plan</label>
            <select id="membershipPlan" name="membershipPlan">
                <option value="">Select a plan</option>
                <option value="Basic Membership">Basic Membership</option>
                <option value="Standard Membership">Standard Membership</option>
                <option value="Premium Membership">Premium Membership</option>
            </select>

            <p>Preferred Workout Time</p>

            <label class="option">
                <input type="radio" name="workoutTime" value="Morning">
                Morning
            </label>

            <label class="option">
                <input type="radio" name="workoutTime" value="Afternoon">
                Afternoon
            </label>

            <label class="option">
                <input type="radio" name="workoutTime" value="Evening">
                Evening
            </label>
        </fieldset>

        <fieldset>
            <legend>Fitness Interests</legend>

            <p>Select at least one fitness interest.</p>

            <label class="option">
                <input type="checkbox" name="interests[]" value="Strength Training">
                Strength Training
            </label>

            <label class="option">
                <input type="checkbox" name="interests[]" value="Cardio">
                Cardio
            </label>

            <label class="option">
                <input type="checkbox" name="interests[]" value="Yoga">
                Yoga
            </label>

            <label class="option">
                <input type="checkbox" name="interests[]" value="Group Fitness Classes">
                Group Fitness Classes
            </label>

            <label class="option">
                <input type="checkbox" name="interests[]" value="Personal Training">
                Personal Training
            </label>

            <label for="experience">Fitness Experience Level</label>
            <select id="experience" name="experience">
                <option value="">Select experience level</option>
                <option value="Beginner">Beginner</option>
                <option value="Intermediate">Intermediate</option>
                <option value="Advanced">Advanced</option>
            </select>

            <label for="fitnessGoal">What is your main fitness goal?</label>
            <textarea id="fitnessGoal" name="fitnessGoal" rows="5"></textarea>
        </fieldset>

        <button type="submit">Submit Application</button>
    </form>

    <script src="application.js"></script>

</body>
</html>
