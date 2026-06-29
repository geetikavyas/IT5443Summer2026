<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Research Assistant Application</title>

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

    <h1>Student Research Assistant Application Intake</h1>

    <p>
        Complete this form to apply for a student research assistant opportunity.
    </p>

    <div id="clientErrorBox" class="error-box hidden"></div>

    <form id="applicationForm" action="process_application.php" method="post" novalidate>

        <fieldset>
            <legend>Student Information</legend>

            <label for="fullName">Full Name</label>
            <input type="text" id="fullName" name="fullName">

            <label for="email">Email Address</label>
            <input type="email" id="email" name="email">

            <label for="major">Major</label>
            <input type="text" id="major" name="major">

            <label for="gpa">Current GPA</label>
            <input type="number" id="gpa" name="gpa" min="0" max="4" step="0.01">
        </fieldset>

        <fieldset>
            <legend>Research Lab Preference</legend>

            <label for="researchLab">Select a Research Lab</label>
            <select id="researchLab" name="researchLab">
                <option value="">Select a lab</option>
                <option value="Advanced Computing Lab">Advanced Computing Lab</option>
                <option value="Cybersecurity Lab">Cybersecurity Lab</option>
                <option value="Cleanroom and Materials Lab">Cleanroom and Materials Lab</option>
                <option value="High-Bay Makerspace Lab">High-Bay Makerspace Lab</option>
            </select>

            <p>Preferred Work Format</p>

            <label class="option">
                <input type="radio" name="workFormat" value="In Person">
                In Person
            </label>

            <label class="option">
                <input type="radio" name="workFormat" value="Hybrid">
                Hybrid
            </label>

            <label class="option">
                <input type="radio" name="workFormat" value="Remote">
                Remote
            </label>
        </fieldset>

        <fieldset>
            <legend>Skills and Availability</legend>

            <p>Select at least one research skill or interest.</p>

            <label class="option">
                <input type="checkbox" name="skills[]" value="Programming">
                Programming
            </label>

            <label class="option">
                <input type="checkbox" name="skills[]" value="Data Analysis">
                Data Analysis
            </label>

            <label class="option">
                <input type="checkbox" name="skills[]" value="Cybersecurity">
                Cybersecurity
            </label>

            <label class="option">
                <input type="checkbox" name="skills[]" value="Web Development">
                Web Development
            </label>

            <label class="option">
                <input type="checkbox" name="skills[]" value="Lab Equipment">
                Lab Equipment
            </label>

            <label for="availability">Weekly Availability</label>
            <select id="availability" name="availability">
                <option value="">Select weekly availability</option>
                <option value="5 to 10 hours">5 to 10 hours per week</option>
                <option value="11 to 15 hours">11 to 15 hours per week</option>
                <option value="16 to 20 hours">16 to 20 hours per week</option>
            </select>

            <label for="interestStatement">
                Why are you interested in this research assistant opportunity?
            </label>
            <textarea id="interestStatement" name="interestStatement" rows="5"></textarea>
        </fieldset>

        <button type="submit">Submit Application</button>
    </form>

    <script src="application.js"></script>

</body>
</html>