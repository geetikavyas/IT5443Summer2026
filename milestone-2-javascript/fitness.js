let fitnessGoal = document.getElementById("fitnessGoal");
let goalMessage = document.getElementById("goalMessage");
let calculateButton = document.getElementById("calculateButton");
let resultArea = document.getElementById("resultArea");

fitnessGoal.onchange = function() {
    let goal = fitnessGoal.value;

    if (goal === "general") {
        goalMessage.innerHTML = "Target: 150 minutes per week for general health.";
    } else if (goal === "weightloss") {
        goalMessage.innerHTML = "Target: 250 minutes per week for weight loss.";
    } else if (goal === "strength") {
        goalMessage.innerHTML = "Target: 180 minutes per week for strength building.";
    } else {
        goalMessage.innerHTML = "Select a goal to see your weekly target.";
    }

    resultArea.style.display = "none";
};

calculateButton.onclick = function() {
    let name = document.getElementById("userName").value;
    let goal = fitnessGoal.value;
    let days = document.getElementById("workoutDays").value;
    let minutes = document.getElementById("minutesPerWorkout").value;

    if (name === "") {
        showResult("error", "Please enter your name.");
        return;
    }

    if (goal === "") {
        showResult("error", "Please select a fitness goal.");
        return;
    }

    if (days === "" || minutes === "") {
        showResult("error", "Please enter workout days and minutes per workout.");
        return;
    }

    let daysNumber = Number(days);
    let minutesNumber = Number(minutes);

    if (daysNumber <= 0 || minutesNumber <= 0) {
        showResult("error", "Workout days and minutes must be greater than 0.");
        return;
    }

    let totalMinutes = daysNumber * minutesNumber;
    let targetMinutes = getTarget(goal);

    if (totalMinutes >= targetMinutes) {
        showResult("success", "Great job, " + name + "! You completed " + totalMinutes + " minutes this week and met your goal.");
    } else {
        let remaining = targetMinutes - totalMinutes;
        showResult("warning", "Keep going, " + name + ". You completed " + totalMinutes + " minutes this week. You need " + remaining + " more minutes to meet your goal.");
    }
};

function getTarget(goal) {
    if (goal === "general") {
        return 150;
    } else if (goal === "weightloss") {
        return 250;
    } else {
        return 180;
    }
}

function showResult(className, message) {
    resultArea.style.display = "block";
    resultArea.className = className;
    resultArea.innerHTML = message;
}
