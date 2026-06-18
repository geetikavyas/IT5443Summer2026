// Get the HTML elements using their id values
let goal = document.getElementById("goal");
let days = document.getElementById("days");
let minutes = document.getElementById("minutes");
let button = document.getElementById("calculateButton");
let result = document.getElementById("result");


// This function runs when the user clicks the button
button.onclick = function() {

    // Read the value selected from the fitness goal dropdown
    let selectedGoal = goal.value;

    // Read the values entered in the two textboxes
    let workoutDays = days.value;
    let workoutMinutes = minutes.value;
    // Check if the user selected a fitness goal
    if (selectedGoal === "") {
        result.innerHTML = "Please select a fitness goal.";
        result.style.color = "red";
        return;
    }
    // Check if the user entered workout days
    if (workoutDays === "") {
        result.innerHTML = "Please enter how many days you work out per week.";
        result.style.color = "red";
        return;
    }
    // Check if the user entered minutes per workout
    if (workoutMinutes === "") {
        result.innerHTML = "Please enter how many minutes you work out each day.";
        result.style.color = "red";
        return;
    }

    // Convert the textbox values from text to numbers
    // This is important because input values are read as text by default
    workoutDays = Number(workoutDays);
    workoutMinutes = Number(workoutMinutes);

    // Calculate the total exercise minutes for the week
    let totalMinutes = workoutDays * workoutMinutes;

    // Create a variable to store the weekly target
    let targetMinutes;

    // Set the target minutes based on the selected fitness goal
    if (selectedGoal === "general") {
        targetMinutes = 150;
    } 
    else if (selectedGoal === "weightloss") {
        targetMinutes = 250;
    } 
    else if (selectedGoal === "strength") {
        targetMinutes = 180;
    }


    // Compare the user's total minutes with the target minutes
    if (totalMinutes >= targetMinutes) {

        // This message appears if the user meets the goal
        result.innerHTML = 
            "Great job! You completed " + totalMinutes + 
            " minutes this week. Your target was " + targetMinutes + 
            " minutes. You met your fitness goal.";

        result.style.color = "green";
    } 
    else {

        // Calculate how many more minutes are needed
        let remainingMinutes = targetMinutes - totalMinutes;

        // This message appears if the user does not meet the goal
        result.innerHTML = 
            "Keep going! You completed " + totalMinutes + 
            " minutes this week. Your target was " + targetMinutes + 
            " minutes. You need " + remainingMinutes + 
            " more minutes to meet your goal.";

        result.style.color = "orange";
    }
};
