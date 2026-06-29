// Get the form and error message area.
var form = document.getElementById("applicationForm");
var errorBox = document.getElementById("clientErrorBox");

// Check the form when the user clicks Submit Application.
form.addEventListener("submit", function (event) {
    var errors = [];

    // Get values from the form.
    var fullName = document.getElementById("fullName").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var age = document.getElementById("age").value;
    var membershipPlan = document.getElementById("membershipPlan").value;
    var experience = document.getElementById("experience").value;
    var fitnessGoal = document.getElementById("fitnessGoal").value;

    // Check whether a workout time radio button was selected.
    var workoutTime = document.querySelector('input[name="workoutTime"]:checked');

    // Count selected fitness interest checkboxes.
    var interests = document.querySelectorAll('input[name="interests[]"]:checked');

    // Check required fields.
    if (fullName === "") {
        errors.push("Please enter your full name.");
    }

    if (email === "") {
        errors.push("Please enter your email address.");
    }

    if (phone === "") {
        errors.push("Please enter your phone number.");
    }

    if (age === "") {
        errors.push("Please enter your age.");
    } else if (age < 16) {
        errors.push("You must be at least 16 years old to apply.");
    }

    if (membershipPlan === "") {
        errors.push("Please select a membership plan.");
    }

    if (workoutTime === null) {
        errors.push("Please select a preferred workout time.");
    }

    if (interests.length === 0) {
        errors.push("Please select at least one fitness interest.");
    }

    if (experience === "") {
        errors.push("Please select your fitness experience level.");
    }

    if (fitnessGoal === "") {
        errors.push("Please enter your main fitness goal.");
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
