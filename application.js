// Get the form and error message area.
var form = document.getElementById("applicationForm");
var errorBox = document.getElementById("clientErrorBox");

// Check the form when the student clicks Submit Application.
form.addEventListener("submit", function (event) {
    var errors = [];

    // Get values from the form.
    var fullName = document.getElementById("fullName").value;
    var email = document.getElementById("email").value;
    var major = document.getElementById("major").value;
    var gpa = document.getElementById("gpa").value;
    var researchLab = document.getElementById("researchLab").value;
    var availability = document.getElementById("availability").value;
    var interestStatement = document.getElementById("interestStatement").value;

    // Check whether a work format radio button was selected.
    var workFormat = document.querySelector('input[name="workFormat"]:checked');

    // Count selected skill checkboxes.
    var skills = document.querySelectorAll('input[name="skills[]"]:checked');

    // Check required fields.
    if (fullName === "") {
        errors.push("Please enter your full name.");
    }

    if (email === "") {
        errors.push("Please enter your email address.");
    }

    if (major === "") {
        errors.push("Please enter your major.");
    }

    if (gpa === "") {
        errors.push("Please enter your current GPA.");
    } else if (gpa < 0 || gpa > 4) {
        errors.push("GPA must be between 0 and 4.");
    }

    if (researchLab === "") {
        errors.push("Please select a research lab.");
    }

    if (workFormat === null) {
        errors.push("Please select a preferred work format.");
    }

    if (skills.length === 0) {
        errors.push("Please select at least one research skill.");
    }

    if (availability === "") {
        errors.push("Please select your weekly availability.");
    }

    if (interestStatement === "") {
        errors.push("Please explain why you are interested in this opportunity.");
    }

    // Stop the form if errors are found.
    if (errors.length > 0) {
        event.preventDefault();

        var message = "<h3>Please correct these items:</h3><ul>";

        for (var i = 0; i < errors.length; i++) {
            message += "<li>" + errors[i] + "</li>";
        }

        message += "</ul>";

        errorBox.innerHTML = message;
        errorBox.classList.remove("hidden");
    }
});