// Get the HTML elements using their id values
let goal = document.getElementById("fitnessGoal");
let days = document.getElementById("workoutDays");
let minutes = document.getElementById("minutesPerWorkout");
let button = document.getElementById("calculateButton");
let result = document.getElementById("resultArea");
let goalMessage = document.getElementById("goalMessage");


// Show weekly target message when user selects a goal
goal.onchange = function() {
    if (goal.value === "general") {
        goalMessage.innerHTML = "Weekly target: 150 minutes for general health.";
    } 
    else if (goal.value === "weightloss") {
        goalMessage.innerHTML = "Weekly target: 250 minutes for weight loss.";
    } 
    else if (goal.value === "strength") {
        goalMessage.innerHTML = "Weekly target: 180 minutes for strength building.";
    } 
    else {
        goalMessage.innerHTML = "Select a goal to see your weekly target.";
    }
};


// This function runs when the user clicks the button
button.onclick = function() {

    let selectedGoal = goal.value;
    let workoutDays = days.value;
    let workoutMinutes = minutes.value;

    result.style.display = "block";

    // Remove old classes
    result.className = "";

    if (selectedGoal === "") {
        result.innerHTML = "Please select a fitness goal.";
        result.className = "error";
        return;
    }

    if (workoutDays === "") {
        result.innerHTML = "Please enter how many days you work out per week.";
        result.className = "error";
        return;
    }

    if (workoutMinutes === "") {
        result.innerHTML = "Please enter how many minutes you work out each day.";
        result.className = "error";
        return;
    }

    workoutDays = Number(workoutDays);
    workoutMinutes = Number(workoutMinutes);

    let totalMinutes = workoutDays * workoutMinutes;

    let targetMinutes;

    if (selectedGoal === "general") {
        targetMinutes = 150;
    } 
    else if (selectedGoal === "weightloss") {
        targetMinutes = 250;
    } 
    else if (selectedGoal === "strength") {
        targetMinutes = 180;
    }

    if (totalMinutes >= targetMinutes) {
        result.innerHTML = 
            "Great job! You completed " + totalMinutes + 
            " minutes this week. Your target was " + targetMinutes + 
            " minutes. You met your fitness goal.";

        result.className = "success";
    } 
    else {
        let remainingMinutes = targetMinutes - totalMinutes;

        result.innerHTML = 
            "Keep going! You completed " + totalMinutes + 
            " minutes this week. Your target was " + targetMinutes + 
            " minutes. You need " + remainingMinutes + 
            " more minutes to meet your goal.";

        result.className = "warning";
    }
};
