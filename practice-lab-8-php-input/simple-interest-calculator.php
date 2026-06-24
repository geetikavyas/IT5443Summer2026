<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Interest Calculator</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 16px;
            margin: 30px;
            color: #222;
        }

        .calculator {
            width: 400px;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
        }

        label {
            display: block;
            margin-top: 12px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }

        button {
            margin-top: 15px;
            padding: 10px;
            font-size: 16px;
            cursor: pointer;
        }

        #result {
            margin-top: 20px;
            padding: 12px;
            border: 1px solid #aaa;
            background-color: white;
        }
    </style>
</head>

<body>

    <div class="calculator">
        <h1>Simple Interest Calculator</h1>

        <form method="post" action="">
            <label for="principal">Principal Amount:</label>
            <input type="number" id="principal" name="principal" step="0.01" required>

            <label for="rate">Interest Rate (%):</label>
            <input type="number" id="rate" name="rate" step="0.01" required>

            <label for="time">Time in Years:</label>
            <input type="number" id="time" name="time" step="0.01" required>

            <button type="submit">Calculate Simple Interest</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // Read submitted form values
            $principal = $_POST["principal"];
            $rate = $_POST["rate"];
            $time = $_POST["time"];

            // Calculate simple interest
            $simpleInterest = ($principal * $rate * $time) / 100;

            // Calculate final amount
            $totalAmount = $principal + $simpleInterest;

            // Display results
            echo '<div id="result">';
            echo "<p><strong>Principal Amount:</strong> $" . number_format($principal, 2) . "</p>";
            echo "<p><strong>Interest Rate:</strong> " . $rate . "%</p>";
            echo "<p><strong>Time Period:</strong> " . $time . " years</p>";
            echo "<p><strong>Simple Interest:</strong> $" . number_format($simpleInterest, 2) . "</p>";
            echo "<p><strong>Final Amount:</strong> $" . number_format($totalAmount, 2) . "</p>";
            echo '</div>';
        }
        ?>

    </div>

</body>
</html>
