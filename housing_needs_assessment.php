<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Housing Needs Assessment Form</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <header>
        <h1>Housing Needs Assessment Form</h1>
    </header>
    <main>
        <form class="intake-form" action="submit_housing_needs_assessment.php" method="POST">
            <div>
                <label for="current_housing">Current Housing Situation:</label>
                <textarea id="current_housing" name="current_housing" required></textarea>
            </div>
            <div>
                <label for="homelessness_history">History of Homelessness or Housing Instability:</label>
                <textarea id="homelessness_history" name="homelessness_history" required></textarea>
            </div>
            <div>
                <label for="housing_barriers">Barriers to Obtaining Stable Housing:</label>
                <textarea id="housing_barriers" name="housing_barriers" required></textarea>
            </div>
            <div>
                <label for="housing_support">Support Needed for Housing:</label>
                <textarea id="housing_support" name="housing_support" required></textarea>
            </div>
            <div>
                <label for="housing_goals">Goals for Housing Stability:</label>
                <textarea id="housing_goals" name="housing_goals" required></textarea>
            </div>
            <button type="submit">Submit</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2023 OUTSINC. All rights reserved.</p>
    </footer>
</body>
</html>
